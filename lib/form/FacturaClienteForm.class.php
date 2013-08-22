<?php

/**
 * FacturaCliente form.
 *
 * @package    veranda
 * @subpackage form
 * @author     Abraham Rico Moreno
 */
class FacturaClienteForm extends BaseFacturaClienteForm
{

	protected $estado = array('AGUASCALIENTES' => 'AGUASCALIENTES', 'BAJA CALIFORNIA' => 'BAJA CALIFORNIA', 'BAJA CALIFORNIA SUR' => 'BAJA CALIFORNIA SUR', 'CAMPECHE' => 'CAMPECHE',
        'CHIAPAS' => 'CHIAPAS', 'CHIHUAHUA' => 'CHIHUAHUA', 'COAHUILA DE ZARAGOZA' => 'COAHUILA DE ZARAGOZA', 'COLIMA' => 'COLIMA', 'CIUDAD DE MÉXICO' => 'CIUDAD DE MÉXICO',
        'DURANGO' => 'DURANGO', 'GUANAJUATO' => 'GUANAJUATO', 'GUERRERO' => 'GUERRERO', 'HIDALGO' => 'HIDALGO', 'JALISCO' => 'JALISCO', 'MÉXICO' => 'MÉXICO', 'MICHOACÁN DE OCAMPO' => 'MICHOACÁN DE OCAMPO',
        'MORELOS' => 'MORELOS', 'NAYARIT' => 'NAYARIT', 'NUEVO LEÓN' => 'NUEVO LEÓN', 'OAXACA' => 'OAXACA', 'PUEBLA' => 'PUEBLA', 'QUERÉTARO' => 'QUERÉTARO', 'QUINTANA ROO' => 'QUINTANA ROO',
        'SAN LUIS POTOSÍ' => 'SAN LUIS POTOSÍ', 'SINALOA' => 'SINALOA', 'SONORA' => 'SONORA', 'TABASCO' => 'TABASCO', 'TAMAULIPAS' => 'TAMAULIPAS', 'TLAXCALA' => 'TLAXCALA',
        'VERACRUZ DE IGNACIO DE LA LLAVE' => 'VERACRUZ DE IGNACIO DE LA LLAVE', 'YUCATÁN' => 'YUCATÁN', 'ZACATECAS' => 'ZACATECAS','OTRO' => 'OTRO');
	protected $segmento = array(
		'Residencial' => 'Residencial', 'Servicio' => 'Servicio', 'Gobierno' => 'Gobierno',
		'Otros' => 'Otros');
	protected $acercamiento = array(
		'Seccion Amarilla libro' => 'Seccion Amarilla libro', 'Seccion Amarilla internet' => 'Seccion Amarilla internet', 'Recomendación' => 'Recomendación',
		'Punto de venta' => 'Punto de venta', 'Publicidad' => 'Publicidad', 'Promotora' => 'Promotora','Otra' => 'Otra');


  public function configure()
  {
	parent::configure();
	$this->setWidget('estado', new sfWidgetFormChoice(array('choices' => $this->estado)));
	$this->setWidget('segmento', new sfWidgetFormChoice(array('choices' => $this->segmento)));
	$this->setWidget('acercamiento', new sfWidgetFormChoice(array('choices' => $this->acercamiento)));
$this->setValidator('rfc', new sfValidatorRegex(array('pattern' => '/^[a-zA-Z]{3,4}([0-9]{6})$/', 'required' => true), array('required' => 'Requerido.', 'invalid' => 'Inválido. XXXX111111.')));
	$this->widgetSchema->setHelps(array(
            'cp' => 'Formato a 5 dígitos númericos sin espacios #####',
            'correo_empresarial' => 'juan.perez@example.com',
            'correo_personal' => 'juan.perez@example.com',
            'telefono' => 'Formato mayor 6 dígitos númericos como mínimo sin espacios ##########',
            'celular' => 'Formato a 10 dígitos sin númericos espacios sin 044 ##########'
            ));

	$this->setDefault('pais', 'México');
  }
}
