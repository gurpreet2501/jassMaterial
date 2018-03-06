<div class="list-group">
<?php foreach (product_brands() as $key => $brand):?> 
    <a href="<?=site_url('category/index/'.$brand->id)?>"><button type="button" class="list-group-item"><?=at($brand->name)?></button></a>
 <?php endforeach; ?> 
</div>