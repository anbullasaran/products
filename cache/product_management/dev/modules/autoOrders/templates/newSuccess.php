<?php use_helper('I18N', 'Date') ?>
<?php include_partial('orders/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Orders', array(), 'messages') ?></h1>

  <?php include_partial('orders/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('orders/form_header', array('orders' => $orders, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('orders/form', array('orders' => $orders, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('orders/form_footer', array('orders' => $orders, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
