<?php use_helper('I18N', 'Date') ?>
<?php include_partial('orders/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Orders', array(), 'messages') ?></h1>

  <?php include_partial('orders/flashes') ?>

  <div id="sf_admin_header">
    <?php //include_partial('orders/form_header', array('orders' => $orders, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
 <form class="form uniformForm" method="post" action="">
  <div id="sf_admin_content">
    <div class="widget">
      <table cellpaddin="0" cellspacing="0" width="100%" border="0">  
          <tr>
              <td colspan="5" width="100%"><div class="widget-header"><h2 style ="float:left; padding-top: 8px;">Order Booking</h2></div>   </td>
          </tr>
          <tr height="50px"><td colspan="5"></td></tr>
          
            <div class="widget-content">                    
                <td width="20%">Product Names</td>
                <td width="20%">  
                    <select name="product_name">
                        <option value="0">--select--</option>
                        <?php 
                           $q = Doctrine_Query::create()
                            ->select('id')
                            ->from('Product p');                      
                            $count=$q->count();                    
                            for ($i = 1; $i <= $count;$i++ ): 
                        ?>
                        <option value="<?php echo Doctrine::getTable('Product')->find($i)->getId(); ?>"><?php echo Doctrine::getTable('Product')->find($i)->getProductName(); ?> </option>                                            
                        <?php  endfor; ?>                        
                    </select>
                </td>
                <td width="20%">Customer Name</td>
                <td width="20%">
                    <select mulitiple="true" name="customer_name">
                        <option value="0">--select--</option>
                        <?php 
                            $q = Doctrine_Query::create()
                            ->select('id')
                            ->from('Customers c');                      
                            $count=$q->count();
                            for ($i = 1; $i <= $count;$i++ ):
                        ?>
                        <option value="<?php echo Doctrine::getTable('Customers')->find($i)->getId(); ?>"><?php echo Doctrine::getTable('Customers')->find($i)->getCustomerName(); ?> </option>                                            
                        <?php  endfor; ?>     
                    </select>
                </td>  
                <td width="20%"><input type="submit" name="book_order" value="submit"></td>
                <?php            
                if(isset($_POST['book_order'])){ 
                    
                    $orders = new orders();        
                    $this->custId = $_REQUEST['customer_name'];
                    $this->pdtId = $_REQUEST['product_name'];
                    $orders->setProductId($this->pdtId);
                    $orders->setCustomerId($this->custId);                  
                    $orders->save();
                }
                ?>
            </div>
            </tr>
     </table>
  </div>
  </div>
 </form>

  <div id="sf_admin_footer">
    <?php include_partial('orders/form_footer', array('orders' => $orders, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
