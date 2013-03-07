<?php use_helper('I18N', 'Date') ?>
<?php include_partial('purchase_orders/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Purchase orders', array(), 'messages') ?></h1>

  <?php include_partial('purchase_orders/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('purchase_orders/form_header', array('purchase_order' => $purchase_order, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('purchase_orders/form', array('purchase_order' => $purchase_order, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('purchase_orders/form_footer', array('purchase_order' => $purchase_order, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
