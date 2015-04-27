<?php

/**
 * Created by PhpStorm.
 * User: tadas
 * Date: 15.4.18
 * Time: 16.19
 */
namespace Nfq\LibraryBundle\BookDataProviders;

use Nfq\LibraryBundle\BookDataSet;
use Nfq\LibraryBundle\BookDataInterface;

class GoogleBooksAPI implements BookDataInterface
{
    public static function getBookInfo($isbn)
    {
        $apiUrl = "https://www.googleapis.com/books/v1/volumes?q=isbn:";
        $page = file_get_contents($apiUrl . $isbn);
        $data = json_decode($page, true);
        $author = '';
        $title = '';
        $language = '';
        $description = '';
        $publisher = '';
        $year = '';
        $pageNo = '';
        $thumbnail = '';
        if (isset($data['items'][0]['volumeInfo']['authors'][0])){
            $author = $data['items'][0]['volumeInfo']['authors'][0];
        }
        if (isset($data['items'][0]['volumeInfo']['title'])){
            $title = $data['items'][0]['volumeInfo']['title'];
        }
        if (isset($data['items'][0]['volumeInfo']['language'])){
            $language = $data['items'][0]['volumeInfo']['language'];
        }
        if (isset($data['items'][0]['volumeInfo']['description'])){
            $description = $data['items'][0]['volumeInfo']['description'];
        }
        if (isset($data['items'][0]['volumeInfo']['publisher'])){
            $publisher = $data['items'][0]['volumeInfo']['publisher'];
        }
        if (isset($data['items'][0]['volumeInfo']['publishedDate'])){
            $year = $data['items'][0]['volumeInfo']['publishedDate'];
        }
        if (isset($data['items'][0]['volumeInfo']['pageCount'])){
            $pageNo = $data['items'][0]['volumeInfo']['pageCount'];
        }
        if (isset($data['items'][0]['volumeInfo']['imageLinks']['thumbnail'])){
            $thumbnail = $data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];
        }

        /*echo $author ."<br>".$title."<br>".$language."<br>".$description."<br>"
            .$publisher."<br>".$year."<br>".$page."<br>".$thumbnail;*/

        return new BookDataSet($author, $title, $language, $description, $publisher, $year, $pageNo, $isbn, $thumbnail);
    }
}