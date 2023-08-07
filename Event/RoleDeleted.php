<?php

declare(strict_types=1);

namespace MsgPhp\User\Event;

use MsgPhp\User\Role;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class RoleDeleted
{
    public $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }
}
