<?php

class HolaController extends Controller 
{
    public function actionIndex() 
    {
        $hola= "hi";
        $this->render("index",array("hola"=>$hola)) ;
    }

}