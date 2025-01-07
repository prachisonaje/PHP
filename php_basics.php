<?php
  echo "Hello, World!"; // Outputs Hello, World!
?>

# Declaring variabels
<?php
  echo $name = "XYZ";  // String
  echo $age = 30;       // Integer
  echo $isEmployed = true; // Boolean
?>

# Constants
<?php
  define("PI", 3.14);
  echo PI; // Outputs 3.14
?>

# Conditional Statements
<?php
  $age = 18;
  if ($age >= 18) {
    echo "You are an adult.";
  } else {
    echo "You are a minor.";
  }
?>

# Loops
<?php
  for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
  }
?>

# Function Creation and Calling 
<?php
  function greet($name) {
    return "Hello, $name!";
  }
  echo greet("Alice"); // Outputs: Hello, Alice!
?>

# Default Argument Values
<?php
  function add($a, $b = 5) {
    return $a + $b;
  }
  echo add(10); // Outputs 15
?>

# Passing arguments by reference
<?php
  function increment(&$value) {
    $value++;
  }
  $num = 10;
  increment($num);
  echo $num; // Outputs 11
?>

# Classes and Objects 
<?php
  class Person {
    public $name; // Property

    public function __construct($name) {
      $this->name = $name; // Constructor
    }

    public function greet() { // Method
      return "Hello, " . $this->name;
    }
  }

  $person = new Person("Alice");
  echo $person->greet(); // Outputs: Hello, Alice
?>

# Inheritance
<?php
  class Animal {
    public function sound() {
      echo "Animal makes a sound.";
    }
  }

  class Dog extends Animal {
    public function sound() {
      echo "Dog barks.";
    }
  }

  $dog = new Dog();
  $dog->sound(); // Outputs: Dog barks.
?>
