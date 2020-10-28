<?php


class Controllertable
{
    public function render()
    {
        $getStudents = new Studentloader();
        $allstudents = $getStudents->getStudents();

        require 'View/inserttable.php';
    }

}