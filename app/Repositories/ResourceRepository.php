<?php
/**
 * Created by PhpStorm.
 * User: yasaman.samani
 * Date: 2018-02-06
 * Time: 1:28 PM
 */

namespace App\Repositories;


use App\Resource;
use App\Tag;

class ResourceRepository
{
    public function getAll()
    {
        return Resource::with('tags')->get();
    }

    public function getResourcesByTags($tags)
    {
        $resources = Resource::whereHas('tags', function ($query) use ($tags){
            $query->whereIn('name', $tags);
        })->with('tags')->get();
        return $resources;

    }

}