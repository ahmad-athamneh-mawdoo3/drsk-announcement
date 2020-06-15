<?php

namespace Mawdoo3\Drsk\Announcement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
        use SoftDeletes;
    protected $fillable = ['title','description','link','comment'];

}
