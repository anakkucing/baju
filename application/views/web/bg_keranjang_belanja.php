<div id="content" class="col-sm-9"> 
	<ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
		<li><a href="<?php echo base_url(); ?>keranjang">Keranjang Belanja</a></li>
	</ul>
	<h1><i class="material-design-shopping231"></i>Keranjang Belanja</h1>
<div class="row">
		
		<?php if(!$this->cart->contents()):
			echo 'Maaf, Keranjang Belanja Anda Masih Kosong.';
			echo '<div class="buttons">
				<div class="pull-right"><a href="'.base_url().'" class="btn btn-primary">Lanjut</a></div>
			</div>';
		else:
		?>

		<?php echo form_open('keranjang/update_keranjang'); ?>
			<table class="table table-bordered">
			<thead>
				<tr>
				<td>Jumlah</td>
				<td class="text-left">Nama Barang</td>
				<td class="text-left">Harga</td>
				<td class="text-right">Sub Total</td>
				<td class="text-right">Hapus</td>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach($this->cart->contents() as $items): ?>
				
				<?php echo form_hidden('rowid[]', $items['rowid']); ?>
				<tr <?php if($i&1){ echo 'class="alt"'; }?>>
					<td><input type="text" name="qty[]" value="<?=$items['qty']?>" size="1" class="form-control cart-q" id="cart-q"/></td>
					<td>&nbsp;<?php echo $items['name']; ?></td>
					<td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
					<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
					<td align="center"><a href="<?php echo base_url(); ?>keranjang/hapus_keranjang/<?php echo $items['rowid']; ?>" data-toggle="tooltip" title="Remove" class="cart-remove-btn"><i class="material-design-rubbish"></i></a></td>
				</tr>
				
				<?php $i++; ?>
				<?php endforeach; ?>
				
			</tbody>
		</table>

		<input type='submit' class='btn btn-primary' value='Update Keranjang Belanja'>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">
				<table class="table table-custom">
				<tr>
				<td>Total Belanja:</td>
				<td class="text-right">
				<div class="price">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></div>
				</td>
				</tr>
				</table>
			</div>
		</div>
		<div class="buttons">
			<div class="pull-left">
				<a href="<?php echo base_url(); ?>produk" class="btn btn-default">Lanjut Belanja</a>
			</div>
			<div class="pull-right">
				<a href="<?php echo base_url(); ?>checkout" class="btn btn-primary checkout">Selesai Belanja<i class="material-design-forward18"></i></a>
			</div>
		</div>
		<ul>
		<li>Apabila Anda mengubah jumlah (Qty), jangan lupa tekan tombol Update Keranjang Belanja</li>
		<li>Untuk menghaspus barang pada keranjang belanja, silahkan ganti jumlah barang menjadi 0. Atau klik tombol Hapus.</li>
		<li>Total harga di atas belum termasuk ongkos kirim yang akan dihitung saat Selesai Belanja</li>
		</ul>
		<?php 
		echo form_close(); 
		endif;
		?>


</div>
</div>