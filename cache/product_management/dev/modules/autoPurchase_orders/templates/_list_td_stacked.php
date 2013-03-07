<td colspan="3">
  <?php echo __('%%id%% - %%Product%% - %%Customer%%', array('%%id%%' => link_to($purchase_order->getId(), 'purchase_order_edit', $purchase_order), '%%Product%%' => $purchase_order->getProduct(), '%%Customer%%' => $purchase_order->getCustomer()), 'messages') ?>
</td>
