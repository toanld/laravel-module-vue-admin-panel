<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Toanld\DebugToSql\DebugToSQL;

class Post extends Model
{
    use HasFactory;
    use DebugToSQL;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\PostFactory::new();
    }
}
