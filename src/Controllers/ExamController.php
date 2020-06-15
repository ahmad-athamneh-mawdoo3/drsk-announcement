<?php

namespace Mawdoo3\Drsk\Announcement\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Mawdoo3\Drsk\Announcement\Models\SavedResult;
use Mawdoo3\Drsk\Announcement\Announce;
class ExamController extends Controller
{
    /**
     * redirect the specified function depend on action.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return redirect to another function
     */
    public function testRoute(Request $request)
    {
        return (new Announce)->forStudents((object)[
            'title' => 'title 1 ',
            'body' => 'body data',
            ]);
    }
}
