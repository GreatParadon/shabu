<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentImage extends Model
{
    protected $guarded = ['id', '_token', 'files'];
    public $timestamps = true;
}
