<?php
use yii\web\Controller;


class UsuarioController extends Controller 
{
    public function actionIndex() 
    {
        $model=
        $usuario= "hi";
        $this->render("index",array("usuario"=>$usuario));
    }

}