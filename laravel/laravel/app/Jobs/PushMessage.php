<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use App\Test;
class PushMessage extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
        //

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::alert($this->id);
        Test::where('id',intval($this->id))->update(['content'=>'tangjun'.$this->id]);
        //Test::create(['content'=>rand(1,10)]);

    }
}
