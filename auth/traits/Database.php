<?php

namespace auth\traits;

trait Database
{
    const TABLE_NAME = "profiles";

    protected function performQuery()
    {
        // performing database query...

        self::TABLE_NAME;

        return $this;
    }
}
