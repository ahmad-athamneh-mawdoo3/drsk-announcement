<?php

namespace Mawdoo3\Drsk\Announcement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inbox extends Model
{
    protected $table = 'inbox';
    use SoftDeletes;
    protected $fillable = [
        'sender_id',
        'reciever_id',
        'read',
        'announcment_id',
        'title',
        'body',
        'files_id',
    ];

}
