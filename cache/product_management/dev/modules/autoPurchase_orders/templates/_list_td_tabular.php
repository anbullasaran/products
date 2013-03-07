<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($purchase_order->getId(), 'purchase_order_edit', $purchase_order) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_product_id">
  <?php echo $purchase_order->getProductId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_customer_id">
  <?php echo $purchase_order->getCustomerId() ?>
</td>
