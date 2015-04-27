<?php

namespace Nfq\LibraryBundle\Controller;

use Nfq\LibraryBundle\BookDataSet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BookDataController extends Controller
{
    public function indexAction($isbn)
    {
        $book_data_parser = $this->container->get('book_data_parser');
        $book_data_set = $book_data_parser->getBookInfo($isbn);
        $book_data_str = print_r($book_data_set->toArray(), true);
        return new Response('<html><body><pre>' . $book_data_str . '</pre></body></html>');
        //return $this->render('Weather/index.html.twig', [ 'weather_str' => $weather_str ]);
    }
} 