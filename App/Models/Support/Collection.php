<?php

namespace App\Models\Support;

class Collection

{

    protected $items;

    public function __construct($item){
        $this->items =$item;
    }

    public function getData(){

        $data = [];

        foreach($this->items as $item){
            $data = $item;
        }
    }

}



?>