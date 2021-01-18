<?php

namespace App\Storage;

use App\Storage\Contracts\StorageInterface;
use PDO;

class DatabaseStorage implements StorageInterface
{

    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    protected function buildValues($key, $value, array $additional = [])
    {
        return array_merge([
            'id' => $key,
            'value' => $value
        ], $additional);
    }

    public function set($key, $value)
    {
        $statement = $this->db->prepare('INSERT INTO items (id, value) VALUES (:id, :value)');
        $statement->execute($this->buildValues($key, $value));
        return $this->db->lastInsertId();
    }

    public function all()
    {
        $statement = $this->db->prepare('SELECT * FROM items');
        $statement->execute();
        return $statement->fetchAll();
    }

    public function get($key)
    {
        $statement = $this->db->prepare('SELECT * FROM items WHERE id = :id');
        $statement->execute([
            'id' => $key
        ]);
        return $statement->fetch();
    }

    public function delete($key)
    {
        $statement = $this->db->prepare('DELETE FROM items WHERE id = :id');
        $statement->execute([
            'id' => $key
        ]);
        return $statement;
    }

    public function destroy()
    {
        $statement = $this->db->prepare('TRUNCATE TABLE `items`');
        $statement->execute();
    }

}
