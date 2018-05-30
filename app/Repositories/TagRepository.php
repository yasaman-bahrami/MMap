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
        return Tag::get();
    }
}