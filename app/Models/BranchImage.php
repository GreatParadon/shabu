<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchImage extends Model
{
    protected $guarded = ['id', '_token', 'files'];
    public $timestamps = true;
}
