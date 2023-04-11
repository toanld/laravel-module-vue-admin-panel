<?php

namespace Modules\Blog\Entities;

use App\Traits\MenuTree;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Toanld\DebugToSql\DebugToSQL;

class Category extends Model
{
    use HasFactory;
    use DebugToSQL;
    use MenuTree {
        MenuTree::boot as treeBoot;
    }
    protected $fillable = [];
    protected $table = "blog_categories";

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\CategoryFactory::new();
    }
}
