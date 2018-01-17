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
		<?php
		foreach($slide_baru->result_array() as $sl)
		{
		$tss = "";
		$mati = "";
		if($sl['stok']>0)
		{
			$tss = '<span style="margin:0px auto; padding:0px; font-size:12px;"><b>Ada</b></span>';
			$mati = "";
		}
		else
		{
			$tss = '<span style="margin:0px auto; padding:0px; font-size:12px; color:red;"><b>Habis</b></span>';
			$mati = "disabled";
		}
					$c = array (' ');
					$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
					$s = strtolower(str_replace($d,"",$sl['nama_produk']));
					$link = strtolower(str_replace($c, '-', $s));
			echo '<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="product-thumb transition ">
			<div class="image">
				<a class="lazy" style="padding-bottom: 90%" href="'.base_url().'produk/detail/'.strtolower($sl['kode_produk']).'-'.$link.'">
					<img alt="'.$sl['nama_produk'].'" class="img-responsive" data-src="'.base_url().'asset/produk/'.$sl['gbr_kecil'].'" src="'.base_url().'asset/produk/'.$sl['gbr_kecil'].'" width="100" title="'.$sl['nama_produk'].' - Harga Rp.'.number_format($sl['harga'],2,',','.').'" />
				</a>
			</div>
			<div class="caption">
				<div class="name name__aside">
				<a href="'.base_url().'produk/detail/'.strtolower($sl['kode_produk']).'-'.$link.'">'.$sl['nama_produk'].'</a>
				</div>
				<div class="price">
				<span class="price-new">'.number_format($sl['harga'],2,',','.').'</span>
				</div>
			</div>
			</div>
			</div>';
		}
		?>
		

</div>
</div>
</div>


<div class="box specials">
<div class="box-heading"><h3>Terlaris Bulan Ini</h3></div>
<div class="box-content">
<div class="row">
		<?php
		foreach($slide_laris->result_array() as $sl)
		{
		$tss = "";
		$mati = "";
		if($sl['stok']>0)
		{
			$tss = '<span style="margin:0px auto; padding:0px; font-size:12px;"><b>Ada</b></span>';
			$mati = "";
		}
		else
		{
			$tss = '<span style="margin:0px auto; padding:0px; font-size:12px; color:red;"><b>Habis</b></span>';
			$mati = "disabled";
		}
					$c = array (' ');
					$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
					$s = strtolower(str_replace($d,"",$sl['nama_produk']));
					$link = strtolower(str_replace($c, '-', $s));
			echo '<div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="product-thumb transition ">
			<div class="image">
				<a class="lazy" style="padding-bottom: 90%" href="'.base_url().'produk/detail/'.strtolower($sl['kode_produk']).'-'.$link.'">
					<img alt="'.$sl['nama_produk'].'" class="img-responsive" data-src="'.base_url().'asset/produk/'.$sl['gbr_kecil'].'" src="'.base_url().'asset/produk/'.$sl['gbr_kecil'].'" width="100" title="'.$sl['nama_produk'].' - Harga Rp.'.number_format($sl['harga'],2,',','.').'" />
				</a>
			</div>
			<div class="caption">
				<div class="name name__aside">
				<a href="'.base_url().'produk/detail/'.strtolower($sl['kode_produk']).'-'.$link.'">'.$sl['nama_produk'].'</a>
				</div>
				<div class="price">
				<span class="price-new">'.number_format($sl['harga'],2,',','.').'</span>
				</div>
			</div>
			</div>
			</div>';
		}
		?>
		

</div>
</div>
</div>

</aside>