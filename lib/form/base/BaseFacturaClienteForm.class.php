<?php

/**
 * FacturaCliente form base class.
 *
 * @method FacturaCliente getObject() Returns the current form's model object
 *
 * @package    veranda
 * @subpackage form
 * @author     Abraham Rico Moreno
 */
abstract class BaseFacturaClienteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'id_cliente'             => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => false)),
      'razon_social'           => new sfWidgetFormInputText(),
      'rfc'                    => new sfWidgetFormInputText(),
      'contacto_seguimiento'   => new sfWidgetFormInputText(),
      'calle'                  => new sfWidgetFormInputText(),
      'numero_ext_int'         => new sfWidgetFormInputText(),
      'colonia'                => new sfWidgetFormInputText(),
      'municipio'              => new sfWidgetFormInputText(),
      'estado'                 => new sfWidgetFormInputText(),
      'pais'                   => new sfWidgetFormInputText(),
      'telefono'               => new sfWidgetFormInputText(),
      'telefono_extension'     => new sfWidgetFormInputText(),
      'segundo_telefono'       => new sfWidgetFormInputText(),
      'telefono_extension_dos' => new sfWidgetFormInputText(),
      'correo_electronico'     => new sfWidgetFormInputText(),
      'segmento'               => new sfWidgetFormInputText(),
      'acercamiento'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_cliente'             => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id')),
      'razon_social'           => new sfValidatorString(array('max_length' => 128)),
      'rfc'                    => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'contacto_seguimiento'   => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'calle'                  => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'numero_ext_int'         => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'colonia'                => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'municipio'              => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'estado'                 => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'pais'                   => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'telefono'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'telefono_extension'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'segundo_telefono'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'telefono_extension_dos' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'correo_electronico'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'segmento'               => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'acercamiento'           => new sfValidatorString(array('max_length' => 64, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('factura_cliente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacturaCliente';
  }


}
