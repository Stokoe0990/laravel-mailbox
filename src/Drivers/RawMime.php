<?php

namespace BeyondCode\Mailbox\Drivers;

use BeyondCode\Mailbox\Http\Controllers\RawMimeController;
use Illuminate\Support\Facades\Route;

class RawMime implements DriverInterface
{
    public function register()
    {
        Route::prefix(config('mailbox.path'))->group(function () {
            Route::post('/raw-mime', RawMimeController::class);
        });
    }
}
