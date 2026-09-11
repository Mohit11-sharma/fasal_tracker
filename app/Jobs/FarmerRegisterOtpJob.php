<?php

namespace App\Jobs;

use App\Mail\FarmerRegisterOtp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class FarmerRegisterOtpJob implements ShouldQueue
{
    use Dispatchable,Queueable;

    public $otp;

    /**
     * Create a new job instance.
     */
    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->otp['email'])->send(new FarmerRegisterOtp($this->otp));
    }
}
