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
	<li><a href="<?php echo base_url(); ?>hubungi_kami">CONTACT US</a></li>
</ul>

<h1>CONTACT US</h1>
Anda bisa langsung menghubungi kami di:
<form method="post" action="<?php echo base_url(); ?>hubungi_kami/kirim_pesan" class="form-horizontal">
<fieldset id="account">
	<table width="100%">
		<tr><td colspan="2"><legend>Jakarta</legend></td></tr>
		<tr>
		<td width="50%" valign="top">
			SLVR INTERNATIONAL CLINIC TEBET<br>
			Jl. Tebet Raya No.44A, Jakarta Selatan<br>
			082122659000
		</td>
		<td width="50%" valign="top">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2595842922133!2d106.85150021476915!3d-6.229468495490667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f39a7becf97d%3A0xe3cdded3acbfc238!2sJl.+Tebet+Raya+No.44%2C+Tebet+Tim.%2C+Tebet%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12820%2C+Indonesia!5e0!3m2!1sen!2s!4v1484215278425" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</td>
		</tr>
		<tr><td colspan="2"><legend>Surabaya</legend></td></tr>
		<tr>
		<td width="50%" valign="top">
			SLVR INTERNATIONAL CLINIC SURABAYA<br>
			Jl. Kutai No.38, Surabaya<br>
			081239629000
		</td>
		<td width="50%" valign="top">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.549630446443!2d112.73149961433121!3d-7.291970073697506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9405706abb%3A0xc27865956431f902!2sJl.+Kutai+No.38%2C+Darmo%2C+Wonokromo%2C+Kota+SBY%2C+Jawa+Timur+60241%2C+Indonesia!5e0!3m2!1sen!2s!4v1484215316718" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</td>
		</tr>
	</table>
	


	<!--<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Nama</label>
		<div class="col-sm-9">
		<input name="nama" type="text" class="input-teks" id="nama" size="50" />
		<div id="alertnama" style="display:none; background-color:#999999; color:#FFFFFF; padding:5px;">Nama tidak diijinkan kosong</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Email</label>
		<div class="col-sm-9">
		<input name="email" type="text" class="input-teks" id="email" size="50" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">No. Telpon</label>
		<div class="col-sm-9">
		<input name="telpon" type="text" class="input-teks" id="telpon" size="50" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Alamat</label>
		<div class="col-sm-9">
		<input type="text" name="alamat" value="" id="input-alamat" class="form-control"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Kota</label>
		<div class="col-sm-9">
		<input name="kota" type="text" class="input-teks" id="kota" size="50" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Negara</label>
		<div class="col-sm-9">
		<select name="negara" class="input-teks"><option value="Afganistan">Afganistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option><option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Ter">British Indian Ocean Ter</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Channel Islands">Channel Islands</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos Island">Cocos Island</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote DIvoire">Cote DIvoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curaco">Curaco</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Ter">French Southern Ter</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Great Britain">Great Britain</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Hawaii">Hawaii</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia" selected="selected">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea North">Korea North</option><option value="Korea Sout">Korea Sout</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Nambia">Nambia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherland Antilles">Netherland Antilles</option><option value="Netherlands">Netherlands</option><option value="Nevis">Nevis</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau Island">Palau Island</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Phillipines">Phillipines</option><option value="Pitcairn Island">Pitcairn Island</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Republic of Montenegro">Republic of Montenegro</option><option value="Republic of Serbia">Republic of Serbia</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saipan">Saipan</option><option value="Samoa">Samoa</option><option value="Samoa American">Samoa American</option><option value="San Marino">San Marino</option><option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="St Barthelemy">St Barthelemy</option><option value="St Eustatius">St Eustatius</option><option value="St Helena">St Helena</option><option value="St Kitts-Nevis">St Kitts-Nevis</option><option value="St Lucia">St Lucia</option><option value="St Maarten">St Maarten</option><option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option><option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Tahiti">Tahiti</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Erimates">United Arab Erimates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Uraguay">Uraguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option><option value="Virgin Islands (USA)">Virgin Islands (USA)</option><option value="Wake Island">Wake Island</option><option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option><option value="Yemen">Yemen</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Pesan</label>
		<div class="col-sm-9">
		<textarea name="pesan" value="" class="form-control"/></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="input-alamat">Kode Captcha</label>
		<div class="col-sm-9">
		<?php echo $gbr_captcha; ?>
		<input type="text" name="captcha" value="" id="input-alamat" class="form-control"/>
		</div>
	</div>
	<div class="buttons">
	<div class="pull-right">
		<input type="submit" class="btn btn-primary" onclick="MM_validateForm('nama','','R','email','','RisEmail','telpon','','NisNum','kota','','R','captcha','','R','alamat','','R','pesan','','R');return document.MM_returnValue" value="Kirim Pesan" />
		<input type="reset" class="btn btn-primary" value="Kosongkan Form" />
	</div>
	</div>-->
	</fieldset>
</form>
</div>