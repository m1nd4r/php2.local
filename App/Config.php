<?php

namespace App;


class Config
{
    use Singleton;

    public $data = [];

    public function config()
    {
        $this->data = parse_ini_file('C:\OpenServer\modules\php\PHP-7.0\php.ini');

    }


}