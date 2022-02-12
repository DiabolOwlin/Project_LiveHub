<?php

class Article {
    private $id;
    private $title;
    private $image;
    private $description;
    private $like;
    private $dislike;
    private $author;
    private $created_at;




    public function __construct($title, $image, $description, $like = 0, $dislike = 0, $id = null, $author = null, $created_at = null)
    {

        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->id = $id;
        $this->author = $author;
        $this->created_at = $created_at;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like): void
    {
        $this->like = $like;
    }

    public function getDislike()
    {
        return $this->dislike;
    }

    public function setDislike($dislike): void
    {
        $this->dislike = $dislike;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

}