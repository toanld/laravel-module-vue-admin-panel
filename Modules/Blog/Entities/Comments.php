<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Toanld\DebugToSql\DebugToSQL;

class Comments extends Model
{
    use HasFactory;
    use DebugToSQL;

    protected $guarded = [];
    public $table = 'comments';

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\CommentsFactory::new();
    }

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Blog::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
