<?php

namespace BeyondCode\Mailbox\Http\Controllers;

use BeyondCode\Mailbox\Facades\Mailbox;
use BeyondCode\Mailbox\Http\Requests\RawMimeRequest;
use Illuminate\Routing\Controller;

class RawMimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('laravel-mailbox');
    }

    public function __invoke(RawMimeRequest $request)
    {
        Mailbox::callMailboxes($request->email());
    }
}
