<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class PostTags extends Model
{

    protected $guarded = [];
    public $table = 'post_tags';
}
