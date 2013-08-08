<?php

/**
 * Caratula filter form base class.
 *
 * @package    veranda
 * @subpackage filter
 * @author     Abraham Rico Moreno
 */
abstract class BaseCaratulaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cliente'          => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'fecha_levantamiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_entrega'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'status'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_cliente'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Cliente', 'column' => 'id')),
      'fecha_levantamiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_entrega'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'status'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('caratula_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Caratula';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'id_cliente'          => 'ForeignKey',
      'fecha_levantamiento' => 'Date',
      'fecha_entrega'       => 'Date',
      'status'              => 'Text',
    );
  }
}
