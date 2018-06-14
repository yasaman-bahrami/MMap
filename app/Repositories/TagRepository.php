<?php
/**
 * Created by PhpStorm.
 * User: yasaman.samani
 * Date: 2018-02-06
 * Time: 1:50 PM
 */

namespace App\Repositories;


use App\Tag;

class TagRepository
{
    public function getAll()
    {
        return Tag::orderBy('name', 'asc')->get();
    }

    public function storeTag($name)
    {
        $tag = new Tag();
        $tag->name = $name;
        $tag->save();
    }
}