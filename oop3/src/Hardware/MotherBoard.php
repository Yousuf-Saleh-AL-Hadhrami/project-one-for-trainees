<?php 

namespace App\HardWare;

class MotherBoard
{
    public $mName;
    public $mModel;

    public function __construct($mName , $mModel)
    {
        $this->mName = $mName;
        $this->mModel = $mModel;

    }

    public function getMotherBoardDetails()
    {
        return $this->mName . ' ' . $this->mModel;
    }
}