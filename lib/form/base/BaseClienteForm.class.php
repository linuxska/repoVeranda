<?php

/**
 * Cliente form base class.
 *
 * @method Cliente getObject() Returns the current form's model object
 *
 * @package    veranda
 * @subpackage form
 * @author     Abraham Rico Moreno
 */
abstract class BaseClienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre_razon_social' => new sfWidgetFormInputText(),
      'contacto'            => new sfWidgetFormInputText(),
      'calle'               => new sfWidgetFormInputText(),
      'numero_ext_int'      => new sfWidgetFormInputText(),
      'colonia'             => new sfWidgetFormInputText(),
      'cp'                  => new sfWidgetFormInputText(),
      'telefono'            => new sfWidgetFormInputText(),
      'telefono_extension'  => new sfWidgetFormInputText(),
      'celular'             => new sfWidgetFormInputText(),
      'correo_empresarial'  => new sfWidgetFormInputText(),
      'correo_personal'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre_razon_social' => new sfValidatorString(array('max_length' => 256)),
      'contacto'            => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'calle'               => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'numero_ext_int'      => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'colonia'             => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'cp'                  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'telefono'            => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'telefono_extension'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'celular'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'correo_empresarial'  => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'correo_personal'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }


}
