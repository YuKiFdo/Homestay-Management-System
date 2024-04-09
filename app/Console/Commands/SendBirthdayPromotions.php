<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class SendBirthdayPromotions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send promotional emails to customers five days before their birthday';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // // customer where bithday after 5 days
        // $customers = Customer::whereDate('dob', Carbon::now()->addDays(5))->get();

        // if ($customers->isEmpty()) {
        //     dd('No customers found with birthdays in ' . Carbon::now()->addDays(5)->format('Y-m-d') . '.');
        // }

        //customer name Shehal Herath
        $customers = Customer::where('name', 'Shehal Herath')->get();

        $result = Mail::to('recipient@example.com')->send(new DemoEmail($customers));

        if ($result) {
            dd('Birthday promotional emails sent successfully.');
        } else {
            dd('Failed to send birthday promotional emails.');
        }

    }
}
