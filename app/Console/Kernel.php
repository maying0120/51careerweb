<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Model\admin\user;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {
            $users = user::all();
            $id = array();
            foreach ($users as $user) {
                array_push($id, $user->id);
            }

            for ($i = 0; $i < count($id); $i++){
                rec($id[$i]);
            }
        })->everyMinute();

    }


    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}

function rec($id) {
    $time = time();
    $link = route('host').'/job/'.dechex($time).'-'.$id;
    $user = user::find($id);
    $user->recommend_job = $link;
    $user->save();
}