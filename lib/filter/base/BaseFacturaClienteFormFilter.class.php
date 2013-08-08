<?php

/**
 * FacturaCliente filter form base class.
 *
 * @package    veranda
 * @subpackage filter
 * @author     Abraham Rico Moreno
 */
abstract class BaseFacturaClienteFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cliente'             => new sfWidgetFormPropelChoice(array('model' => 'Cliente', 'add_empty' => true)),
      'razon_social'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rfc'                    => new sfWidgetFormFilterInput(),
      'contacto_seguimiento'   => new sfWidgetFormFilterInput(),
      'calle'                  => new sfWidgetFormFilterInput(),
      'numero_ext_int'         => new sfWidgetFormFilterInput(),
      'colonia'                => new sfWidgetFormFilterInput(),
      'municipio'              => new sfWidgetFormFilterInput(),
      'estado'                 => new sfWidgetFormFilterInput(),
      'pais'                   => new sfWidgetFormFilterInput(),
      'telefono'               => new sfWidgetFormFilterInput(),
      'telefono_extension'     => new sfWidgetFormFilterInput(),
      'segundo_telefono'       => new sfWidgetFormFilterInput(),
      'telefono_extension_dos' => new sfWidgetFormFilterInput(),
      'correo_electronico'     => new sfWidgetFormFilterInput(),
      'segmento'               => new sfWidgetFormFilterInput(),
      'acercamiento'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_cliente'             => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Cliente', 'column' => 'id')),
      'razon_social'           => new sfValidatorPass(array('required' => false)),
      'rfc'                    => new sfValidatorPass(array('required' => false)),
      'contacto_seguimiento'   => new sfValidatorPass(array('required' => false)),
      'calle'                  => new sfValidatorPass(array('required' => false)),
      'numero_ext_int'         => new sfValidatorPass(array('required' => false)),
      'colonia'                => new sfValidatorPass(array('required' => false)),
      'municipio'              => new sfValidatorPass(array('required' => false)),
      'estado'                 => new sfValidatorPass(array('required' => false)),
      'pais'                   => new sfValidatorPass(array('required' => false)),
      'telefono'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'telefono_extension'     => new sfValidatorPass(array('required' => false)),
      'segundo_telefono'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'telefono_extension_dos' => new sfValidatorPass(array('required' => false)),
      'correo_electronico'     => new sfValidatorPass(array('required' => false)),
      'segmento'               => new sfValidatorPass(array('required' => false)),
      'acercamiento'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('factura_cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacturaCliente';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'id_cliente'             => 'ForeignKey',
      'razon_social'           => 'Text',
      'rfc'                    => 'Text',
      'contacto_seguimiento'   => 'Text',
      'calle'                  => 'Text',
      'numero_ext_int'         => 'Text',
      'colonia'                => 'Text',
      'municipio'              => 'Text',
      'estado'                 => 'Text',
      'pais'                   => 'Text',
      'telefono'               => 'Number',
      'telefono_extension'     => 'Text',
      'segundo_telefono'       => 'Number',
      'telefono_extension_dos' => 'Text',
      'correo_electronico'     => 'Text',
      'segmento'               => 'Text',
      'acercamiento'           => 'Text',
    );
  }
}
