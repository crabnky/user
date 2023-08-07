<?php

declare(strict_types=1);

namespace MsgPhp\User\Event;

use MsgPhp\User\UserRole;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class UserRoleDeleted
{
    public $userRole;

    public function __construct(UserRole $userRole)
    {
        $this->userRole = $userRole;
    }
}
