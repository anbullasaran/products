<?php

/**
 * orders form base class.
 *
 * @method orders getObject() Returns the current form's model object
 *
 * @package    products
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseordersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'product_id'  => new sfWidgetFormInputHidden(),
      'customer_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'product_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'product_id', 'required' => false)),
      'customer_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'customer_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orders[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'orders';
  }

}
