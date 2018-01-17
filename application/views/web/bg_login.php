
<div id="content" class="col-sm-9"> 
	<ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
		<li><a href="<?php echo base_url(); ?>member/login">Log In Member</a></li>
	</ul>
<div class="row">
	<div class="col-sm-6">
		<div class="well">
			<div class="heading">
				<i class="material-design-add184"></i>
				<div class="extra-wrap">
					<h2>Register Member</h2>
					<strong>Belum jadi member ???</strong>
				</div>
			</div>
		<p>Dengan membuat akun Anda akan dapat berbelanja lebih cepat, up to date pada status pesanan, dan melacak pesanan telah Anda buat sebelumnya.</p>
		<a href="<?php echo base_url(); ?>member/daftar" class="btn btn-primary">Daftar</a>
		</div>
	</div>


	<div class="col-sm-6">
		<div class="well">
			<div class="heading">
				<i class="material-design-man460"></i>
				<h2>Login Member</h2>
				<strong>Saya adalah pelanggan</strong>
			</div>
			<form action="<?php echo base_url(); ?>member/aksilogin" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label" for="input-email">Username</label>
					<input type="text" name="usrname" value="" placeholder="Username" id="username" class="form-control"/>
				</div>
				<div class="form-group">
					<label class="control-label" for="input-password">Password</label>
					<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control"/>
				</div>
				<div class="form-group">
					<label class="control-label" for="input-email">Kode Captcha</label><br>
					<?php echo $gbr_captcha; ?>
					<input type="text" name="captcha" value="" placeholder="Kode Captcha" id="captcha" class="form-control"/>
					<br/>
					<a class="link" href="<?php echo base_url(); ?>member/lupa">Lupa Password</a>
				</div>
				<input type="submit" value="Log In" class="input-tombol btn btn-primary" /> 
				<input type="reset" value="Hapus" class="input-tombol btn btn-warning" />
			</form>
		</div>
	</div>
</div>
</div>