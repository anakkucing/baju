<aside id="column-left" class="col-sm-3 ">

		<div class="box category col-sm-3">
			<div class="box-heading"><h3>Kategori</h3></div>
			<div class="box-content">
				<div class="box-category">
						<ul class="list-unstyled category_menu">
						<?php
							foreach($menu->result_array() as $m1)
							{
								$ambil = "";
								$ambil_kat = $this->sandal_model->ambil_id($m1['id_kategori']);
								foreach($ambil_kat->result() as $ak1)
								{
									$ambil .= "-".$ak1->id_kategori;
									$ambil_kat2 = $this->sandal_model->ambil_id($ak1->id_kategori);
									foreach($ambil_kat2->result() as $ak2)
									{
										$ambil .= "-".$ak2->id_kategori;
									}
								}
								$nm_link1 = $m1['id_kategori'].''.$ambil;
								$ld1 = strtolower(str_replace(" ","-",$nm_link1));
								$sub1 = $this->sandal_model->menu_kategori('1',$m1['id_kategori']);
									echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld1.'">'.$m1['nama_kategori'].'</a>';
								
								
								if(count($sub1->result())>0)
								{
									echo'<ul>';
										foreach($sub1->result() as $sm1)
										{
											$ambil2 = "";
											$ambil2_kat = $this->sandal_model->ambil_id($sm1->id_kategori);
											foreach($ambil2_kat->result() as $ak1_2)
											{
												$ambil2 .= "-".$ak1_2->id_kategori;
												$ambil2_kat2 = $this->sandal_model->ambil_id($ak1_2->id_kategori);
												foreach($ambil2_kat2->result() as $ak2_2)
												{
													$ambil2 .= "-".$ak2_2->id_kategori;
												}
											}
											
											$nm_link2 = $sm1->id_kategori.''.$ambil2;

											$ld2 = strtolower(str_replace(" ","-",$nm_link2));
											$sub2 = $this->sandal_model->menu_kategori('2',$sm1->id_kategori);
											if(count($sub2->result())>0) 
											{
												echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld2.'">'.$sm1->nama_kategori.'</a><ul>';
											}
											else
											{
												echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld2.'">'.$sm1->nama_kategori.'</a><ul>';
											}
											
											foreach($sub2->result() as $sm2)
											{
												$nm_link3 = $sm2->id_kategori;
												$ld3 = strtolower(str_replace(" ","-",$nm_link3));
												echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld3.'">'.$sm2->nama_kategori.'</a></li>';
											}
											
											echo '</ul>';
											echo '</li>';
											
										}
									echo '</ul>';
								}
								echo '</li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>


<div class="box featured">
<div class="box-heading"><h3>Terbaru Bulan Ini</h3></div>
<div class="box-content">
<div class="row">
		<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="product-thumb transition ">
		<div class="quick_info">
		<div id="quickview_1" class="quickview-style">
		<div>
			<div class="left col-sm-4">
				<div class="quickview_image image">
				<a href="#"><img alt="Nexium 24HR" title="Nexium 24HR" class="img-responsive" src="produk/product-31-100x90.png"/></a>
				</div>
			</div>
			<div class="right col-sm-8">
			<h2>Nexium 24HR</h2>
			<div class="inf">
			<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Musclepharm</a>
			</p>
			<p class="product_model model">Model: Product 16</p>
			<div class="price">
			<span class="price-new">$400.00</span>
			<span class="price-old">$10.00</span>
			</div>
			</div>
			<button class="product-btn-add" data-toggle="tooltip" title="Beli" type="button" onclick="cart.add('43');">
			<i class="fa fa-shopping-cart"></i>
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
			influence on our health. The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses
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
			Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business. One of the main advantages of our products
			is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.
			Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
			</p> </div>
			</div>
		</div>
		</div>
		</div>
		<div class="sale"><span>Sale</span></div>
		<div class="image">
			<a class="lazy" style="padding-bottom: 90%" href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=43">
			<img alt="Nexium 24HR" title="Nexium 24HR" class="img-responsive" data-src="produk/product-31-100x90.png" src="#"/>
			</a>
			<a class="quickview" data-rel="details" href="#quickview_1">Quick View </a>
		</div>
		<div class="caption">
			<div class="name name__aside">
			<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=43">Nexium 24HR</a>
			</div>
			<div class="price">
			<span class="price-new">$400.00</span> <span class="price-old">$10.00</span>
			</div>
			<div class="name">
				<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=43">Nexium 24HR</a>
			</div>
		</div>
		<div class="cart-button">
			<button class="product-btn-add" type="button" onclick="ajaxAdd($(this),43);">
			<i class="material-design-shopping231"></i>
			<span class="hidden-xs hidden-sm hidden-md">Beli</span>
			</button>
		</div>
		</div>
		</div>

</div>
</div>
</div>


<div class="box specials">
<div class="box-heading"><h3>Terlaris Bulan Ini</h3></div>
<div class="box-content">
<div class="row">
	<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="product-thumb transition  ">
		<div class="quick_info">
		<div id="quickview_specials_1" class="quickview-style">
		<div>
		<div class="left col-sm-4">
		<div class="quickview_image image">
		<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=33"><img alt="Best Colon Detox Formula" title="Best Colon Detox Formula" class="img-responsive" src="produk/product-52-100x90.png"/></a>
		</div>
		</div>
		<div class="right col-sm-8">
		<h2>Best Colon Detox Formula</h2>
		<div class="inf">
		<p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Jarrow formulas</a>
		</p>
		<p class="product_model model">Model: Product 6</p>
		<div class="price">
		<span class="price-new">$150.00</span>
		<span class="price-old">$200.00</span>
		</div>
		</div>
		<div class="rating">
		<span class="fa-stack"><i class="material-design-bookmark45 fa-stack-1x"></i></span>
		<span class="fa-stack"><i class="material-design-bookmark45 fa-stack-1x"></i></span>
		<span class="fa-stack"><i class="material-design-bookmark45 fa-stack-1x"></i></span>
		<span class="fa-stack"><i class="material-design-bookmark45 fa-stack-1x"></i></span>
		<span class="fa-stack"><i class="material-design-bookmark45 fa-stack-1x"></i></span>
		</div>
		<button class="product-btn-add" data-toggle="tooltip" title="Beli" type="button" onclick="cart.add('33');">
		<i class="fa fa-shopping-cart"></i>
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
		influence on our health. The human’s immune system is very uncertain thing because there is a countless quantity of different dangerous viruses
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
		Our vendors guarantee no side effects.</b> We have a great experience and good reputation in this business. One of the main advantages of our products
		is their reliability because we put great efforts into providing different researches that help us integrate the new safe technologies in our business.
		Well, if you are ready to purchase our goods we will help you to make a right choice. If you have some questions, you can address our support system.
		</p> </div>
		</div>
		</div>
		</div>
		</div>
		<div class="sale"><span>Sale</span></div>
		<div class="image">
		<a class="lazy" style="padding-bottom: 90%" href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=33">
		<img alt="Best Colon Detox Formula" title="Best Colon Detox Formula" class="img-responsive" data-src="produk/product-52-100x90.png" src="#"/>
		</a>
		<a class="quickview" data-rel="details" href="#quickview_">
		Quick View </a>
		</div>
		<div class="caption">
		<div class="name name__aside">
		<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=33">Best Colon Detox Formula</a>
		</div>
		<div class="price">
		<span class="price-new">$150.00</span> <span class="price-old">$200.00</span>
		</div>
		<div class="name">
		<a href="http://livedemo00.template-help.com/opencart_55729/index.php?route=product/product&amp;product_id=33">Best Colon Detox Formula</a>
		</div>
		</div>
		<div class="cart-button">
		<button class="product-btn-add" type="button" onclick="ajaxAdd($(this),33);">
		<i class="material-design-shopping231"></i>
		<span class="hidden-xs hidden-sm hidden-md">Beli</span>
		</button>
		</div>
		</div>
	</div>

</div>
</div>
</div>


</aside>