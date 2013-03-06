<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($product->getId(), 'product_edit', $product) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $product->getCategoryId() ?>
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
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($product->getCreatedAt()) ? format_date($product->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($product->getUpdatedAt()) ? format_date($product->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
