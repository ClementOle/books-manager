<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BooksController extends AbstractController
{
    public function index()
    {
        $bookOne = new Book();
        $bookOne->setTitle('Titre 1');
        $bookOne->setAuthor('Autheur 1');
        $bookOne->setDescription('Description 1');
        $bookOne->setStatus(1);

        $bookTwo = new Book();
        $bookTwo->setTitle('Titre 2');
        $bookTwo->setAuthor('Autheur 2');
        $bookTwo->setDescription('Description 2');
        $bookTwo->setStatus(1);

        $books = [
            $bookOne,
            $bookTwo
        ];


        return $this->render('books/index.html.twig', [
            'books' => $books,
        ]);
    }
}
