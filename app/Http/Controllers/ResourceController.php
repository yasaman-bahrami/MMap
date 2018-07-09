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
        $this->tags->storeTag($request->name);
        $response = [
            'status' => 'success'
        ];
        return $response;
    }

    public function updateResource(Request $request)
    {
        $this->resources->updateStory($request);
        $response = [
            'status' => 'success'
        ];
        return $response;
    }

}
