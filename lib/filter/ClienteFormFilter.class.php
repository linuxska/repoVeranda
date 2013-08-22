<?php

/**
 * Cliente filter form.
 *
 * @package    veranda
 * @subpackage filter
 * @author     Abraham Rico Moreno
 */
class ClienteFormFilter extends BaseClienteFormFilter
{
  public function configure()
  {
  	        $this->getWidget('contacto')->setOption('empty_label', 'Este vacio'); 
  	        $this->getWidget('calle')->setOption('empty_label', 'Este vacio'); 
  	        $this->getWidget('colonia')->setOption('empty_label', 'Este vacio'); 
  	        $this->getWidget('telefono')->setOption('empty_label', 'Este vacio'); 
  	        $this->getWidget('celular')->setOption('empty_label', 'Este vacio'); 
  	        $this->getWidget('correo_empresarial')->setOption('empty_label', 'Este vacio'); 
  	        $this->getWidget('correo_personal')->setOption('empty_label', 'Este vacio'); 
  }
}
