<?php

namespace App;

use App\Models\User;

abstract class Model
{

    const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE, static::class);
    }

    public static function findById($id) {

        $db = Db::instance();
        $res = $db->execute('SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id);

        if (false !== $res) {
            return $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id, static::class);
        } else {
            return false;
        }
     }

    public function isNew()
    {
        return empty($this->id);
    }


    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = 'INSERT INTO ' . static::TABLE . '(' . implode(',', $columns) . ') VALUES (' . implode(',', array_keys($values)) . ')';

        $db = Db::instance();
        $db->execute($sql, $values);
        $last_id = $db->query('SELECT id FROM ' . static::TABLE . ' ORDER BY `users`.`id` DESC LIMIT 1', User::class);

        $this->id = $last_id[0]->id;
    }


    public function update($id, $name, $email)
    {
        $sql = 'UPDATE ' .static::TABLE . ' SET name=\'' . $name . '\', email=\'' . $email . '\' WHERE id=' . $id;
        $db = Db::instance();
        $db->execute($sql);
    }

    public function save()
    {
        if (!$this->isNew()) {
            $this->update($this->id, $this->name, $this->email);
        } else {
            $this->insert();
        }
    }


}