<?php

namespace App\Console;

use App\Jobs\PruneOldPostsJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->job(new PruneOldPostsJob())->dailyAt('00:00');
    }
}
