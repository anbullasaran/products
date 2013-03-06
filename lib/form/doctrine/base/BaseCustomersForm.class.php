<?php

/**
 * Customers form base class.
 *
 * @method Customers getObject() Returns the current form's model object
 *
 * @package    products
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustomersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'customer_name' => new sfWidgetFormInputText(),
      'customer_type' => new sfWidgetFormInputText(),
      'location'      => new sfWidgetFormInputText(),
      'contact_addr'  => new sfWidgetFormTextarea(),
      'email'         => new sfWidgetFormInputText(),
      'phone_number'  => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'customer_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_type' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'location'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contact_addr'  => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone_number'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Customers', 'column' => array('email')))
    );

    $this->widgetSchema->setNameFormat('customers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customers';
  }

}
