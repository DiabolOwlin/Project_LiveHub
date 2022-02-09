<?php

class Article {
    private $title;
    private $image;
    private $description;
    private $like;
    private $dislike;
    private $author;
    private $created_at;




    public function __construct($title, $image, $description, $like = 0, $dislike = 0, $author = null, $created_at = null)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->author = $author;
        $this->created_at = $created_at;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getLike(): int
    {
        return $this->like;
    }

    public function setLike(int $like): void
    {
        $this->like = $like;
    }

    public function getDislike(): int
    {
        return $this->dislike;
    }

    public function setDislike(int $dislike): void
    {
        $this->dislike = $dislike;
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