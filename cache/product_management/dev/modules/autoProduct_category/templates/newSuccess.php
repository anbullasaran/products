<?php use_helper('I18N', 'Date') ?>
<?php include_partial('product_category/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Product category', array(), 'messages') ?></h1>

  <?php include_partial('product_category/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('product_category/form_header', array('product_category' => $product_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('product_category/form', array('product_category' => $product_category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('product_category/form_footer', array('product_category' => $product_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
