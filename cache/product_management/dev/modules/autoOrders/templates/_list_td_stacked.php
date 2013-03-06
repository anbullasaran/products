<td colspan="2">
  <?php echo __('%%product_id%% - %%customer_id%%', array('%%product_id%%' => link_to($orders->getProductId(), 'orders_edit', $orders), '%%customer_id%%' => link_to($orders->getCustomerId(), 'orders_edit', $orders)), 'messages') ?>
</td>
