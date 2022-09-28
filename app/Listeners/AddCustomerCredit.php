<?php

namespace App\Listeners;

use App\Events\SaleReturn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddCustomerCredit
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SaleReturn  $event
     * @return void
     */
    public function handle(SaleReturn $event)
    {
        dd($event->amount);
    }
}
