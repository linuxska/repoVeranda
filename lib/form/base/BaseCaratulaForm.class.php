<?php

/**
 * Caratula form base class.
 *
 * @method Caratula getObject() Returns the current form's model object
 *
 * @package    veranda
 * @subpackage form
 * @author     Abraham Rico Moreno
 */
abstract class BaseCaratulaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'id_cliente'          => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => false)),
      'fecha_levantamiento' => new sfWidgetFormDate(),
      'fecha_entrega'       => new sfWidgetFormDate(),
      'status'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_cliente'          => new sfValidatorPropelChoice(array('model' => 'Cliente', 'column' => 'id')),
      'fecha_levantamiento' => new sfValidatorDate(),
      'fecha_entrega'       => new sfValidatorDate(array('required' => false)),
      'status'              => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('caratula[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Caratula';
  }


}
