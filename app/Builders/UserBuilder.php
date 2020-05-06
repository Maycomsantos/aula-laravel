<?php

namespace App\Builders;

class UserBuilder extends BaseBuilder
{
    public function exceptDevs()
    {
        if (! is_super_admin()) {
            return $this->where('users.group_id', '<>', 1);
        }

        return $this;
    }
}
