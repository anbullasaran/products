<?php use_helper('I18N', 'Date') ?>
<?php include_partial('customers/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Customers', array(), 'messages') ?></h1>

  <?php include_partial('customers/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('customers/form_header', array('customer' => $customer, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('customers/form', array('customer' => $customer, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('customers/form_footer', array('customer' => $customer, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
