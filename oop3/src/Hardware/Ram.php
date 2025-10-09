<?php 

namespace App\HardWare;

class Ram
{
    public $rName;
    public $rSpeed;

    public function __construct($rName , $rSpeed)
    {
        $this->rName = $rName;
        $this->rSpeed = $rSpeed;

    }

    public function getRamDetails()
    {
        return $this->rName . ' ' . $this->rSpeed;
    }
}