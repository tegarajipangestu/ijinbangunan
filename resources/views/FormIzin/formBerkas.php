<?php
/**
 * Created by PhpStorm.
 * User: Yanfa
 * Date: 06/04/2015
 * Time: 12:57
 */

$input = Input::file('file');

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\',$input->getClientOriginalName());

echo substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$input->getClientOriginalName();

