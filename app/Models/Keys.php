<?php
namespace App\Models;

class Keys {
    public static function getAll(){
            return ["a", "ab","abc"];
    }
    public static function getById($id){
        return ["a", "ab","abc"][$id];
        
}
}
?>