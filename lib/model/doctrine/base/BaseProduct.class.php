<?php

/**
 * BaseProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $product_name
 * @property string $product_key
 * @property integer $unit_price
 * @property string $description
 * @property ProductCategory $ProductCategory
 * @property Doctrine_Collection $orders1
 * 
 * @method integer             getCategoryId()      Returns the current record's "category_id" value
 * @method string              getProductName()     Returns the current record's "product_name" value
 * @method string              getProductKey()      Returns the current record's "product_key" value
 * @method integer             getUnitPrice()       Returns the current record's "unit_price" value
 * @method string              getDescription()     Returns the current record's "description" value
 * @method ProductCategory     getProductCategory() Returns the current record's "ProductCategory" value
 * @method Doctrine_Collection getOrders1()         Returns the current record's "orders1" collection
 * @method Product             setCategoryId()      Sets the current record's "category_id" value
 * @method Product             setProductName()     Sets the current record's "product_name" value
 * @method Product             setProductKey()      Sets the current record's "product_key" value
 * @method Product             setUnitPrice()       Sets the current record's "unit_price" value
 * @method Product             setDescription()     Sets the current record's "description" value
 * @method Product             setProductCategory() Sets the current record's "ProductCategory" value
 * @method Product             setOrders1()         Sets the current record's "orders1" collection
 * 
 * @package    products
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('product_name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('product_key', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('unit_price', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '4000',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ProductCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('orders as orders1', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}