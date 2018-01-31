<?php
/**
 * Created by PhpStorm.
 * User: donald
 * Date: 31-1-2018
 * Time: 07:58
 */

class hello {
    public function hi()
    {
        echo "yo";
    }

    public function myChange()
    {
        $accept_it = 'yes';
    }

    public function myChangeDangerous()
    {
        $accept_it = 'no?';
        $nowDoItForReal = '';
    }
}
