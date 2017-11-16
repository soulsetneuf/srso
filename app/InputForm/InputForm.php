<?php
/**
 * Created by PhpStorm.
 * User: Percy Pedro
 * Date: 16/11/2017
 * Time: 2:37
 */

namespace App\InputForm;


class InputForm {
    public function get()
    {
        return "hola";
    }
    public function Array2($array)
    {
        dd($array);
    }
    public function getClass($class){
        if(!$this->existsParam($class))
        {
            return "btn btn-success";
        }
        return $class;
    }
    public function getPlaceHolder($placeholder){
        if(!$this->existsParam($placeholder))
        {
            return "";
        }
        return $placeholder;
    }
    public function arrayText()
    {
        return ["id"=>$text_input,"placeholder"=>$placeholder,"class"=>$class,"required"=>true,"autofocus"=>true];
    }
    public function existsParam($param)
    {
        if(!isset($param))
            return true;
        return false;
    }
    /*
     * @if(!isset($class) )
            <?php $class="btn btn-success" ?>
       @endif
     * */
}