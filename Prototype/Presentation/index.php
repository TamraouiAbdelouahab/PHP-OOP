<?php
include "../Services/Bookservice.php";
include "../Entity/Book.php";
use Entity\Book;

$Books = new Bookservices();



$title = readline("Title book : ");
$isbn = readline("ISBN book : ");
$book = new Book($title ,$isbn);
$Books->addbook($book);
// $Books->getbooks();






?>