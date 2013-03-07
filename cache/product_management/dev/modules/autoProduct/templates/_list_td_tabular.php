<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($product->getId(), 'product_edit', $product) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_product_name">
  <?php echo $product->getProductName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_product_key">
  <?php echo $product->getProductKey() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_unit_price">
  <?php echo $product->getUnitPrice() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $product->getDescription() ?>
</td>
