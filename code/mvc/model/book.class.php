<?php

class book {

    public $title;
    public $author;
    public $description;

    public function __construct($_title, $_author, $_description){
       
        $this->title = $_title;
        $this->author = $_author;
        $this->description = $_description;

    }

}

?>