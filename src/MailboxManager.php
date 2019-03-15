<?php

namespace BeyondCode\Mailbox;

use BeyondCode\Mailbox\Drivers\Log;
use BeyondCode\Mailbox\Drivers\Mailgun;
use BeyondCode\Mailbox\Drivers\Postmark;
use BeyondCode\Mailbox\Drivers\RawMime;
use BeyondCode\Mailbox\Drivers\SendGrid;
use Illuminate\Support\Manager;

class MailboxManager extends Manager
{
    public function mailbox($name = null)
    {
        return $this->driver($name);
    }

    public function createLogDriver()
    {
        return new Log();
    }

    public function createMailgunDriver()
    {
        return new Mailgun();
    }

    public function createSendGridDriver()
    {
        return new SendGrid();
    }

    public function createPostmarkDriver()
    {
        return new Postmark();
    }

    public function createRawMimeDriver()
    {
        return new RawMime();
    }

    public function getDefaultDriver()
    {
        return $this->app['config']['mailbox.driver'];
    }
}
