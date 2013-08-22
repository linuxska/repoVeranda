<?php

/**
 * Cliente form.
 *
 * @package    veranda
 * @subpackage form
 * @author     Abraham Rico Moreno
 */
class ClienteForm extends BaseClienteForm
{
  	public function configure() {
        parent::configure();
        unset($this['id']);


        $this->validatorSchema['nombre_razon_social']->setMessage('required', 'Requerido');
        $this->validatorSchema['contacto']->setMessage('required', 'Requerido');
        $this->validatorSchema['calle']->setMessage('required', 'Requerido');
		$this->setValidator('correo_personal', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. nombre@sitio.com')));
        $this->setValidator('correo_empresarial', new sfValidatorEmail(array('max_length' => 128, 'required' => false), array('required' => 'Requerido.', 'invalid' => 'Inválido. Formato nombre@sitio.com')));

        $this->setValidator('cp', new sfValidatorRegex(array('max_length' => 5, 'pattern' => '/^[0-9]{5}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. 5 números #####')));

        $this->setValidator('telefono', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => true), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->setValidator('telefono_extension', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{1,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));

        $this->setValidator('celular', new sfValidatorRegex(array('max_length' => 12, 'pattern' => '/^[0-9]{5,}+$/', 'required' => false), array('max_length' => '"%value%" es muy grande (máximo %max_length% caracteres).', 'required' => 'Requerido.', 'invalid' => 'Inválido. ##########')));
        $this->widgetSchema->setHelps(array(
            'cp' => 'Formato a 5 dígitos númericos sin espacios #####',
            'correo_empresarial' => 'juan.perez@example.com',
            'correo_personal' => 'juan.perez@example.com',
            'telefono' => 'Formato a 10 dígitos númericos sin espacios con lada de la localidad ##########',
            'celular' => 'Formato a 10 dígitos  númericos sin espacios sin 044 ##########'
            ));

}
}