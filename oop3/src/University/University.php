<?php 

namespace App\University;

interface University
{

    public function registerStudent($uname);
    public function admitStudent();
}