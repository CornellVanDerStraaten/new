<?php

namespace App\Console\Commands\Mails;

use App\Mail\GoalProgressReminder;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendProgressReportMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send-progress-report-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Reports preparing \n";

        $user = User::find(1);

        // Put into Jobs
        Mail::to($user)->send(new GoalProgressReminder());

        echo 'Reports sent';
    }
}
