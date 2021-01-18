<?php

namespace App\Storage;

use App\Storage\Contracts\StorageInterface;
use PDO;

class SessionStorage implements StorageInterface
{

    public function set($key, $value)
    {
        return $_SESSION['items'][$key] = $value;
    }

    public function all()
    {
        return $_SESSION['items'];

    }

    public function get($key)
    {
        return $_SESSION['items'][$key];

    }

    public function delete($key)
    {
       unset($_SESSION['items'][$key]);
    }

    public function destroy()
    {
        $_SESSION['items'] = [];

    }

}
