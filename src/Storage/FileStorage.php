<?php

namespace App\Storage;

use App\Storage\Contracts\StorageInterface;
use PDO;

class FileStorage implements StorageInterface
{
    public function set($key, $value)
    {
        file_put_contents( __DIR__ . '/items/'.$key, $value);
    }

    public function all()
    {
        $folder_path = __DIR__ . '/items/'; 
   
        $files = glob($folder_path.'/*');  
        
        foreach($files as $file) { 
        
            if(is_file($file))  
            
            print_r($file);  
        } 
    }

    public function get($key)
    {
        file_get_contents(__DIR__ . '/items/'.$key);
    }

    public function delete($key)
    {
        unlink(__DIR__ . '/items/'.$key);
    }

    public function destroy()
    {
        $folder_path = __DIR__ . '/items/'; 
   
        $files = glob($folder_path.'/*');  
        
        foreach($files as $file) { 
        
            if(is_file($file))  
            
                unlink($file);  
        } 
    }

}
