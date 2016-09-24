<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/18/2016
 * Time: 2:32 PM
 */
//package= app/models/usermodel.php

//This is used to interact with database

class usermodel
{
    function getusers()
    {
        $pdo=My_Mvc::getInstance('pdo');
        $statement = $pdo->query("SELECT * FROM users");
        $result= $statement->fetchAll(PDO::FETCH_ASSOC);

        $basket=My_Mvc::getInstance('basket');
        foreach ($result as $key=>$value)
        {
            $basket->set($value['id'],$value['name']);
        }
    }
}