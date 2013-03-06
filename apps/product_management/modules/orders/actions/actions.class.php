<?php

require_once dirname(__FILE__).'/../lib/ordersGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ordersGeneratorHelper.class.php';

/**
 * orders actions.
 *
 * @package    products
 * @subpackage orders
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ordersActions extends autoOrdersActions
{
  
  public function executeNew(sfWebRequest $request)
  {
     
    //$this->count = $this->getCount();
    $this->form = $this->configuration->getForm();
    $this->orders = $this->form->getObject();
  }
}
