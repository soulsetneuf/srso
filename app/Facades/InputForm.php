<?php
/**
 * Created by PhpStorm.
 * User: Percy Pedro
 * Date: 16/11/2017
 * Time: 2:49
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class InputForm extends Facade{
    protected static function getFacadeAccessor(){
        return "inputform";
    }
}