<ul class="nav navbar-nav">
    <li class="active">
      <a href='<?php echo site_url('/dashboard/index')?>'>Dashboard</a> 
    </li>
  
    <li class="dropdown" id='data-management-menu'>
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="<?=site_url('data/products')?>">Add Product</a></li>
        <li><a href="<?=site_url('data/product_categories')?>">Add Product Category</a></li>
        <li><a href="<?=site_url('data/product_brands')?>">Add Product Brand</a></li>
       </ul>
    </li>
    <li><a href="<?=site_url('/data/product_orders')?>">Orders</a></li>
    <li><a href="<?=site_url('/auth/logout')?>"><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
  </ul>