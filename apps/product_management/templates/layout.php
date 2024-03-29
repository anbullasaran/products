<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          <a href="<?php echo url_for('homepage') ?>">
            <img src="/images/logo.jpg" alt="Product Management" />
          </a>
        </h1>
      </div>
       <div id="menu">
        <ul>
          <li>
            <?php echo link_to('customers', 'customers') ?> &nbsp;
            <?php echo link_to('category', 'product_category') ?> &nbsp;       
            <?php echo link_to('product', 'product') ?>&nbsp;
            <?php echo link_to('PurchaseOrder', 'purchase_order') ?>
          </li>
        </ul>
      </div>
       <div id="content">
            <?php echo $sf_content ?>
       </div>
      <div id="footer">
      
      </div>
    </div>
  </body>
</html>

 