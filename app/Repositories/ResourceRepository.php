<?php
/**
 * Created by PhpStorm.
 * User: yasaman.samani
 * Date: 2018-02-06
 * Time: 1:28 PM
 */

namespace App\Repositories;


use App\PageRanker\Calculation\PageRank;
use App\PageRanker\Calculation\ResultFormatter;
use App\PageRanker\Edge;
use App\PageRanker\Graph;
use App\PageRanker\Node;
use App\Resource;
use App\Tag;

class ResourceRepository
{
    public function getAll()
    {
        return Resource::with('tags')->get();
    }

    public function getRelatedResourcesPageRanked($searchTerm = '')
    {
        $resources = Resource::with('tags')->get();
        $count = 0;
        $graph = new Graph();
        if($resources->get(0)->pagerank == 0)
        {
            foreach ($resources as $resourceA)
            {
                $tagsA = $resourceA->tags()->get();
                foreach ($resources as $resourceB)
                {
                    if ($resourceA->id != $resourceB->id)
                    {
                        $tagsB = $resourceB->tags()->get();
                        foreach ($tagsA as $tagA)
                        {
                            foreach ($tagsB as $tagB)
                            {
                                if ($tagA->name == $tagB->name)
                                {
                                    $graph->addEdge(new Edge(new Node($resourceA->id), new Node($resourceB->id)));
                                }
                            }
                        }
                    }
                }
            }

            //Run the page rank;
            $pageRank = new PageRank();
            $pageRankCalculation = $pageRank->calculatePagerank($graph);
            $pageRankCalculation->getLastHistoryEntry()->sortEntries();

            $entries = $pageRankCalculation->getLastHistoryEntry()->getEntries();
            foreach ($entries as $entry)
            {
                $resource = $this->getResourceById($entry->getNode()->getName());
                $resource->pagerank = $entry->getNewPr();
                $resource->save();
            }
        }
        return Resource::with('tags')->orderBy('pagerank', 'desc')->get();
    }

    public function getResourceById($id)
    {
        return Resource::find($id);
    }

    public function getResourcesByTags($tags)
    {
        $resources = Resource::whereHas('tags', function ($query) use ($tags){
            $query->whereIn('name', $tags);
        })->with('tags')->get();
        return $resources;

    }

    public function updateStory($request)
    {
        $resource = $this->getResourceById($request->id);
        $resource->title = $request->title;
        $resource->notes = $request->notes;
        $resource->bio = $request->bio;
        $resource->summary = $request->summary;
        $resource->storyTeller = $request->storyTeller;
        $resource->interviewer = $request->interviewer;
        $resource->timeOfStory = $request->timeOfStory;
        $resource->attributes = $request->attributes;
        $resource->latitude = $request->latitude;
        $resource->longitude = $request->longitude;
        $resource->save();
        $tags = $request->tags;
        foreach ($tags as $tag)
        {
            $resource->tags()->attach($tag->id);
        }
        $oldTags = $request->oldTags;
        info("-------------------"+$oldTags);
        foreach ($oldTags as $oldTag)
        {
            if(isset($oldTag))
                info($oldTag);
                $resource->tags()->detach((int)$oldTag);
        }
    }

}