<?php

namespace App\Listeners;


use App\Mail\AddPro;
use App\Mail\NewProduct;
use App\Events\AddProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewProductEmail
{
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AddProduct  $event
     * @return void
     */
    public function handle(AddProduct $event)
    {
        Mail::to($event->pro->email)->send(new App\Mail\NewProduct($event->pro));
    }
}
