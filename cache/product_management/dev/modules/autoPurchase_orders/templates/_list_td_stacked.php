<td colspan="3">
  <?php echo __('%%id%% - %%product_id%% - %%customer_id%%', array('%%id%%' => link_to($purchase_order->getId(), 'purchase_order_edit', $purchase_order), '%%product_id%%' => $purchase_order->getProductId(), '%%customer_id%%' => $purchase_order->getCustomerId()), 'messages') ?>
</td>
