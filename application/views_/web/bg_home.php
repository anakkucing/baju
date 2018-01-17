<div id="content" class="col-sm-9">
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			navigation: true,
			playPause: false,
			thumbnails: false,
			navigationHover: false,
			barPosition: 'top',
			loader: false,
			time: 3000,
			transPeriod:800,
			alignment: 'center',
			autoAdvance: true,
			mobileAutoAdvance: true,
			barDirection: 'leftToRight', 
			barPosition: 'bottom',
			easing: 'easeInOutExpo',
			fx: 'simpleFade',
			height: '50.91954022988506%',
			minHeight: '200px',
			hover: true,
			pagination: false,
			loaderColor			: '#1f1f1f', 
			loaderBgColor		: 'transparent',
			loaderOpacity		: 1,
			loaderPadding		: 0,
			loaderStroke		: 3,
			});
	});
</script>
<div class="fluid_container" >
	<div class="camera_container">
	<div id="camera_wrap">
		<?php
			foreach($banner->result_array() as $bn)
			{
		?>
			<div title="<?php echo $bn['judul']; ?>" data-thumb="<?php echo base_url(); ?>asset/banner/<?php echo $bn['gambar']; ?>"  data-src="<?php echo base_url(); ?>asset/banner/<?php echo $bn['gambar']; ?>"></div>
		<?php
			}
		?>
	</div>
	</div>
	<div class="clear"></div>
</div>

<div class="box_html custom-block">
	<div class="col-50">
	 <div class="cnt">
	  <h2> 
		Diskon sampai <span>30%</span> <em>selama bulan januari 2016</em>
	  </h2>
	 </div>
	</div>


	<div class="col-50 mod1">
		<div class="cnt">
		  <h2> 
			<span class="fa-truck">Gratis Ongkir</span> pembelian lebih IDR 500k. <em>untuk semua jenis barang</em>
		  </h2>
		</div>
	</div>
