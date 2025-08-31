<?php

namespace oop;

include_once "../auth/BaseClass.php";

use auth\BaseClass as AuthBaseClass;

abstract class BaseClass extends AuthBaseClass
{
    public $totalRecords = 0;

    public function __construct()
    {
        // initialize database connection ...
        var_dump("This is from base class");
    }

    public function __destruct()
    {
        // close database connection ...
    }
}
