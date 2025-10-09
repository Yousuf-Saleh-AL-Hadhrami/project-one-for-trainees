<?php 

namespace App\Computer;

use App\HardWare\MotherBoard;
use App\HardWare\Ram;

class Pc
{
    public $pname;
    public $motherboard;
    public $ram;

    public function __construct($pname, MotherBoard $motherboard, Ram $ram)  //  MotherBoard $motherboard , Ram $ram
    {
        $this->pname = $pname; 

        $this->motherboard = $motherboard;
        $this->ram =  $ram;

    }

    // setter Dependency injection 

    public function setMotherBoard(MotherBoard $motherboard)
    {
        $this->motherboard = $motherboard;
    }

       public function setRam(Ram $ram)
    {
        $this->ram = $ram;
    }


    public function getFeatures()
    {
        return 
        
        "Pc Name " . $this->pname ."<br>" .
        "MotherBoard  " . $this->motherboard->mName . '"  "'. $this->motherboard->mModel . '"' ."<br>" .
        "Ram " . $this->ram->rName . '"  "'. $this->ram->rSpeed . '"' ."<br>" ;
    }
}