<?php

namespace helpers;

include_once "../auth/BaseClass.php";

use auth\BaseClass;

class FormFilter extends BaseClass
{
    protected function filterData($form)
    {
        // filter form data...
        foreach ($form as $key => $value) {
            $form[$key] = htmlspecialchars($value);
            $form[$key] = trim($value);
            $form[$key] = stripslashes($value);
        }

        return $form;
    }
}
