<?php

/**
 * Cotizacion filter form base class.
 *
 * @package    veranda
 * @subpackage filter
 * @author     Abraham Rico Moreno
 */
abstract class BaseCotizacionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'folio_caratula'        => new sfWidgetFormPropelChoice(array('model' => 'Caratula', 'add_empty' => true)),
      'fecha_cotizacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'precio_optimo'         => new sfWidgetFormFilterInput(),
      'precio_sencillo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_ultimo_contacto' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tipo_contacto'         => new sfWidgetFormFilterInput(),
      'fecha_sigui_contacto'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tipo_sigui_contacto'   => new sfWidgetFormFilterInput(),
      'fecha_venta'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'folio_caratula'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Caratula', 'column' => 'id')),
      'fecha_cotizacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'precio_optimo'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'precio_sencillo'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'                => new sfValidatorPass(array('required' => false)),
      'fecha_ultimo_contacto' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'tipo_contacto'         => new sfValidatorPass(array('required' => false)),
      'fecha_sigui_contacto'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'tipo_sigui_contacto'   => new sfValidatorPass(array('required' => false)),
      'fecha_venta'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('cotizacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cotizacion';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'folio_caratula'        => 'ForeignKey',
      'fecha_cotizacion'      => 'Date',
      'precio_optimo'         => 'Number',
      'precio_sencillo'       => 'Number',
      'status'                => 'Text',
      'fecha_ultimo_contacto' => 'Date',
      'tipo_contacto'         => 'Text',
      'fecha_sigui_contacto'  => 'Date',
      'tipo_sigui_contacto'   => 'Text',
      'fecha_venta'           => 'Date',
    );
  }
}
