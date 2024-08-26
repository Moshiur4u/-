<?php
class Book {
private $title;
private $availableCopies;

public function __construct($title, $availableCopies) {
$this->title = $title;
$this->availableCopies = $availableCopies;
}

public function borrowBook() {
if ($this->availableCopies > 0) {
$this->availableCopies--;
return true;
} else {
return false;
}
}

public function returnBook() {
$this->availableCopies++;
}

public function getTitle() {
return $this->title;
}

public function getAvailableCopies() {
return $this->availableCopies;
}
}

class Member {
private $name;

public function __construct($name) {
$this->name = $name;
}

public function borrowBook($book) {
if ($book->borrowBook()) {
echo "{$this->name} borrowed \"{$book->getTitle()}\".\n";
} else {
echo "No copies of \"{$book->getTitle()}\" are available for {$this->name} to borrow.\n";
}
}

public function returnBook($book) {
$book->returnBook();
echo "{$this->name} returned \"{$book->getTitle()}\".\n";
}
}

// Demonstration of the library system
$book1 = new Book("1984", 3);
$book2 = new Book("To Kill a Mockingbird", 2);

$member1 = new Member("Alice");
$member2 = new Member("Bob");

$member1->borrowBook($book1);
$member2->borrowBook($book2);

echo "Available copies of \"{$book1->getTitle()}\": {$book1->getAvailableCopies()}\n";
echo "Available copies of \"{$book2->getTitle()}\": {$book2->getAvailableCopies()}\n";

$member1->returnBook($book1);
$member2->returnBook($book2);

echo "Available copies of \"{$book1->getTitle()}\": {$book1->getAvailableCopies()}\n";
echo "Available copies of \"{$book2->getTitle()}\": {$book2->getAvailableCopies()}\n";
?>