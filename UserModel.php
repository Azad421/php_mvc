<?php

namespace mvcapp\framework;

use mvcapp\framework\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
