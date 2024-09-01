<?php

// Define a class named Person
class Person {
    // Public properties for first name and last name
    public $firstName;
    public $lastName;
    // Private property for age
    private $age;

    /**
     * Constructor method to initialize the properties
     * @param string $firstName First name of the person
     * @param string $lastName Last name of the person
     * @param int $age Age of the person
     */
    public function __construct($firstName, $lastName, $age) {
        // Initialize the properties
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
     * Public method to return the full name of the person
     * @return string Full name of the person
     */
    public function getFullName() {
        // Return the full name by concatenating first name and last name
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * Public method to set the age of the person
     * @param int $age Age of the person
     */
    public function setAge($age) {
        // Set the age
        $this->age = $age;
    }

    /**
     * Public method to return the age of the person
     * @return int Age of the person
     */
    public function getAge() {
        // Return the age
        return $this->age;
    }
}

// Define a class named Car
class Car {
    // Public properties for make and model
    public $make;
    public $model;
    // Protected property for year
    protected $year;

    /**
     * Constructor method to initialize the properties
     * @param string $make Make of the car
     * @param string $model Model of the car
     * @param int $year Year of the car
     */
    public function __construct($make, $model, $year) {
        // Initialize the properties
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    /**
     * Public method to return a string containing the car's make, model, and year
     * @return string Car information
     */
    public function getCarInfo() {
        // Return the car information by concatenating make, model, and year
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

// Instantiate a Person object
$person = new Person('Garingarao', 'Lanelyn', 19);
// Display the full name and age of the person
echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";

// Update the person's age to 26
$person->setAge(20);
echo "Updated Age: " . $person->getAge() . "\n";

// Instantiate a Car object
$car = new Car('Toyota', 'Camry', 2020);
// Display the car information
echo "Car Info: " . $car->getCarInfo() . "\n";
