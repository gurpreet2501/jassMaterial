<?php $this->load->view('partials/header'); ?>

	<!-- //Header Container  -->
	
	<!-- Block Spotlight1  -->

	<!-- //Block Spotlight1  -->
	
	<!-- Main Container  -->
	<div class="main-container container">
		
		<div class="row">
			<div id='sidebar' class="col-sm-3">
				<?php $this->load->view('partials/sidebar'); ?>
			</div>
			<div id="content" class="col-sm-9">
				<!-- products start				
				 -->
				 <div class="row">
				 		<?php  foreach ($products as $key => $product): ?>
				 	<div class="col-sm-3">
	 						
	 						<div class="ltabs-item product-layout">
									<div class="product-item-container">
										<div class="right-block">
									    	<div class="product-img" style="background:url('<?=base_url('assets/images/product1.jpg')?>')"></div>
												 <div class="caption">
													<h4><a href="product.html"><?=at($product->name)?></a></h4>		
													<div class="ratings">
														<div class="rating-box">
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														</div>
													</div>
																		
													<div class="price">
														<span class="price-new">Rs.<?=at($product->price)?></span> 
													</div>
												</div>
											  <div class="button-group">
												<button class="addToCart btn btn-primary" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add();"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
												
											  </div>
										</div><!-- right block -->
									</div>
							</div>
							
				 	</div>	
				 		<?php endforeach ?>
			
				 </div> <!-- row -->
				
	
			</div>
		</div>
	</div>

	
	<!-- //Main Container -->
	<!-- Block Spotlight3  -->
	<section class="so-spotlight3">
		<div class="container">
			<div class="row">
				
				<div id="so_categories_173761471880018" class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1">
					<h3 class="modtitle">Hot Categories</h3>
					
					<div class="wrap-categories">
						<div class="cat-wrap theme3">
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img src="<?=base_url('assets/images/')?>category/automotive-motocrycle.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 								
								</div>
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Automotive " target="_blank">Automotive</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">More Car Accessories		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Car Alarms and Security		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Car Audio &amp; Speakers		</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Gadgets &amp; Auto Parts	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/health-beauty.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Health &nbsp; Beauty</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Salon &nbsp; Spa Equipment		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Fragrances		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Shaving &nbsp; Hair Removal..	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Bath &nbsp; Body	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/bags-holiday-supplies-gifts.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Bags, Holiday Supplies</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Gift &nbsp; Lifestyle Gadgets..		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Lighter &nbsp; Cigar Supplies..		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Gift for Woman	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Gift for Man	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr3"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/toys-hobbies.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Toys &nbsp; Hobbies</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Helicopters &nbsp; Parts		</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">RC Cars &nbsp; Parts	</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">FPV System &nbsp; Parts	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Walkera	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2 clr4"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/electronics.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Electronics</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Home Audio</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Mp3 Players &nbsp; Accessories..	</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Headphones, Headsets</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Battereries &nbsp; Chargers..	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr5"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/jewelry-watches.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Jewelry &nbsp; Watches</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Men Watches	</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Wedding Rings		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Earings	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2 clr3 clr6"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/sports-outdoors.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Sports &nbsp; Outdoors</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Outdoor &nbsp; Traveling	</a> </div>
										<div class="child-cat-title"> <a title="Car Alarms and Security" href="#" target="_blank">Camping &nbsp; Hiking		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Golf Supplies	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Fishing	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1"></div>
							<div class="content-box">
								<div class="image-cat">
									<a href="#" title="Automotive" target="_blank">
										<img  src="<?=base_url('assets/images/')?>category/smartphone-tablets.jpg" title="Automotive" alt="Automotive"> 
									</a> 
									<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a> 		
								</div>	
									
								<div class="inner">
									<div class="title-cat"> <a href="#" title="Health &nbsp; Beauty" target="_blank">Smartphone &nbsp; Tablets</a> </div>
									<div class="child-cat">
										<div class="child-cat-title"> <a title="More Car Accessories" href="#" target="_blank">Accessories for iPhone		</a> </div>
										<div class="child-cat-title"> <a title="Car Audio &amp; Speakers" href="#" target="_blank">Accessories for i Pad	</a> </div>
										<div class="child-cat-title"> <a title="Gadgets &amp; Auto Parts" href="#" target="_blank">Accessories for Tablet PC	</a> </div>
									</div>
								</div>
							</div>
							<div class="clr1 clr2 clr4"></div>
						</div>
					</div>
				</div>
			
				<!-- <div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
					<div class="so_newletter_custom_popup_bg popup_bg"></div> 
					<div class="module main-newsleter-popup so_newletter_custom_popup so_newletter_oca_popup" id="so_newletter_custom_popup"> <div class="so-custom-popup so-custom-oca-popup" style="width: 850px; background: url('image/demo/cms/newletter-bg.jpg') no-repeat white;  "> 
						<div class="modcontent"> 
							<div class="oca_popup" id="test-popup"> <div class="popup-content"> <p class="newsletter_promo">Daily Promotion</p> 
								<div class="popup-title">SIGN UP FOR NEWSLETTER					</div>
								<form method="post" name="signup" class="form-group signup"> 
									<div class="input-control"> <div class="email"> <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail"> </div> <button class="btn btn-default" type="submit" onclick="return subscribe_newsletter();" name="submit">Subscribe	</button> </div> 
								</form> 
								<label class="hidden-popup"> <input type="checkbox" value="1" name="hidden-popup"> <span class="inline">&nbsp;&nbsp;Don't show this popup again</span> </label> </div> 
							</div> 
						</div> 
						<button title="Close" type="button" class="popup-close">×</button> </div> 
					</div> 
				</div> -->
			</div>
		</div>
	</section>
	<!-- //Block Spotlight3  -->
<script type="text/javascript"><!--
	var $typeheader = 'header-home1';
	//-->
</script>
<?php $this->load->view('partials/footer'); ?>