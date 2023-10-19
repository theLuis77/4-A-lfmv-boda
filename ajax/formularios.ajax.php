<?php

require_once ("../controladores/formularios.controlador.php");
require_once ("../modelos/formularios.modelos.php");
/**
 * clase de ajax
 */
 class AjaxFormularios{
    
/** 
 * VALIDAD EL EMAIL  existente 
 */
    public $validarEmail;
    public function ajaxValidarEmail(){
        $item="email";
        $valor = $this->validarEmail;
        $respuesta = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        echo '<pre>'; print_r($respuesta); echo '</pre>';
    
    }

 }
 /**
  * oPJETIVO DE AJAX QUE RECIBA LA VARIABLE POST 
  */
  if (isset($_POST["validadEmail"])){
    $valEmail = new AjaxFormularios();
    $valEmail -> validarEmail = $_POST["validarEmail"];
    $valEmail -> ajaxValidarEmail();
  }