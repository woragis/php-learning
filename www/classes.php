<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes and Objects Page</title>
</head>
<body>
  <?php
    class Book {
      var $title;
      var $author;
      var $pages;
      function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        echo "New Book Created <br>";
        echo "<strong>Book title:</strong> $this->title <br>";
        echo "<strong>Book Author</strong> $this->author <br>";
        echo "<strong>Book Pages</strong> $this->pages <br>";
      }
    }

    $book1 = new Book("Harry Patter", "Jk Rowling", 400);
    $book2 = new Book("Lord of the Rings", "Tolkien", 400);
    $book3 = new Book("A Song of Ice and Fire", "Gearge R. R. Martin", 1000);
    /*
    Creating Class Instance Without Constructor:

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "Jk Rowling";
    $book1->pages = 400;

    $book2 = new Book;
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 400;

    $book3 = new Book;
    $book3->title = "A Song of Ice and Fire";
    $book3->author = "George R. R. Martin";
    $book3->pages = 1000;
    */

    echo "<h4>Authors</h4>";
    echo $book1->author; echo $book2->author; echo $book3->author;
    echo "<h4>Books</h4>";
    echo $book1->title;
    echo $book2->title;
    echo $book3->title;
    echo "<h5>Book 1</h5>";
    echo "Book Title: $book1->title";
    echo "Author: $book1->author";
    echo "Book page count: $book1->pages";
    echo "<h5>Book 2</h5>";
    echo "Book Title: $book2->title";
    echo "Author: $book2->author";
    echo "Book page count: $book2->pages";
    echo "<h5>Book 3</h5>";
    echo "Book Title: $book3->title";
    echo "Author: $book3->author";
    echo "Book page count: $book3->pages";
  ?>
  
  <br>
  <br>
  <hr>
  <h3>Student Classes Section</h3>

  <?php
    class Student {
      var $name;
      var $major;
      var $gpa;
      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }
      function hasHonors() {
        if ($this->gpa >= 3.5) {
          return true;
        } else {
          return false;
        }
      }
    }
    $student1 = new Student("Jezreel", "Computer Science", 5.0);
    $student2 = new Student("Israel", "Computer Science", 5.0);
    $student3 = new Student("Sara Rebeca", "Medic School", 5.0);
    $student4 = new Student("Jefferson", "Software Engineering", 5.0);
    $student5 = new Student("Nicolas", "Medic School", 5.0);
    $student6 = new Student("Rafael", null, 5.0);
    $students = array($student1, $student2, $student3, $student4, $student5, $student6);
    for ($i=0; $i < count($students); $i++) {
      $j = $i + 1;
      $student_name = $students[$i]->name;
      $student_major = $students[$i]->major;
      $student_gpa = $students[$i]->gpa;
      $honors = $students[$i]->hasHonors();
      echo "Student $j: <strong>Name:</strong> $student_name, <strong>Major:</strong> $student_major, <strong>GPA:</strong> $student_gpa";
      echo "This student has honors?: $honors";
    }
  ?>

  <br>
  <br>
  <hr>
  <h3>Getters and Setters Section</h3>
  <?php
    class Movie {
      public $name;
      private $rating;
      function __construct($name, $rating) {
        $this->name = $name;
        $this->setRating($rating);
      }
      function getRating() {
        return $this->rating;
      }
      function setRating($rating) {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
    }
    $avengers = new Movie("Avengers", "PG");
    $avengers->getRating();
  ?>

  <br>
  <br>
  <hr>
  <h3>Getters and Setters Section</h3>
  <?php
    class Chef {
      function makeChicken() {
        echo "The chef makes chicken <br>";
      }
      function makeSalad() {
        echo "The chef makes salad <br>";
      }
      function makeSpecialDish() {
        echo "The chef makes bbq ribs <br>";
      }
    }
    class ItalianChef extends Chef {
      function makePasta() {
        echo "The chef makes pasta <br>";
      }
      function makeSpecialDish() {
        echo "The chef makes chicken parm <br>";
      }
    }
    $chef = new Chef;
    $italianChef = new ItalianChef;
    $chef->makeChicken();
    $italianChef->makeChicken();
  ?>
  
</body>
</html>