<?php

namespace App;


class Db {

    protected $dbh;

    public function __construct() {

        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }

    public function execute($sql, $p_array=[]) {

        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($p_array);
        return $res;
    }

    public function query($sql, $class, $p_array=[]) {

        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($p_array);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}