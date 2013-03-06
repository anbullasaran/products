<?php

/**
 * Customers filter form base class.
 *
 * @package    products
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustomersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'customer_name' => new sfWidgetFormFilterInput(),
      'customer_type' => new sfWidgetFormFilterInput(),
      'location'      => new sfWidgetFormFilterInput(),
      'contact_addr'  => new sfWidgetFormFilterInput(),
      'email'         => new sfWidgetFormFilterInput(),
      'phone_number'  => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'customer_name' => new sfValidatorPass(array('required' => false)),
      'customer_type' => new sfValidatorPass(array('required' => false)),
      'location'      => new sfValidatorPass(array('required' => false)),
      'contact_addr'  => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'phone_number'  => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('customers_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customers';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'customer_name' => 'Text',
      'customer_type' => 'Text',
      'location'      => 'Text',
      'contact_addr'  => 'Text',
      'email'         => 'Text',
      'phone_number'  => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
