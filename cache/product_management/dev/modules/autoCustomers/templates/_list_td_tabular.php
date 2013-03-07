<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($customer->getId(), 'customers_edit', $customer) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_customer_name">
  <?php echo $customer->getCustomerName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_customer_type">
  <?php echo $customer->getCustomerType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $customer->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_contact_addr">
  <?php echo $customer->getContactAddr() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $customer->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phone_number">
  <?php echo $customer->getPhoneNumber() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($customer->getCreatedAt()) ? format_date($customer->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($customer->getUpdatedAt()) ? format_date($customer->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
