<?php
/**
 * Created by PhpStorm.
 * User: snasirov
 * Date: 18-May-17
 * Time: 10:03
 */

namespace App;


class Collection implements \ArrayAccess, \Iterator
{
    use TCollection;
}