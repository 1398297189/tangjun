<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;
use App\Http\Controllers\Controller;
use App\Jobs\PushMessage;
use Queue;
use App\Test;
class UserController extends Controller
{
    /**
     * Send a reminder e-mail to a given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendReminderEmail(Request $request,$id)
    {

        Test::where('id',$id)->update(['content'=>'tangjun------------------------']);
        //dd(env('QUEUE_DRIVER', 'sync'));

        set_time_limit(0);
        //Queue::later(0, new PushMessage());// 推进队列
/*        for($i=0;$i<500;$i++){
            if($id == 5){
                Queue::later(0, new PushMessage($id.rand(6,9).rand(0,9).rand(0,9)));// 推进队列
            }else{
                Queue::later(0, new PushMessage($id.rand(1,5).rand(0,9).rand(0,9)));// 推进队列
            }

        }*/

        //$user = User::findOrFail($id);
        //$this->dispatch(new SendReminderEmail($user));
        return view('welcome',['id'=>$id]);
    }
}