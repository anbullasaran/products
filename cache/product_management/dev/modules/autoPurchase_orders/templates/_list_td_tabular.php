<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($purchase_order->getId(), 'purchase_order_edit', $purchase_order) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Product">
  <?php echo $purchase_order->getProduct() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_Customer">
  <?php echo $purchase_order->getCustomer() ?>
</td>
