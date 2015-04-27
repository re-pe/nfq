<?php
/**
 * Created by PhpStorm.
 * User: tadas
 * Date: 15.4.18
 * Time: 16.11
 */

namespace Nfq\LibraryBundle;


class BookDataSet
{
    private $author;
    private $title;
    private $language;
    private $description;
    private $publisher;
    private $year;
    private $pageNo;
    private $isbn;
    private $thumbnail;

    public function __construct($author, $title, $language, $description, $publisher, $year, $pageNo, $isbn, $thumbnail)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setLanguage($language);
        $this->setDescription($description);
        $this->setPublisher($publisher);
        $this->setYear($year);
        $this->setPageNo($pageNo);
        $this->setIsbn($isbn);
        $this->setThumbnail($thumbnail);
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }
    
    public function toArray(){
        $result = [];
        $result['author'] = $this->getAuthor();
        $result['title'] = $this->getTitle();
        $result['language'] = $this->getLanguage();
        $result['description'] = $this->getDescription();
        $result['publisher'] = $this->getPublisher();
        $result['year'] = $this->getYear();
        $result['pageno'] = $this->getPageNo();
        $result['isbn'] = $this->getIsbn();
        $result['thumbnail'] = $this->getThumbnail();
        return $result;
    }
}