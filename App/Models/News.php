<?php

namespace App\Models;

use App\Model;
use App\MultiException;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */
class News extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */
    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }

    public function fill($data = [])
    {
        $e = new MultiException();
        if (true) {
            $e[] = new \Exception('Wrong title');
        }
        if (true) {
            $e[] = new \Exception('Wrong text');
        }
        throw $e;
    }
}