<td colspan="5">
  <?php echo __('%%id%% - %%product_name%% - %%product_key%% - %%unit_price%% - %%description%%', array('%%id%%' => link_to($product->getId(), 'product_edit', $product), '%%product_name%%' => $product->getProductName(), '%%product_key%%' => $product->getProductKey(), '%%unit_price%%' => $product->getUnitPrice(), '%%description%%' => $product->getDescription()), 'messages') ?>
</td>
