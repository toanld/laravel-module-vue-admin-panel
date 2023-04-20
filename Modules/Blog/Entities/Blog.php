<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table = 'posts';

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id')->withTimestamps();
    }
}
