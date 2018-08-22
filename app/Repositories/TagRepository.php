<?php

namespace App\Repositories;


use App\Tag;

class TagRepository
{
    public function getAll()
    {
        return Tag::orderBy('name', 'asc')->get();
    }

    public function getTagByName($name)
    {
        return Tag::where('name', $name)->first();
    }

    public function storeTag($name)
    {
        $tag = new Tag();
        $tag->name = $name;
        $tag->save();
    }
}