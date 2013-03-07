<?php

/**
 * product_category module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage product_category
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseProduct_categoryGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'product_category_product_category' : 'product_category_product_category_'.$action;
  }
}
