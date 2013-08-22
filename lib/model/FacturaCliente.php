<?php


/**
 * Skeleton subclass for representing a row from the 'factura_cliente' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Aug  8 15:56:23 2013
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class FacturaCliente extends BaseFacturaCliente {
	public function getDireccion() {
        return sprintf("%s %s ", $this->getCalle() , $this->getNumeroExtInt());
    }
} // FacturaCliente
