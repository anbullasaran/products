<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($product_category->getId(), 'product_category_product_category_edit', $product_category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_category_name">
  <?php echo $product_category->getCategoryName() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($product_category->getCreatedAt()) ? format_date($product_category->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($product_category->getUpdatedAt()) ? format_date($product_category->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
