<?php

require_once '/usr/lib/php/symfony/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfPropelPlugin');
    $this->enablePlugins('sfGuardPlugin');
    $this->enablePlugins('sfTCPDFPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfGuardExtraPlugin');
  }
}
