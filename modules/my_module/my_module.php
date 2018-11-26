<?php
if(!defined('__PS_VERSION__'))
exit;
/**
 *
 */

class my_Module extends Module{

  public function __construct(){
    $this->name = 'my_Module'; //nombre del módulo el mismo que la carpeta y la clase.
    $this->tab = 'front_office_features'; // pestaña en la que se encuentra en el backoffice.
    $this->version = '1.0.0'; //versión del módulo
    $this->author ='Ezequiel Domenech'; // autor del módulo
    $this->need_instance = 0; //si no necesita cargar la clase en la página módulos,1 si fuese necesario.
    $this->ps_versions_compliancy = array('min' => '1.7.x.x', 'max' => _PS_VERSION_); //las versiones con las que el módulo es compatible.
    $this->bootstrap = true; //si usa bootstrap plantilla responsive.

    parent::__construct(); //llamada al constructor padre.

    $this->displayName = $this->l('Another módulo'); // Nombre del módulo
    $this->description = $this->l('Módulin de prueba.'); //Descripción del módulo
    $this->confirmUninstall = $this->l('¿Segurola que queres desinstalar el super-módulo?'); //mensaje de alerta al desinstalar el módulo.

    $this->templateFile = 'module:my_module/views/templates/hook/my_Module.tpl';
  }

  public function install(){

    return (parent::install()
    && $this->registerHook('displayHeader') // Registramos el hook dentro de las cabeceras.
    && $this->registerHook('displayCarrierExtraContent')
    );

    $this->emptyTemplatesCache();

    return (bool) $return;
  }

}

 ?>
