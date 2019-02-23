<?php

class Topic{
    private $title;
    private $content;
    private $author;
    private $date;
    private $category;   

    public function __construct($title, $content, $author, $date, $category){
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category; 
    }

    // public function __construct($title, $content, $author, $date, $category){
    //     $this->title = $title;
    //     $this->content = $content;
    //     $this->author = $author;
    //     $this->date = $date;
    //     $this->category = $category; 
    // }

    public function setTitle($title){
        $this->title= $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setContent($content){
        $this->content= $content;
    }

    public function getContent(){
        return $this->content;
    }
    
    
    // __set magic method
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
        return $this;
    }

    // __get Magic method
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }
}

