<?php

namespace App\Http\Controllers;

use App\Repositories\ResourceRepository;
use App\Repositories\TagRepository;
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
            'resources' => $this->resources->getAll(),
            'tags' => $this->tags->getAll()
        ]);
    }

    public function showStories() {
        return view('stories', [
            'resources' => $this->resources->getAll()
        ]);
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

    public function store(Request $request, Resource $resource)
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

    public function destroy(Request $request, Resource $resource)
    {
        $this->authorize('destroy', $resource);

        $resource->delete();

        return redirect('/resources');
    }
}
