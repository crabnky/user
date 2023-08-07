<?php

declare(strict_types=1);

namespace MsgPhp\User\Event;

use MsgPhp\User\UserEmail;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class UserEmailConfirmed
{
    public $userEmail;

    public function __construct(UserEmail $userEmail)
    {
        $this->userEmail = $userEmail;
    }
}
