<?php


class Person
{
    // properties && visibility markers || Access Modifires 
   // public string $name;
    //public string $address;
    //public ?string $gender;
    //public int $age;
    public $skills;
    public static $counter = 0;

    public const AGE = 18;

    // public function __construct($n, $add, $g = null)
    // {
    //     // echo "I am instantiated" . "<br>";

    //     self::$counter++;

    //     $this->name = $n;
    //     $this->address = $add;
    //     $this->gender = $g;
    // }

    // Constructor property promotion
    public function __construct(public $name, public $address , public $gender , public $age = null, ...$sks)
    { 

        self::$counter++;

        $this->skills = $sks;

       
    }


    public static function getCounter()
    {
        return self::$counter;
    }

    public function getCounter2()
    {
        return self::$counter; 
    }

    public function setName($n)
    {
        $this->name = $n;

        return $this;
    }

    public function setAddress($add)
    {
        $this->address = $add;

        return $this;
    }

    public function setGender($g)
    {
        $this->gender = $g;

        return $this;
    }


    public function setAge($g)
    {

        $this->age = $g;

        if ($this->age < self::AGE) {
            throw new Exception("Invalid Age!");
        } else {

            $this->gender = $g;

            return $this;
        }
    }


    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getInfo()
    {
        return
            $this->getName() . ' ' .
            $this->getAddress() . ' ' .
            $this->getGender() . ' ';
    }
}
