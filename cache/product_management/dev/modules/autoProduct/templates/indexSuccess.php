<?php use_helper('I18N', 'Date') ?>
<?php include_partial('product/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Product List', array(), 'messages') ?></h1>

  <?php include_partial('product/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('product/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('product/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('product/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('product/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('product/list_actions', array('helper' => $helper)) ?>
    </ul>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('product/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
