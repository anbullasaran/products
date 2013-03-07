<?php

/**
 * purchase_orders module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage purchase_orders
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePurchase_ordersGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'purchase_order' : 'purchase_order_'.$action;
  }
}
