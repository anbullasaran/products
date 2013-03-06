<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_product_id">
  <?php if ('product_id' == $sort[0]): ?>
    <?php echo link_to(__('Product', array(), 'messages'), '@orders', array('query_string' => 'sort=product_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Product', array(), 'messages'), '@orders', array('query_string' => 'sort=product_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_customer_id">
  <?php if ('customer_id' == $sort[0]): ?>
    <?php echo link_to(__('Customer', array(), 'messages'), '@orders', array('query_string' => 'sort=customer_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Customer', array(), 'messages'), '@orders', array('query_string' => 'sort=customer_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>