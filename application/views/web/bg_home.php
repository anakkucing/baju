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
			?>
					<script>
							$(document).ready(function ($) {
							$('#single-category_<?=$m1['id_kategori']?> #module-tabs a:first').tab('show')
							$('.module_tab').tabCollapse();
						});
						
					</script>

					<div class="box single-category">
						<div class="box-heading"><h2><?=$m1['nama_kategori']?></h2></div>
						<div class="box-content">
							<div role="tabpanel" class="module_tab" id="single-category_<?=$m1['id_kategori']?>">
												<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist" id="module-tabs">
										<li>
											<a href="#tab-latest-<?=$m1['id_kategori']?>" role="tab" data-toggle="tab">Terbaru</a>
										</li>
									</ul>
								
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane" id="tab-latest-<?=$m1['id_kategori']?>">
											<div class="box clearfix">
												<div class="tab-carousel">
												
												<?php
												$produk_home = $this->sandal_model->tampil_produk_per_kategori($m1['id_kategori'],0,6);
												foreach($produk_home->result_array() as $sph)
												{
												$tss = "";
												$mati = "";
												if($sph['stok']>0)
												{
													$tss = '<span style="margin:0px auto; padding:0px; font-size:12px;"><b>Ada</b></span>';
													$mati = "";
												}
												else
												{
													$tss = '<span style="margin:0px auto; padding:0px; font-size:12px; color:red;"><b>Habis</b></span>';
													$mati = "disabled";
												}
													$link_mentah = str_replace(' ','-',$sph['nama_produk']);
													$link = strtolower($link_mentah);
												?>
												
													<div class="product-thumb transition options">
																<div class="product-option-wrap">
																	<div class="product-options form-horizontal">
																		<div class="options">
																			<a class="ajax-overlay_close" href='#'></a>
																			<h3>Available Options</h3>

																			<div class="form-group hidden">
																				<label class="control-label col-sm-4" for="product_id"></label>
																				<div class="col-sm-8">
																					<input type="text" name="product_id" value="<?=$sph['kode_produk']?>" id="product_id" class="form-control"/>
																					<input type="hidden" name="kode_produk" value="<?=$sph['kode_produk']?>">
																					<input type="hidden" name="banyak" value="1">
																					<input type="hidden" name="harga" value="<?=$sph['harga']?>">
																					<input type="hidden" name="nama_produk" value="<?=$sph['nama_produk']?>">
																				</div>
																			</div>

																			<div class="form-group required">
																				<label class="control-label col-sm-12">Color</label>
																				<div class="col-sm-12">
																					<div id="input-option236">
																					<div class="radio">
																						<label for="option[23641]">
																							<input type="radio" hidden name="option[236]" id="option[23641]" value="41"/>black (+$10.00)
																						</label>
																					</div>
																					</div>
																				</div>
																			</div>
																			<button class="product-btn-add" type="button" onclick="cart.addPopup($(this),'<?=$sph['kode_produk']?>');">
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
																				<a href="<?=base_url()?>produk/detail/<?=$sph['kode_produk']?>-<?=$link?>">
																					<img alt="<?=$sph['nama_produk']?>" title="<?=$sph['nama_produk']?>" class="img-responsive" src="<?=base_url()?>asset/produk/<?=$sph['gbr_kecil']?>"/>
																				</a>
																			</div>
																		</div>
																		<div class="right col-sm-8">
																			<h2><?=$sph['nama_produk']?></h2>

																			<div class="inf">
																				<div class="price">
																					<span class="price-new"><?=number_format($sph['harga'],2,',','.')?></span>
																				</div>
																			</div>
																			<button class="product-btn-add" data-toggle="tooltip"
																					title="Beli" type="button"
																					onclick="cart.add('<?=$sph['kode_produk']?>');">
																				<i class="material-icons-add_shopping_cart"></i>
																				<span>Beli</span>
																			</button>
																			<div class="clear"></div>
																		</div>
																		
																		
																		<div class="col-sm-12">
																			<div class="quickview_description description"><?=$sph['deskripsi']?></div>
																		</div>
																	</div>
																</div>
																</div>

																<div class="sale"><span>Sale!</span></div>
																<div class="image">
																	<a class="lazy" style="padding-bottom: 90.909090909091%" href="<?=base_url()?>produk/detail/<?=$sph['kode_produk']?>-<?=$link?>">
																		<img alt="<?=$sph['nama_produk']?>"
																			 title="<?=$sph['nama_produk']?>"
																			 class="img-responsive" data-src="<?=base_url()?>asset/produk/<?=$sph['gbr_kecil']?>" src="<?=base_url()?>asset/produk/<?=$sph['gbr_kecil']?>"/>
																	</a>
																	<a class="quickview" data-rel="details" href="#quickview_latest_310">
																		Quick View                                            
																	</a>
																</div>
																<div class="caption">
																	<div class="name name__aside">
																		<a href="<?=base_url()?>produk/detail/<?=$sph['kode_produk']?>-<?=$link?>"><?=$sph['nama_produk']?></a>
																	</div>
																	
																	<div class="name">
																		<a href="<?=base_url()?>produk/detail/<?=$sph['kode_produk']?>-<?=$link?>"><?=$sph['nama_produk']?></a>
																	</div>
																	<div class="price">
																		<span class="price-new">Rp. <?=number_format($sph['harga'],2,',','.')?></span>
																	</div>
																</div>
																<div class="cart-button">
																	 <button class="product-btn-add" type="button" onclick="ajaxAdd($(this),<?=$sph['kode_produk']?>);">
																		<i class="material-icons-add_shopping_cart"></i>
																		<span>Beli</span>
																	</button>
																</div>
															</div>
														<!-- end -->
														<?php } ?>
														
														
												</div>
											</div>
										</div>
										
										
										<div class="view-all">
												<a href='<?php echo base_url(); ?>kategori/produk/<?=$ld1?>'>Lihat Semua Kategori <?=$m1['nama_kategori']?></a>
										</div>
								</div>
							</div>
						</div>
					</div>
			<?php } ?>

</div>