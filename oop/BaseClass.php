<?php

abstract class BaseClass
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
