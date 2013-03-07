<td colspan="4">
  <?php echo __('%%id%% - %%category_name%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($product_category->getId(), 'product_category_edit', $product_category), '%%category_name%%' => $product_category->getCategoryName(), '%%created_at%%' => false !== strtotime($product_category->getCreatedAt()) ? format_date($product_category->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($product_category->getUpdatedAt()) ? format_date($product_category->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
