<?php

 // Filename: /module/Blog/src/Blog/Model/Post.php
namespace Blog\Model;


class Post implements PostInterface
 {
     /**
      * @var int
      */
     protected $id;

     /**
      * @var string
      * @ORM\Column(name="title", type="string", nullable=false)
      */
     protected $title;

     /**
      * @var string
      * @ORM\Column(name="content", type="text", nullable=false)
      */
     protected $text;
     
     /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
     private $category;
                        
    
    	     
     /**
      * {@inheritDoc}
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param int $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * {@inheritDoc}
      */
     public function getTitle()
     {
         return $this->title;
     }

     /**
      * @param string $title
      */
     public function setTitle($title)
     {
         $this->title = $title;
     }

     /**
      * {@inheritDoc}
      */
     public function getText()
     {
         return $this->text;
     }

     /**
      * @param string $text
      */
     public function setText($text)
     {
         $this->text = $text;
     }
 }