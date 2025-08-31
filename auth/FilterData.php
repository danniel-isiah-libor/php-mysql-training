<?php

    namespace auth;

    include_once "../oop/BaseClass.php";
    use oop\BaseClass;

    class FilterData extends BaseClass
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected function filter($data)
        {
            foreach ($data as $key => $value)
            {
                $data[$key] = htmlspecialchars(trim($value));
                $data[$key] = trim($value);
                $data[$key] = stripslashes($value);
            }
            return $data;

        }
    }