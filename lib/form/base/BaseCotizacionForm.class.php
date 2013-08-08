<?php

/**
 * Cotizacion form base class.
 *
 * @method Cotizacion getObject() Returns the current form's model object
 *
 * @package    veranda
 * @subpackage form
 * @author     Abraham Rico Moreno
 */
abstract class BaseCotizacionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'folio_caratula'        => new sfWidgetFormPropelChoice(array('model' => 'Caratula', 'add_empty' => false)),
      'fecha_cotizacion'      => new sfWidgetFormDate(),
      'precio_optimo'         => new sfWidgetFormInputText(),
      'precio_sencillo'       => new sfWidgetFormInputText(),
      'status'                => new sfWidgetFormInputText(),
      'fecha_ultimo_contacto' => new sfWidgetFormDate(),
      'tipo_contacto'         => new sfWidgetFormInputText(),
      'fecha_sigui_contacto'  => new sfWidgetFormDate(),
      'tipo_sigui_contacto'   => new sfWidgetFormInputText(),
      'fecha_venta'           => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'folio_caratula'        => new sfValidatorPropelChoice(array('model' => 'Caratula', 'column' => 'id')),
      'fecha_cotizacion'      => new sfValidatorDate(),
      'precio_optimo'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'precio_sencillo'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'status'                => new sfValidatorString(array('max_length' => 48)),
      'fecha_ultimo_contacto' => new sfValidatorDate(array('required' => false)),
      'tipo_contacto'         => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'fecha_sigui_contacto'  => new sfValidatorDate(array('required' => false)),
      'tipo_sigui_contacto'   => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'fecha_venta'           => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cotizacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cotizacion';
  }


}
