<script type="text/JavaScript">
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- format penulisan '+nm+' salah...!\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' harus angka.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' harus angka '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' masih kosong...!\n'; }
  } if (errors) { alert('Oooopppzzz,,,,ada sedikit kesalahan pada :\n'+errors);
  document.MM_returnValue = (errors == ''); }
  else { document.MM_returnValue = (errors == ''); }
}
</script>

<div id="content" class="col-sm-9"> 
<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
	<li><a href="<?php echo base_url(); ?>member">Halaman Member</a></li>
	<li><a href="<?php echo base_url(); ?>daftar">Register Member</a></li>
</ul>
<h1>Register Member</h1>
<p>Jika Anda sudah memiliki account dengan kami, silahkan login di <a href="<?php echo base_url(); ?>member/login">login</a>.</p>
<form action="<?php echo base_url(); ?>member/kirimregister" method="post" enctype="multipart/form-data" class="form-horizontal">
	<fieldset id="account">
		<legend>Data Personal</legend>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-namalengkap">Nama Lengkap</label>
		<div class="col-sm-9">
		<input type="text" name="nama" value="" placeholder="Nama Lengkap" id="input-namalengkap" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-email">Tanggal Lahir</label>
		<div class="col-sm-9">
		<?php
				echo "<div class='col-sm-3'><select name='tgl'>";
					for($a=1;$a<=31;$a++)
				  {
						echo "<option value=$a>$a</option>";
				  }
				  echo "</select></div>";
				  
				  echo "<div class='col-sm-3'><select name='bln'>";
				  for($b=1;$b<=12;$b++)
				  {
						echo "<option value=$b>$b</option>";
				  }
				  echo "</select></div>";
				  
				  echo "<div class='col-sm-3'><select name='thn'>";
				  for($c=1950;$c<=date('Y')+1;$c++)
				  {
						echo "<option value=$c>$c</option>";
				  }
				  echo "</select></div>";
		?>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-email">E-Mail</label>
		<div class="col-sm-9">
		<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-telephone">Telephone</label>
		<div class="col-sm-9">
		<input type="tel" name="telpon" value="" placeholder="Telephone" id="input-telephone" class="form-control"/>
		</div>
		</div>
	</fieldset>
	<fieldset id="account">
		<legend>Data Alamat</legend>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Alamat</label>
		<div class="col-sm-9">
		<input type="text" name="alamat" value="" placeholder="Alamat Lengkap" id="input-alamat" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-provinsi">Provinsi</label>
		<div class="col-sm-9">
		<input type="tel" name="propinsi" value="" placeholder="Provinsi" id="input-provinsi" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-kota">Kota</label>
		<div class="col-sm-9">
		<input type="tel" name="kota" value="" placeholder="Kota" id="input-kota" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-kodepos">Kode Pos</label>
		<div class="col-sm-9">
		<input type="tel" name="kodepos" value="" placeholder="Kode Pos" id="input-kodepos" class="form-control"/>
		</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Password</legend>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-username">Username</label>
		<div class="col-sm-9">
		<input type="text" name="username" value="" placeholder="User Name" id="input-username" class="form-control"/>
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-3 control-label" for="input-password">Password</label>
		<div class="col-sm-9">
		<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control"/>
		</div>
		</div>
	</fieldset>
	
	<div class="buttons">
		<input type="submit" class="btn btn-primary" onclick="MM_validateForm('username','','R','password','','R','nama','','R','email','','RisEmail','telpon','','RisNum','propinsi','','R','kodepos','','RisNum','kota','','R','captcha','','R','alamat','','R');return document.MM_returnValue" value="Register" />
		<input type="reset" class="btn btn-primary" value="Kosongkan Form" />
	</div>
</form>
</div>