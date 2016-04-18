<?php

namespace App\Http\Controllers\V1;

use Laravel\Lumen\Routing\Controller as BaseController;
use Predis;
use App\Entities\ExamQuestionType;
class indexController extends BaseController
{
    //
    public function index(ExamQuestionType $ExamQuestionType){
        $redis = new Predis\Client();
       //dd($ExamQuestionType->get());
        //$ExamQuestionType->append(['name'=>'dfdfdf']);
/*        $i = 0;
        while($i<10){
            $redis->lpush('lists',[rand(1,10),rand(1,10)]);
            $i++;
        }*/
/*        set_time_limit(0);
        while(True){
            try{
                echo $redis->LPOP('lists')."\n";
            }catch(Exception $e){
                echo $e->getMessage()."\n";
            }
            sleep(rand()%3);
        }*/

//set_time_limit(0);
/*        $redis->subscribe(array('channel-1'), function ($redis, $chan, $msg) {
            // do something
            echo $msg;
        });*/
/*        if($list =  $redis->brpop('lists',0)) {
            $ExamQuestionType->name = $list[1];
            $ExamQuestionType->save();
            sleep(5);
        }*/

        //$redis->lpush('lists',array('1','2'));

        //$list =  $redis->brpop('lists',30);

        return  view('index');
    }
}
