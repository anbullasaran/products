<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($customers->getId(), 'customers_edit', $customers) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_customer_name">
  <?php echo $customers->getCustomerName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_customer_type">
  <?php echo $customers->getCustomerType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $customers->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_contact_addr">
  <?php echo $customers->getContactAddr() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $customers->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phone_number">
  <?php echo $customers->getPhoneNumber() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($customers->getCreatedAt()) ? format_date($customers->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($customers->getUpdatedAt()) ? format_date($customers->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
