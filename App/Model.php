<?php

namespace App;


abstract class Model {

    const TABLE = '';

    public static function findAll() {

        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, static::class);
    }

    public static function findById($id) {

        $db = new Db();
        $res = $db->execute('SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id);

        if (false !== $res) {
            return $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id, static::class);
        } else {
            return false;
        }
    }
}