</div>
					<script>
							$(document).ready(function ($) {
							$('#single-category0 #module-tabs a:first').tab('show')
							$('.module_tab').tabCollapse();
						});
						
					</script>

					<div class="box single-category">
						<div class="box-heading"><h2>Baby &amp; Child Care</h2></div>
						<div class="box-content">
							<div role="tabpanel" class="module_tab" id="single-category0">
												<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist" id="module-tabs">
																<li>
												<a href="#tab-latest-0" role="tab"
												   data-toggle="tab">New</a>
											</li>
																					<li>
												<a href="#tab-featured-0" role="tab"
												   data-toggle="tab">Featured</a>
											</li>
																					<li>
												<a href="#tab-specials-0" role="tab"
												   data-toggle="tab">Specials</a>
											</li>
																			</ul>
								
								<!-- Tab panes -->
								<div class="tab-content">
														<div role="tabpanel" class="tab-pane" id="tab-featured-0">
											<div class="box clearfix">
												<div class="tab-carousel">
																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="47"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12">Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option236">
																																												<div class="radio">
																										<label
																											for="option[23641]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23641]"
																												   value="41"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23643]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23643]"
																												   value="43"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23642]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23642]"
																												   value="42"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option235">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[235]"
																								id="input-option235"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="40">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="39">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="38">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'47');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_310" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47"><img
																						alt="Himalaya Herbal Healthcare"
																						title="Himalaya Herbal Healthcare"
																						class="img-responsive"
																						src="produk/product-10-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Himalaya Herbal Healthcare</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">Natrol</a>
																					</p>
																																																			<p class="product_model model">Model: Product 21</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$60.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('47');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">
																	<img alt="Himalaya Herbal Healthcare"
																		 title="Himalaya Herbal Healthcare"
																		 class="img-responsive"
																		 data-src="produk/product-10-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_310">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">Himalaya Herbal Healthcare</a>
																</div>
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">Himalaya Herbal Healthcare</a>
																</div>
																												 <div class="price">
																																<span
																				class="price-new">$60.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),47);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
																<div class="secondary-btns">
																</div>
															</div>
														</div>

																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="29"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12">Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option246">
																																												<div class="radio">
																										<label
																											for="option[24671]">
																											<input type="radio" hidden
																												   name="option[246]"
																												   id="option[24671]"
																												   value="71"/>
																											black                                                                                                                                                                            </label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[24673]">
																											<input type="radio" hidden
																												   name="option[246]"
																												   id="option[24673]"
																												   value="73"/>
																											white                                                                                                                                                                            </label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[24672]">
																											<input type="radio" hidden
																												   name="option[246]"
																												   id="option[24672]"
																												   value="72"/>
																											red                                                                                                                                                                            </label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option245">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[245]"
																								id="input-option245"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="69">Small                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="68">Medium                                                                                                                                                                            (+$10.00)
																																														</option>
																																												<option
																										value="70">Large                                                                                                                                                                            (+$20.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'29');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_320" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=29"><img
																						alt="CetylPure Capsules"
																						title="CetylPure Capsules"
																						class="img-responsive"
																						src="produk/product-43-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>CetylPure Capsules</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=6">Sundown</a>
																					</p>
																																																			<p class="product_model model">Model: Product 2</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$200.00</span>
																							<span
																								class="price-old">$279.99</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('29');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=29">
																	<img alt="CetylPure Capsules"
																		 title="CetylPure Capsules"
																		 class="img-responsive"
																		 data-src="produk/product-43-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_320">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=29">CetylPure Capsules</a>
																</div>
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=29">CetylPure Capsules</a>
																</div>
																												 <div class="price">
																																<span
																				class="price-new">$200.00</span>
																			<span
																				class="price-old">$279.99</span>
																																											</div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),29);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>

																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="45"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12">Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option248">
																																												<div class="radio">
																										<label
																											for="option[24877]">
																											<input type="radio" hidden
																												   name="option[248]"
																												   id="option[24877]"
																												   value="77"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[24879]">
																											<input type="radio" hidden
																												   name="option[248]"
																												   id="option[24879]"
																												   value="79"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[24878]">
																											<input type="radio" hidden
																												   name="option[248]"
																												   id="option[24878]"
																												   value="78"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group">
																						<label class="control-label col-sm-12"
																							   for="input-option247">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[247]"
																								id="input-option247"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="76">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="75">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="74">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'45');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_330" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=45"><img
																						alt="Factors Vitamin"
																						title="Factors Vitamin"
																						class="img-responsive"
																						src="produk/product-37-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Factors Vitamin</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
																					</p>
																																																			<p class="product_model model">Model: Product 18</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$150.00</span>
																							<span
																								class="price-old">$200.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('45');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=45">
																	<img alt="Factors Vitamin"
																		 title="Factors Vitamin"
																		 class="img-responsive"
																		 data-src="produk/product-37-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_330">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=45">Factors Vitamin</a>
																</div>
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=45">Factors Vitamin</a>
																</div>
																												 <div class="price">
																																<span
																				class="price-new">$150.00</span>
																			<span
																				class="price-old">$200.00</span>
																																											</div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),45);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>

																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="46"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																		<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option257">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[257]"
																								id="input-option257"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="106">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="105">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="104">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'46');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_340" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=46"><img
																						alt="Ricola Cough Suppressant"
																						title="Ricola Cough Suppressant"
																						class="img-responsive"
																						src="produk/product-55-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Ricola Cough Suppressant</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Jarrow formulas</a>
																					</p>
																																																			<p class="product_model model">Model: Product 19</p>
																				
																																				<div class="price">
																																								$1,000.00                                                                                                                                                                                                        </div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('46');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=46">
																	<img alt="Ricola Cough Suppressant"
																		 title="Ricola Cough Suppressant"
																		 class="img-responsive"
																		 data-src="produk/product-55-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_340">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=46">Ricola Cough Suppressant</a>
																</div>
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=46">Ricola Cough Suppressant</a>
																</div>
																												 <div class="price">
																																$1,000.00                                                                                                                                                        </div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),46);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>

																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="36"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12">Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option261">
																																												<div class="radio">
																										<label
																											for="option[261116]">
																											<input type="radio" hidden
																												   name="option[261]"
																												   id="option[261116]"
																												   value="116"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[261118]">
																											<input type="radio" hidden
																												   name="option[261]"
																												   id="option[261118]"
																												   value="118"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[261117]">
																											<input type="radio" hidden
																												   name="option[261]"
																												   id="option[261117]"
																												   value="117"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option260">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[260]"
																								id="input-option260"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="115">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="114">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="113">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'36');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_350" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=36"><img
																						alt="Sundown Naturals"
																						title="Sundown Naturals"
																						class="img-responsive"
																						src="produk/product-22-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Sundown Naturals</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
																					</p>
																																																			<p class="product_model model">Model: Product 9</p>
																				
																																				<div class="price">
																																								$100.00                                                                                                                                                                                                        </div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-icons-star fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('36');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=36">
																	<img alt="Sundown Naturals"
																		 title="Sundown Naturals"
																		 class="img-responsive"
																		 data-src="produk/product-22-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_350">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=36">Sundown Naturals</a>
																</div>
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=36">Sundown Naturals</a>
																</div>
																												 <div class="price">
																																$100.00                                                                                                                                                        </div>
																																					</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),36);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>

																				</div>
											</div>
										</div>
																		<div role="tabpanel" class="tab-pane" id="tab-latest-0">
											<div class="box clearfix">
												<div class="tab-carousel">
																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="47"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option236">
																																												<div class="radio">
																										<label
																											for="option[23641]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23641]"
																												   value="41"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23643]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23643]"
																												   value="43"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23642]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23642]"
																												   value="42"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option235">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[235]"
																								id="input-option235"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="40">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="39">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="38">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'47');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_latest_310" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47"><img
																						alt="Himalaya Herbal Healthcare"
																						title="Himalaya Herbal Healthcare"
																						class="img-responsive"
																						src="produk/product-10-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Himalaya Herbal Healthcare</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">Natrol</a>
																					</p>
																																																			<p class="product_model model">Model: Product 21</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$60.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('47');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">
																	<img alt="Himalaya Herbal Healthcare"
																		 title="Himalaya Herbal Healthcare"
																		 class="img-responsive"
																		 data-src="produk/product-10-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_latest_310">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">Himalaya Herbal Healthcare</a>
																</div>
																
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">Himalaya Herbal Healthcare</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$60.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																 <button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),47);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>
																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="44"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																		<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option239">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[239]"
																								id="input-option239"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="52">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="51">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="50">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'44');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_latest_320" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44"><img
																						alt="Defend Cough and Cold"
																						title="Defend Cough and Cold"
																						class="img-responsive"
																						src="produk/product-34-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Defend Cough and Cold</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
																					</p>
																																																			<p class="product_model model">Model: Product 17</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$90.00</span>
																							<span
																								class="price-old">$1,000.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('44');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44">
																	<img alt="Defend Cough and Cold"
																		 title="Defend Cough and Cold"
																		 class="img-responsive"
																		 data-src="produk/product-34-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_latest_320">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44">Defend Cough and Cold</a>
																</div>
																
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44">Defend Cough and Cold</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$90.00</span>
																			<span
																				class="price-old">$1,000.00</span>
																																											</div>
																																					</div>
															<div class="cart-button">
																 <button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),44);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>
																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="42"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option263">
																																												<div class="radio">
																										<label
																											for="option[263122]">
																											<input type="radio" hidden
																												   name="option[263]"
																												   id="option[263122]"
																												   value="122"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[263124]">
																											<input type="radio" hidden
																												   name="option[263]"
																												   id="option[263124]"
																												   value="124"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[263123]">
																											<input type="radio" hidden
																												   name="option[263]"
																												   id="option[263123]"
																												   value="123"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																																																																																																																																																																<div
																						class="form-group required">
																						<label class="control-label col-sm-12
																"
																							   for="input-option266">Time</label>

																						<div class="col-sm-12">
																							<div class="input-group time">
																								<input type="text"
																									   name="option[266]"
																									   value=""
																									   data-date-format="HH:mm"
																									   id="input-option266"
																									   class="form-control"/>
														<span class="input-group-btn">
														<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i>
														</button>
														</span></div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12
																"
																							   for="input-option264">Date &amp; Time</label>

																						<div class="col-sm-12">
																							<div class="input-group datetime">
																								<input type="text"
																									   name="option[264]"
																									   value="2014-12-18 12:25"
																									   data-date-format="YYYY-MM-DD HH:mm"
																									   id="input-option264"
																									   class="form-control"/>
														<span class="input-group-btn">
														<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i>
														</button>
														</span></div>
																						</div>
																					</div>
																																																																																<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option262">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[262]"
																								id="input-option262"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="121">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="120">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="119">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																																																																																																																																																	<div
																						class="form-group required">
																						<label class="control-label col-sm-12
																"
																							   for="input-option265">Delivery Date</label>

																						<div class="col-sm-12">
																							<div class="input-group date">
																								<input type="text"
																									   name="option[265]"
																									   value="2014-12-18"
																									   data-date-format="YYYY-MM-DD"
																									   id="input-option265"
																									   class="form-control"/>
																<span class="input-group-btn">
																	<button class="btn btn-default" type="button"><i
																			class="fa fa-calendar"></i></button>
																</span>
																							</div>
																						</div>
																					</div>
																																																																														<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'42');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_latest_330" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42"><img
																						alt="Muscle Pharm"
																						title="Muscle Pharm"
																						class="img-responsive"
																						src="produk/product-22-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Muscle Pharm</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
																					</p>
																																																			<p class="product_model model">Model: Product 15</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$90.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('42');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42">
																	<img alt="Muscle Pharm"
																		 title="Muscle Pharm"
																		 class="img-responsive"
																		 data-src="produk/product-22-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_latest_330">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42">Muscle Pharm</a>
																</div>
																
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42">Muscle Pharm</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$90.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																 <button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),42);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>
																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="31"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option256">
																																												<div class="radio">
																										<label
																											for="option[256101]">
																											<input type="radio" hidden
																												   name="option[256]"
																												   id="option[256101]"
																												   value="101"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[256103]">
																											<input type="radio" hidden
																												   name="option[256]"
																												   id="option[256103]"
																												   value="103"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[256102]">
																											<input type="radio" hidden
																												   name="option[256]"
																												   id="option[256102]"
																												   value="102"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option255">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[255]"
																								id="input-option255"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="100">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="99">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="98">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'31');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_latest_340" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=31"><img
																						alt="Quantum Migrelief"
																						title="Quantum Migrelief"
																						class="img-responsive"
																						src="produk/product-40-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Quantum Migrelief</h2>

																			<div class="inf">
																																																			<p class="product_model model">Model: Product 4</p>
																				
																																				<div class="price">
																																								$80.00                                                                                                                                                                                                        </div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('31');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=31">
																	<img alt="Quantum Migrelief"
																		 title="Quantum Migrelief"
																		 class="img-responsive"
																		 data-src="produk/product-40-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_latest_340">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=31">Quantum Migrelief</a>
																</div>
																
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=31">Quantum Migrelief</a>
																</div>
																												<div class="price">
																																$80.00                                                                                                                                                        </div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																 <button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),31);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>
																						<div
															class="product-thumb transition options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="30"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option237">
																																												<div class="radio">
																										<label
																											for="option[23744]">
																											<input type="radio" hidden
																												   name="option[237]"
																												   id="option[23744]"
																												   value="44"/>
																											black                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23746]">
																											<input type="radio" hidden
																												   name="option[237]"
																												   id="option[23746]"
																												   value="46"/>
																											white                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23745]">
																											<input type="radio" hidden
																												   name="option[237]"
																												   id="option[23745]"
																												   value="45"/>
																											red                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option238">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[238]"
																								id="input-option238"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="49">Small                                                                                                                                                                            (+$10.00)
																																														</option>
																																												<option
																										value="48">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="47">Large                                                                                                                                                                            (+$20.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'30');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_latest_350" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30"><img
																						alt="Hyland's Bioplasma"
																						title="Hyland's Bioplasma"
																						class="img-responsive"
																						src="produk/product-13-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Hyland's Bioplasma</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Ricola</a>
																					</p>
																																																			<p class="product_model model">Model: Product 3</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$80.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('30');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30">
																	<img alt="Hyland's Bioplasma"
																		 title="Hyland's Bioplasma"
																		 class="img-responsive"
																		 data-src="produk/product-13-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_latest_350">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30">Hyland's Bioplasma</a>
																</div>
																
																<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30">Hyland's Bioplasma</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$80.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																																							<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																 <button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),30);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>
														</div>
																				</div>
											</div>
										</div>
																		<div role="tabpanel" class="tab-pane" id="tab-specials-0">
											<div class="box clearfix">
												<div class="tab-carousel">
																						<div
															class="product-thumb transition  options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="44"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																		<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option239">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[239]"
																								id="input-option239"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="52">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="51">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="50">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'44');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_specials_310" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44"><img
																						alt="Defend Cough and Cold"
																						title="Defend Cough and Cold"
																						class="img-responsive"
																						src="produk/product-34-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Defend Cough and Cold</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
																					</p>
																																																			<p class="product_model model">Model: Product 17</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$90.00</span>
																							<span
																								class="price-old">$1,000.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('44');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44">
																	<img alt="Defend Cough and Cold"
																		 title="Defend Cough and Cold"
																		 class="img-responsive"
																		 data-src="produk/product-34-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_specials_310">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44">Defend Cough and Cold</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$90.00</span>
																			<span
																				class="price-old">$1,000.00</span>
																																											</div>
																											<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=44">Defend Cough and Cold</a>
																</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),44);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>

														</div>
																						<div
															class="product-thumb transition  options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="28"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option234">
																																												<div class="radio">
																										<label
																											for="option[23435]">
																											<input type="radio" hidden
																												   name="option[234]"
																												   id="option[23435]"
																												   value="35"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23437]">
																											<input type="radio" hidden
																												   name="option[234]"
																												   id="option[23437]"
																												   value="37"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23436]">
																											<input type="radio" hidden
																												   name="option[234]"
																												   id="option[23436]"
																												   value="36"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option233">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[233]"
																								id="input-option233"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="34">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="33">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="32">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'28');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_specials_320" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=28"><img
																						alt="Garden of Life RAW Enzymes"
																						title="Garden of Life RAW Enzymes"
																						class="img-responsive"
																						src="produk/product-10-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Garden of Life RAW Enzymes</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">Hyland's</a>
																					</p>
																																																			<p class="product_model model">Model: Product 1</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$80.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('28');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=28">
																	<img alt="Garden of Life RAW Enzymes"
																		 title="Garden of Life RAW Enzymes"
																		 class="img-responsive"
																		 data-src="produk/product-10-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_specials_320">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=28">Garden of Life RAW Enzymes</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$80.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																											<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=28">Garden of Life RAW Enzymes</a>
																</div>
																												<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),28);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>

														</div>
																						<div
															class="product-thumb transition  options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="47"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option236">
																																												<div class="radio">
																										<label
																											for="option[23641]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23641]"
																												   value="41"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23643]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23643]"
																												   value="43"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23642]">
																											<input type="radio" hidden
																												   name="option[236]"
																												   id="option[23642]"
																												   value="42"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option235">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[235]"
																								id="input-option235"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="40">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="39">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="38">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'47');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_specials_330" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47"><img
																						alt="Himalaya Herbal Healthcare"
																						title="Himalaya Herbal Healthcare"
																						class="img-responsive"
																						src="produk/product-10-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Himalaya Herbal Healthcare</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">Natrol</a>
																					</p>
																																																			<p class="product_model model">Model: Product 21</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$60.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('47');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">
																	<img alt="Himalaya Herbal Healthcare"
																		 title="Himalaya Herbal Healthcare"
																		 class="img-responsive"
																		 data-src="produk/product-10-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_specials_330">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">Himalaya Herbal Healthcare</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$60.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																											<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=47">Himalaya Herbal Healthcare</a>
																</div>
																												<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),47);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>

														</div>
																						<div
															class="product-thumb transition  options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="30"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option237">
																																												<div class="radio">
																										<label
																											for="option[23744]">
																											<input type="radio" hidden
																												   name="option[237]"
																												   id="option[23744]"
																												   value="44"/>
																											black                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23746]">
																											<input type="radio" hidden
																												   name="option[237]"
																												   id="option[23746]"
																												   value="46"/>
																											white                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[23745]">
																											<input type="radio" hidden
																												   name="option[237]"
																												   id="option[23745]"
																												   value="45"/>
																											red                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option238">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[238]"
																								id="input-option238"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="49">Small                                                                                                                                                                            (+$10.00)
																																														</option>
																																												<option
																										value="48">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="47">Large                                                                                                                                                                            (+$20.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																							<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'30');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_specials_340" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30"><img
																						alt="Hyland's Bioplasma"
																						title="Hyland's Bioplasma"
																						class="img-responsive"
																						src="produk/product-13-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Hyland's Bioplasma</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Ricola</a>
																					</p>
																																																			<p class="product_model model">Model: Product 3</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$80.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('30');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Sale!</span></div>
																									<div class="image">
																<a class="lazy"
																   style="padding-bottom: 90.909090909091%"
																   href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30">
																	<img alt="Hyland's Bioplasma"
																		 title="Hyland's Bioplasma"
																		 class="img-responsive"
																		 data-src="produk/product-13-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_specials_340">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30">Hyland's Bioplasma</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$80.00</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																											<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=30">Hyland's Bioplasma</a>
																</div>
																												<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),30);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>

														</div>
																						<div
															class="product-thumb transition  options">
																										<!-- Product options -->
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4"
																					   for="product_id"></label>

																				<div class="col-sm-8">
																					<input type="text"
																						   name="product_id"
																						   value="42"
																						   id="product_id"
																						   class="form-control"/>
																				</div>
																			</div>

																																																																	<div
																						class="form-group required">
																						<label
																							class="control-label col-sm-12"

																							>Color</label>

																						<div class="col-sm-12">
																							<div
																								id="input-option263">
																																												<div class="radio">
																										<label
																											for="option[263122]">
																											<input type="radio" hidden
																												   name="option[263]"
																												   id="option[263122]"
																												   value="122"/>
																											black                                                                                                                                                                                    (+$10.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[263124]">
																											<input type="radio" hidden
																												   name="option[263]"
																												   id="option[263124]"
																												   value="124"/>
																											white                                                                                                                                                                                    (+$20.00)
																																																</label>
																									</div>
																																												<div class="radio">
																										<label
																											for="option[263123]">
																											<input type="radio" hidden
																												   name="option[263]"
																												   id="option[263123]"
																												   value="123"/>
																											red                                                                                                                                                                                    (+$15.00)
																																																</label>
																									</div>
																																										</div>
																						</div>
																					</div>
																																																																																																																																																																																																																																																																																																																																<div
																						class="form-group required">
																						<label class="control-label col-sm-12
																"
																							   for="input-option266">Time</label>

																						<div class="col-sm-12">
																							<div class="input-group time">
																								<input type="text"
																									   name="option[266]"
																									   value=""
																									   data-date-format="HH:mm"
																									   id="input-option266"
																									   class="form-control"/>
														<span class="input-group-btn">
														<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i>
														</button>
														</span></div>
																						</div>
																					</div>
																																																																																																																																																																																									<div
																						class="form-group required">
																						<label class="control-label col-sm-12
																"
																							   for="input-option264">Date &amp; Time</label>

																						<div class="col-sm-12">
																							<div class="input-group datetime">
																								<input type="text"
																									   name="option[264]"
																									   value="2014-12-18 12:25"
																									   data-date-format="YYYY-MM-DD HH:mm"
																									   id="input-option264"
																									   class="form-control"/>
														<span class="input-group-btn">
														<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i>
														</button>
														</span></div>
																						</div>
																					</div>
																																																																																<div
																						class="form-group required">
																						<label class="control-label col-sm-12"
																							   for="input-option262">Size</label>

																						<div class="col-sm-12">
																							<select
																								name="option[262]"
																								id="input-option262"
																								class="form-control">
																								<option
																									value="">--- Please Select ---</option>
																																												<option
																										value="121">Small                                                                                                                                                                            (+$20.00)
																																														</option>
																																												<option
																										value="120">Medium                                                                                                                                                                            (+$15.00)
																																														</option>
																																												<option
																										value="119">Large                                                                                                                                                                            (+$10.00)
																																														</option>
																																										</select>
																						</div>
																					</div>
																																																																																																																																																																																																																																																																																																																	<div
																						class="form-group required">
																						<label class="control-label col-sm-12
																"
																							   for="input-option265">Delivery Date</label>

																						<div class="col-sm-12">
																							<div class="input-group date">
																								<input type="text"
																									   name="option[265]"
																									   value="2014-12-18"
																									   data-date-format="YYYY-MM-DD"
																									   id="input-option265"
																									   class="form-control"/>
																<span class="input-group-btn">
																	<button class="btn btn-default" type="button"><i
																			class="fa fa-calendar"></i></button>
																</span>
																							</div>
																						</div>
																					</div>
																																																																														<button class="product-btn-add" type="button"
																					onclick="cart.addPopup($(this),'42');">
																				<span>Beli</span>
																			</button>
																		</div>
																	</div>
																</div>
															
															<div class="quick_info">
																<div id="quickview_specials_350" class="quickview-style">
																	<div>
																		<div class="left col-sm-4">
																			<div class="quickview_image image">
																				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42"><img
																						alt="Muscle Pharm"
																						title="Muscle Pharm"
																						class="img-responsive"
																						src="produk/product-22-220x200.png"/></a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2>Mussscle Pharmsssssssssssss</h2>

																			<div class="inf">
																																				<p class="quickview_manufacture manufacture manufacture">Brand:                                                                    <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
																					</p>
																																																			<p class="product_model model">Model: Product 15</p>
																				
																																				<div class="price">
																																								<span
																								class="price-new">$90.00</span>
																							<span
																								class="price-old">$100.00</span>
																																																							</div>
																																		</div>
																			<div class="rating">
																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45   fa-stack-1x"></i>
																	<i class="material-design-bookmark45 star  fa-stack-1x"></i></span>
																																																																					<span class="fa-stack"><i
																								class="material-design-bookmark45 fa-stack-1x"></i></span>
																																																		</div>

																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('42');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		<div class="col-sm-12">
																			<div class="quickview_description description">
																				

					<p>
					<b>
					Health is one of most important things in our life.</b> We think that it is a real luck to have a strong health. Our way of 
					life doesn’t increase the physiological condition of our body. Alcohol, cigarettes, unhealthy food, stresses and other factors have a great 
					influence on our health.  The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses 
					and bacteria. From ancient times plague and other infectious diseases have been killing people without leaving them any chance to survive. 
					</p>
					<p>
					<b>
					All these diseases are even worse than wars by the quantity of deaths.</b>
					It is very noble activity to protect health and help people recover. Our main goal is to find the easiest way of treatment. 
					We understand that human’s activity is also very dangerous because it could lead to unforeseeable consequences like some complications or even death. 
					Our company states that our goods are of premium quality. There is nothing to worry about. 
					This product is totally safe for your health. It has passed many various tests without a single failure. It is really a product of a new generation. 
					</p>
					<p>
					<b>
					Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business.  One of the main advantages of our products 
					is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.        
					Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
					</p>                                                        </div>
																		</div>
																	</div>
																</div>
															</div>

																										<div class="sale"><span>Salllllllllle!</span></div>
																									<div class="image">
																<a class="lazy"  href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42">
																	<img alt="Muscle Pharm"
																		 title="Muscle Pharm"
																		 class="img-responsive"
																		 data-src="produk/product-22-220x200.png"
																		 src="#"/>
																</a>
																<a class="quickview" data-rel="details" href="#quickview_specials_350">
																	Quick View                                            </a>
															</div>
															<div class="caption">
																<div class="name name__aside">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42">Muscle Pharm</a>
																</div>
																												<div class="price">
																																<span
																				class="price-new">$90.00000000000</span>
																			<span
																				class="price-old">$100.00</span>
																																											</div>
																											<div class="name">
																	<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=42">Muscle Pharm</a>
																</div>
																												<div class="rating">
																																															<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star   fa-stack-1x"></i>
																	<i class="material-icons-star star  fa-stack-1x"></i></span>
																																																													<span class="fa-stack"><i
																						class="material-icons-star fa-stack-1x"></i></span>
																																												</div>
																										</div>
															<div class="cart-button">
																<button class="product-btn-add" type="button"
																		onclick="ajaxAdd($(this),42);">
																	<i class="material-icons-add_shopping_cart"></i>
																	<span>Beli</span>
																</button>
															</div>

														</div>
																				</div>
											</div>
										</div>
																	<div class="view-all">
										<a href='http://livedemo00.template-help.com/opencart_55729/index.php?route=product/category&amp;path=33'>View All Products</a>
									</div>
								</div>
							</div>
						</div>
					</div>


</div>