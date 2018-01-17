<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shop | SLVR Intl. Clinic</title>
<meta name="author" content="Ahmad Mulyana" /> 
<meta name="keywords" content="keyword, desc"> 
<meta name="description" content="deskripsi"> 

<link href="<?php echo base_url(); ?>asset/images/favicon.png" rel="icon"/>
<script src="<?php echo base_url(); ?>asset/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/js/moment.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/js/datetimepicker.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>asset/css/datetimepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/magnificent.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/jquery.bxslider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/photoswipe.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/jquery.fancybox.css" rel="stylesheet">
<link href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_55729/catalog/view/theme/theme627/stylesheet/material-design.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/material-icons.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>asset/css/tm_category_menu.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo base_url(); ?>asset/css/camera.css" type="text/css" rel="stylesheet" media="screen"/>
<script src="<?php echo base_url(); ?>asset/js/common.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js" type="text/javascript"></script>
 
<script src="<?php echo base_url(); ?>asset/js/camera.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap-tabcollapse.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>asset/js/device.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>asset/css/stylesheet.css" rel="stylesheet">

</head>
<body>
<p id="gl_path" class="hidden"><?php echo base_url(); ?>asset</p>
<div id="page">
<header>
		<div class="container">
			<div class="fleft"><p class="open">Senin - Minggu Jam 08:00 - 22:00</p></div>
			<div class="fright">
				<div class="phone">
					<i class="material-icons-local_phone"></i>0821 2265 9000
				</div>
			</div>
		</div>
		<div class="container">
			<div class="fleft">
				<div id="logo" class="logo">
					<a href="#">
						<img src="<?php echo base_url(); ?>asset/images/logo.png" title="Toko Online Anda" alt="Toko Online Anda" class="img-responsive"/>
					</a>
				</div>
				<div id="search" class="search">
					<form method="post" action="<?php echo base_url(); ?>cari/lihat">
						<input type="text" name="search" value="" placeholder="Search"/>
						<button type="submit" class="button-search"><span>Search</span></button>
					</form>
				</div> 
			</div>
			<div class="fright">
				<div class="box-cart">
					<div id="cart" class="cart toggle-wrap">
					<button type="button" data-loading-text="Loading..." class="toggle item-btn">
						<i class="material-icons-local_grocery_store"></i>
						<strong>Shopping Cart:</strong>
						<span id="cart-total2" class="cart-total2"><?php echo $this->cart->total_items(); ?> items</span> <span id="cart-total3" class="cart-total3">0</span> 
					</button>
					<ul class="pull-right toggle_cont">
						<?php
						if($this->cart->total_items()>0)
						{
						?>
						<li>
						<table width="100%">
							<thead>
								<tr align="center">
									<td>Nama Barang</td>
									<td>Harga</td>
									<td>Qty</td>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach($this->cart->contents() as $items): ?>
								
								<tr>
									<td align="left"><?php echo $items['name']; ?></td>
									<td align="right">Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
									<td align="right"><?php echo $items['qty']; ?></td>
								</tr>
								
								<?php $i++; ?>
								<?php endforeach; ?>
							</tbody>
						</table>
						</li>
						<li>
						<div>
							<table class="table total">
								<tr>
								<td class="text-right"><strong>Total Belanja</strong></td>
								<td class="text-right">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
								</tr>
							</table>
							<div class="text-left" style="float:left">
							<a class="cart-remove-btn" href="<?php echo base_url(); ?>keranjang"><span> Lihat</span></a>
							</div>
							<div class="text-right" style="float:right">
							<a class="cart-remove-btn" href="<?php echo base_url(); ?>checkout"><span> Selesai</span></a>
							</div>
						</div>
						</li>
						<?php
						} else {echo'<li> <p class="text-center">Your shopping cart is empty!</p> </li>';}
						?>
					</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-line">
			<div class="container">
				<div class="top-links">
					<li class="first">
						<a href="<?php echo $this->config->item('site_url');?>web" title="Beranda">
							<i class="material-design-home149"></i> <span>Beranda</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $this->config->item('site_url');?>member" title="Member Area">
							<i class="material-icons-person"></i>Member Area
						</a>
					</li>
					<li>
						<a href="<?php echo $this->config->item('site_url');?>keranjang" title="Keranjang Belanja">
							<i class="material-design-shopping232"></i><span>Keranjang Belanja</span>
						</a>
					</li>
				</div>
				<div class="fright">
					<?php if(empty($_SESSION['username_grosir_sandal'])){
						echo'<a class="login" href="'.$this->config->item("site_url").'member/login"><i class="material-icons-vpn_key"></i>Login </a>';
					}
					else{
						echo'<a class="login" href="'.$this->config->item("site_url").'member/logout"><i class="material-icons-exit_to_app"></i>Log Out </a>';
					} ?>
					
				</div>
			</div>
		</div>
		<nav id="top-links" class="nav toggle-wrap">
			<a class="toggle material-design-settings49" href='#'></a>
			<ul class="toggle_cont">
				<li class="first">
					<a href="<?php echo $this->config->item('site_url');?>web" title="Beranda">
					<span>Beranda</span>
					</a>
				</li>
				<li class="toggle-wrap">
					<a href="<?php echo $this->config->item('site_url');?>member" title="Member Area" class="toggle">
					<span>Member Area</span>
					<span class="caret"></span></a>
					<ul class="toggle_cont">
						<li>
							<a href="<?php echo $this->config->item('site_url');?>member/daftar">Register</a>
						</li>
						<li>
							<a href="<?php echo $this->config->item('site_url');?>member/login">Login</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $this->config->item('site_url');?>keranjang" title="Keranjang Belanja">
					<span>Keranjang Belanja</span>
					</a>
				</li>
			</ul>
		</nav>
		<div class="container">
		<div id="menu-gadget" class="menu-gadget">
		<ul class="menu">
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
</header>

<div id="container">
<div class="container">

<div class="row">