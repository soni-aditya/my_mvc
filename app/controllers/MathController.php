<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/18/2016
 * Time: 2:32 PM
 */
//package= app/controllers/MathController.php

//This controller Handels the Math related Operations

class MathController{
    function main(){
        echo "You are in Math Zone";
    }
    function add(){
        $node=My_Mvc::getInstance('node');
        $num_one=$node->get('gamma');
        $num_two=$node->get('delta');
        $sum=$num_one+$num_two;

        $basket=My_Mvc::getInstance('basket');
        $basket->set('num_one',$num_one);
        $basket->set('num_two',$num_two);
        $basket->set('sum',$sum);
        My_Mvc::render('add');
    }
    function subtract(){
        echo "This is for subtraction";
    }
    function multiply(){
        echo "This is Multiply";
    }
    function divide(){
        echo "This is divide";
    }
    function no_operation(){
        echo "No such Operation";
    }
}