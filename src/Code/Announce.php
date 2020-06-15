<?php
namespace Mawdoo3\Drsk\Announcement;

use \Mawdoo3\Drsk\Announcement\Models\{ Announcement, Inbox};
// use \Mawdoo3\Drsk\Connector;

class Announce  
{
    protected $user;
    function __construct() {
        // $this->user = Connector::to('Auth\Auth')->auth()->payload()->toArray();
        $this->user = (object)[
            'id' => 1,
            'name' => 'ahmad athamneh',
            'type' => 'student',
            'body' => 'body data',
            'files_id' => 1,
            'grade_id' => 1,
            'division_id' => 1,
            'avatar' => 1,
            'school_id' => 1,
            'parent_ids' => 1,
        ];
    }

    
    /**
     * add announcement for all student in user school.
     *
     * @param  Announcement   $data
     * @return Boolean to another function
     */
    public function forStudents($data)
    {
        $data->created_by = $this->user->id;
        // $data->files_id = Connector::to('Uploader\PackUploader')->toS3()->getPackId();

        $announcement = Announcement::insertGetId((array)$data);
        $schoolUser = \DB::table('students')->where('school_id', $this->user->school_id)->get();
        foreach ($schoolUser as $user) {
            Inbox::updateOrInsert([ 'sender_id' => $data->created_by, 'reciever_id' => $user->id,
            ],[
                'sender_id' => $data->created_by,
                'reciever_id' => $user->id,
                'title' => $data->title,
                'body' => $data->body,
                'read' => false,
                'announcment_id' => $announcement,
            ]);
        }
        return true;
    }

    /**
     * add announcement for all staff in user school.
     *
     * @param  Announcement   $data
     * @return Boolean to another function
     */
    public function forstaff($data)
    {
        $data->created_by = $this->user->id;
        // $data->files_id = Connector::to('Uploader\PackUploader')->toS3()->getPackId();

        $announcement = Announcement::insertGetId((array)$data);
        $schoolUser = \DB::table('staff')->where('school_id', $this->user->school_id)->get();
        foreach ($schoolUser as $user) {
            Inbox::updateOrInsert([ 'sender_id' => $data->created_by, 'reciever_id' => $user->id,
            ],[
                'sender_id' => $data->created_by,
                'reciever_id' => $user->id,
                'title' => $data->title,
                'body' => $data->body,
                'read' => false,
                'announcment_id' => $announcement,
            ]);
        }
        return true;
    }

    /**
     * add announcement for all student in user school.
     *
     * @return Array of announcments
     */
    public function myAnnouncements()
    {
        return Inbox::where('sender_id', $this->user->id)->orderBy('read')->get()->toArray() ?? [];
    }
    
    /**
     * add announcement for all student in user school.
     *
     * @return Array of notifications
     */
    public function myNotifications()
    {
        return Inbox::where('recirver_id', $this->user->id)->orderBy('read')->get()->toArray() ?? [];
    }
    
    /**
     * mark all notifications as read
     *
     * @return Boolean
     */
    public function readAll()
    {
        return Inbox::where('recirver_id', $this->user->id)->update(['read' => 1]);
    }

    /**
     * mark spacific notifications as read
     *
     * @return Boolean
     */
    public function read($id)
    {
        return Inbox::where('id', $id)->update(['read' => 1]);
    }

}
