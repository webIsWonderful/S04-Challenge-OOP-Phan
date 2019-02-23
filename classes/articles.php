<?php

class Article{
    public $title;
    public $content;
    public $author;
    public $date;
    public $category;
        
    public function getDateFr(){
        return $this->date;
    }
}