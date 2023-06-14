<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelExample extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table = 'data_example';
}
