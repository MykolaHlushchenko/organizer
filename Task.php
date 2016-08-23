<?php

class TaskClass
{
    public $completed = false;
    public $canseled = false;
    public $priority;
       
    public function setCompleted()
    {
        if($completed == false)
        {
            $completed = true;
        }
        else $completed = false;
    }
    
    public function setCanseled()
    {
        if($canseled == false)
        {
            $canseled = true;
        }
        else $canseled = false;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

