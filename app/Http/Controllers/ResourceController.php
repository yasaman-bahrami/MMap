<?php

namespace App\Http\Controllers;

use App\OriginalData;
use App\PageRanker\Calculation\PageRank;
use App\PageRanker\Calculation\ResultFormatter;
use App\PageRanker\Edge;
use App\PageRanker\Graph;
use App\PageRanker\Node;
use App\Repositories\ResourceRepository;
use App\Repositories\TagRepository;
use App\Resource;
use App\ResourceTag;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ResourceController extends Controller
{
    protected $resources;
    public function __construct(ResourceRepository $resources, TagRepository $tags)
    {
        $this->resources = $resources;
        $this->tags = $tags;
    }


    public function index(Request $request)
    {
        return view('index', [
            'resources' => $this->resources->getRelatedResourcesPageRanked(),
            'tags' => $this->tags->getAll()
        ]);
    }

    public function showStories() {
        return view('stories', [
            'resources' => $this->resources->getAll()
        ]);
    }

    public function showTags() {
        return json_encode(['tags' => $this->tags->getAll()]);
    }

    public function getResourcesByTags(Request $request)
    {
        $tagListArray = $request->input('tagList');
        $resources = $this->resources->getResourcesByTags($tagListArray);
        $payload = [
            'status' => 'success',
            'data' => $resources
        ];
        return json_encode($payload);
    }
    public function storeTag(Request $request )
    {
        var_dump($request);
        //$this->tags->storeTag("dsd");
    }

    public function update(Request $request, Resource $resource)
    {
        $this->authorize('store', $resource);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }


        $request->user()->resources()->create([
            'name' => $request->name,
        ]);

        return redirect('/resources');
    }

}
