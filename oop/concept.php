<?php

declare(strict_types=1);

// concept of OOP (Object Oriented Programming)

// Chair -- object

// chair class -- blueprint / template

# Pillar of OOP
/*
- Encapsulation
- Inheritence
- Polymorphism
  -- method overloading (cannot achieve this directly.)
  -- method overriding
- Abstraction


- Abstraction is not same as Abstract class or Abstract method

*/

try {
    // Person (class)

    // Person is a Parent class
    class Person
    {
        // Access modifier: public, protected, private

        // attributes or properties
        public $wealth; // child class can access public property
        protected $name; // child class can access protected property

        private $gender; //  child class can not access private property
        private $age; //  child class can not access private property

        public function __construct($name, $age)
        {
            $this->setName($name);
            $this->setAge($age);
        }

        // seal the class for dynamic properties
        public function __set($name, $value) { 
            throw new \Exception("Cannot set property '$name' to '$value', property does not exist\n"); 
        }

        public function __get($name) { 
            throw new \Exception("Cannot get value for property '$name', property does not exist\n"); 
        }

        // method

        public function displayNameAndAge()
        {
            return 'Name is: ' . $this->getName() . ' and Age is: ' . $this->age;
        }

        // getter method
        public function getName()
        {
            return $this->name;
        }

        // setter method
        public function setName($name)
        // private function setName($name)
        {
            $this->name = $name;
        }

        protected function setAge($age)
        {
            $this->age = $age;
        }

        public function getAge()
        {
            return $this->age;
        }
    }


    /* This is called Inheritence */
    /* Student is child class */
    class Student extends Person
    {
        public $studentId;

        // method override
        public function __construct($name, $age, $studentId)
        {
            $this->setStudentId = $studentId;

            parent::__construct($name, $age);
        }

        // public function
        public function setStudentId($id)
        {
            $this->studentId = $id;
        }

        public function setStudentName($name)
        {
            $this->setName($name);
        }
    }


    $person1 = new Person('Rakib', 21); // instance of a class
    // $person1->name = 'Rakib';
    $person1->setName('Rakib');
    // $person1->setAge(21);
    // $person1->age = 21;
    $person1->height = 21.6;

    var_dump($person1);

    echo "<br/>";
    var_dump($person1->displayNameAndAge());
    // var_dump($person1->getName());
    // var_dump($person1->getAge());

    $person2 = new Person('Robot Munna', 18);
    // $person2->setName('Robot Munna');
    // $person2->setAge(18);
    // $person2->name = 'Robot Munna';
    // $person2->age = 18;

    echo "<br/>";
    var_dump($person2);
    echo "<br/>";
    var_dump($person2->displayNameAndAge());
    // var_dump($person2->getName());
    // var_dump($person2->getAge());

    echo "<br/>";
    echo "<br/>";

    $student1 = new Student('Kamrul', 17, '1234');
    // $student1 = new Student();
    // $student1->setStudentName('Kamrul');
    var_dump($student1);
    echo "<br/>";

    var_dump($student1->getName());

} catch (\Throwable $exception) {
    var_dump($exception->getMessage());
}


