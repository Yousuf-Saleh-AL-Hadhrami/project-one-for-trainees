<?php

class Person extends Car implements Contract,Painting
{
    // properties && visibility markers || Access Modifires 
   // public string $name;
    //public string $address;
    //public ?string $gender;
    //public int $age;
    // public $skills= [];
    public static $counter = 0;
    public const AGE = 18;
    public $colors;

    // public function __construct($n, $add, $g = null)
    // {
    //     // echo "I am instantiated" . "<br>";

    //     self::$counter++;

    //     $this->name = $n;
    //     $this->address = $add;
    //     $this->gender = $g;
    // }

    // Constructor property promotion
    public function __construct(public $name, public $address , public $gender , public $age, public $sks = [] , $n , $co)
    {

        parent::__construct($n,$co);
           $this->cname = $n;
           $this->color = $co;

          self::$counter++;

    
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
            $this->getGender() . ' '. 
            $this->getPaints();
    }


    // From Abstract class Car

    public function move()
    {
        return 'The Car is Moving with speed 120Kmhs';
    }


    public function getFuel()
    {
        return 'The Fuel is Full';
    }

    public function startEngine()
    {
        return 'Engine is Started';
    }

    // From Interface Contract

    public function One()
    {
        return 'Done';
    }

        public function Two()
    {
        return 'Done';
    }


        public function Three()
    {
        return 'Done';
    }


        public function Four()
    {
        return 'Done';
    }


        public function Five()
    {
        return 'Done';
    }


    public function setPaints(...$colors)
    {
       $this->colors = $colors;

       return $this;
    }

    public function getPaints()
    {
        foreach($this->colors as $color)
        {
            echo " Colors are : " . $color . "<br>";
        }
    }

    public function setSkills($sks)
    {
        $this->sks = $sks;
    }

    public function makeSound()
    {
        return 'Beeb';
    }




    
}
