<?php
// OOP Programming in PHP
class Person{
    private $name;
    private $email;
    private static $age=40;

    //Constructor
    public function __construct($name, $email)
    {
        $this->name=$name;
        $this->email=$email;
        echo __CLASS__.' Person Created'; // Printing Class Name
    }
    //De-Constructor
    public function __destruct()
    {
        echo __CLASS__.' Class Destroyed'; // Printing Class Name
    }

    public static function getage(){
        return self::$age;
        //In static methods we don't use 'this' & '-->' istead
        //self & ::
    }

/*
    //Getters and Setters
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->$email;
    }
*/
}

//$person1=new Person('John Doe', 'Jdoe@gmail.com');//Instansiate
//echo '<br>';
//print_r($person1);
//$person1->name='John Doe';
//echo $person1->name;

//$person1->setName('John Doe');// Setting Up
//echo $person1->getName();// Get Request

class Customer extends Person{
    private $balance;
    // Inheritance Demonstration
    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        // We need this cause we want 
        //the data to be inserted in inherited variables of parent class
        $this->balance=$balance;
        // Finally setting the passed value to the new cosntructor object
        echo '<br>A new '.__CLASS__.' has been Created<br>';
    }
    public function setBalance($balance){
        $this->balance=$balance;
    }
    public function getBalance(){
        return $this->balance.'<br>';
    }
    public function __destruct()
    {
        echo '<br>'.__CLASS__.' has been Destroyed!<br>';
    }

}

$customer = new Customer('John Doe', 'jdeo@gmail.com', 300);

echo $customer->getBalance();
//echo Person::$age.'<br>';
//Static Props and Methods
echo Person::getage();
print_r($customer);

?>