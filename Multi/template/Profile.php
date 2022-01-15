<div class="container-fluid">
	<div class="card py-20">
		<div class="d-flex justify-content-between align-items-center ">
			<p class="m-0"><b><?php echo $text['my_porfile_title'];?></b></p>
			<a href="<?php echo $AreaInfo['area_url'];?>index.php" class="btn btn-danger btn-sm"><i class="fa fa-backward"></i> <?php echo $text['return'];?></a>
		</div><hr>
		<div class="row">
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['first_name'];?>:</b> <?php echo $ClientInfo['hosting_client_fname'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['last_name'];?>:</b> <?php echo $ClientInfo['hosting_client_lname'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['email_address'];?>:</b> <?php echo $ClientInfo['hosting_client_email'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['your_phone'];?>:</b> <?php echo $ClientInfo['hosting_client_phone'];?></h6>
			</div>

			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['your_address'];?>:</b> <?php echo $ClientInfo['hosting_client_address'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['company'];?>:</b> <?php echo $ClientInfo['hosting_client_company'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['country'];?>:</b> <?php 
					$countries = array(
						array("name"=>"Andorra", "code"=>"AD"),
						array("name"=>"United Arab Emirates", "code"=>"AE"),
						array("name"=>"Afghanistan", "code"=>"AF"),
						array("name"=>"Antigua and Barbuda", "code"=>"AG"),
						array("name"=>"Anguilla", "code"=>"AI"),
						array("name"=>"Albania", "code"=>"AL"),
						array("name"=>"Armenia", "code"=>"AM"),
						array("name"=>"Netherlands Antilles", "code"=>"AN"),
						array("name"=>"Angola", "code"=>"AO"),
						array("name"=>"Asia/Pacific Region", "code"=>"AP"),
						array("name"=>"Antarctica", "code"=>"AQ"),
						array("name"=>"Argentina", "code"=>"AR"),
						array("name"=>"American Samoa", "code"=>"AS"),
						array("name"=>"Austria", "code"=>"AT"),
						array("name"=>"Australia", "code"=>"AU"),
						array("name"=>"Aruba", "code"=>"AW"),
						array("name"=>"Aland Islands", "code"=>"AX"),
						array("name"=>"Azerbaijan", "code"=>"AZ"),
						array("name"=>"Bosnia and Herzegovina", "code"=>"BA"),
						array("name"=>"Barbados", "code"=>"BB"),
						array("name"=>"Bangladesh", "code"=>"BD"),
						array("name"=>"Belgium", "code"=>"BE"),
						array("name"=>"Burkina Faso", "code"=>"BF"),
						array("name"=>"Bulgaria", "code"=>"BG"),
						array("name"=>"Bahrain", "code"=>"BH"),
						array("name"=>"Burundi", "code"=>"BI"),
						array("name"=>"Benin", "code"=>"BJ"),
						array("name"=>"Bermuda", "code"=>"BM"),
						array("name"=>"Brunei Darussalam", "code"=>"BN"),
						array("name"=>"Bolivia", "code"=>"BO"),
						array("name"=>"Brazil", "code"=>"BR"),
						array("name"=>"Bahamas", "code"=>"BS"),
						array("name"=>"Bhutan", "code"=>"BT"),
						array("name"=>"Bouvet Island", "code"=>"BV"),
						array("name"=>"Botswana", "code"=>"BW"),
						array("name"=>"Belarus", "code"=>"BY"),
						array("name"=>"Belize", "code"=>"BZ"),
						array("name"=>"Canada", "code"=>"CA"),
						array("name"=>"Cocos (Keeling) Islands", "code"=>"CC"),
						array("name"=>"Congo", "code"=>"CD"),
						array("name"=>"Central African Republic", "code"=>"CF"),
						array("name"=>"Congo", "code"=>"CG"),
						array("name"=>"Switzerland", "code"=>"CH"),
						array("name"=>"Cote d'Ivoire", "code"=>"CI"),
						array("name"=>"Cook Islands", "code"=>"CK"),
						array("name"=>"Chile", "code"=>"CL"),
						array("name"=>"Cameroon", "code"=>"CM"),
						array("name"=>"China", "code"=>"CN"),
						array("name"=>"Colombia", "code"=>"CO"),
						array("name"=>"Costa Rica", "code"=>"CR"),
						array("name"=>"Cuba", "code"=>"CU"),
						array("name"=>"Cape Verde", "code"=>"CV"),
						array("name"=>"Christmas Island", "code"=>"CX"),
						array("name"=>"Cyprus", "code"=>"CY"),
						array("name"=>"Czech Republic", "code"=>"CZ"),
						array("name"=>"Germany", "code"=>"DE"),
						array("name"=>"Djibouti", "code"=>"DJ"),
						array("name"=>"Denmark", "code"=>"DK"),
						array("name"=>"Dominica", "code"=>"DM"),
						array("name"=>"Dominican Republic", "code"=>"DO"),
						array("name"=>"Algeria", "code"=>"DZ"),
						array("name"=>"Ecuador", "code"=>"EC"),
						array("name"=>"Estonia", "code"=>"EE"),
						array("name"=>"Egypt", "code"=>"EG"),
						array("name"=>"Western Sahara", "code"=>"EH"),
						array("name"=>"Eritrea", "code"=>"ER"),
						array("name"=>"Spain", "code"=>"ES"),
						array("name"=>"Ethiopia", "code"=>"ET"),
						array("name"=>"Europe", "code"=>"EU"),
						array("name"=>"Finland", "code"=>"FI"),
						array("name"=>"Fiji", "code"=>"FJ"),
						array("name"=>"Falkland Islands (Malvinas)", "code"=>"FK"),
						array("name"=>"Micronesia", "code"=>"FM"),
						array("name"=>"Faroe Islands", "code"=>"FO"),
						array("name"=>"France", "code"=>"FR"),
						array("name"=>"Gabon", "code"=>"GA"),
						array("name"=>"United Kingdom", "code"=>"GB"),
						array("name"=>"Grenada", "code"=>"GD"),
						array("name"=>"Georgia", "code"=>"GE"),
						array("name"=>"French Guiana", "code"=>"GF"),
						array("name"=>"Guernsey", "code"=>"GG"),
						array("name"=>"Ghana", "code"=>"GH"),
						array("name"=>"Gibraltar", "code"=>"GI"),
						array("name"=>"Greenland", "code"=>"GL"),
						array("name"=>"Gambia", "code"=>"GM"),
						array("name"=>"Guinea", "code"=>"GN"),
						array("name"=>"Guadeloupe", "code"=>"GP"),
						array("name"=>"Equatorial Guinea", "code"=>"GQ"),
						array("name"=>"Greece", "code"=>"GR"),
						array("name"=>"South Georgia and the South Sandwich Islands", "code"=>"GS"),
						array("name"=>"Guatemala", "code"=>"GT"),
						array("name"=>"Guam", "code"=>"GU"),
						array("name"=>"Guinea-Bissau", "code"=>"GW"),
						array("name"=>"Guyana", "code"=>"GY"),
						array("name"=>"Hong Kong", "code"=>"HK"),
						array("name"=>"Heard Island and McDonald Islands", "code"=>"HM"),
						array("name"=>"Honduras", "code"=>"HN"),
						array("name"=>"Croatia", "code"=>"HR"),
						array("name"=>"Haiti", "code"=>"HT"),
						array("name"=>"Hungary", "code"=>"HU"),
						array("name"=>"Indonesia", "code"=>"ID"),
						array("name"=>"Ireland", "code"=>"IE"),
						array("name"=>"Israel", "code"=>"IL"),
						array("name"=>"Isle of Man", "code"=>"IM"),
						array("name"=>"India", "code"=>"IN"),
						array("name"=>"British Indian Ocean Territory", "code"=>"IO"),
						array("name"=>"Iraq", "code"=>"IQ"),
						array("name"=>"Iran", "code"=>"IR"),
						array("name"=>"Iceland", "code"=>"IS"),
						array("name"=>"Italy", "code"=>"IT"),
						array("name"=>"Jersey", "code"=>"JE"),
						array("name"=>"Jamaica", "code"=>"JM"),
						array("name"=>"Jordan", "code"=>"JO"),
						array("name"=>"Japan", "code"=>"JP"),
						array("name"=>"Kenya", "code"=>"KE"),
						array("name"=>"Kyrgyzstan", "code"=>"KG"),
						array("name"=>"Cambodia", "code"=>"KH"),
						array("name"=>"Kiribati", "code"=>"KI"),
						array("name"=>"Comoros", "code"=>"KM"),
						array("name"=>"Saint Kitts and Nevis", "code"=>"KN"),
						array("name"=>"Korea", "code"=>"KP"),
						array("name"=>"Korea", "code"=>"KR"),
						array("name"=>"Kuwait", "code"=>"KW"),
						array("name"=>"Cayman Islands", "code"=>"KY"),
						array("name"=>"Kazakhstan", "code"=>"KZ"),
						array("name"=>"Lao People's Democratic Republic", "code"=>"LA"),
						array("name"=>"Lebanon", "code"=>"LB"),
						array("name"=>"Saint Lucia", "code"=>"LC"),
						array("name"=>"Liechtenstein", "code"=>"LI"),
						array("name"=>"Sri Lanka", "code"=>"LK"),
						array("name"=>"Liberia", "code"=>"LR"),
						array("name"=>"Lesotho", "code"=>"LS"),
						array("name"=>"Lithuania", "code"=>"LT"),
						array("name"=>"Luxembourg", "code"=>"LU"),
						array("name"=>"Latvia", "code"=>"LV"),
						array("name"=>"Libyan Arab Jamahiriya", "code"=>"LY"),
						array("name"=>"Morocco", "code"=>"MA"),
						array("name"=>"Monaco", "code"=>"MC"),
						array("name"=>"Moldova", "code"=>"MD"),
						array("name"=>"Montenegro", "code"=>"ME"),
						array("name"=>"Madagascar", "code"=>"MG"),
						array("name"=>"Marshall Islands", "code"=>"MH"),
						array("name"=>"Macedonia", "code"=>"MK"),
						array("name"=>"Mali", "code"=>"ML"),
						array("name"=>"Myanmar", "code"=>"MM"),
						array("name"=>"Mongolia", "code"=>"MN"),
						array("name"=>"Macao", "code"=>"MO"),
						array("name"=>"Northern Mariana Islands", "code"=>"MP"),
						array("name"=>"Martinique", "code"=>"MQ"),
						array("name"=>"Mauritania", "code"=>"MR"),
						array("name"=>"Montserrat", "code"=>"MS"),
						array("name"=>"Malta", "code"=>"MT"),
						array("name"=>"Mauritius", "code"=>"MU"),
						array("name"=>"Maldives", "code"=>"MV"),
						array("name"=>"Malawi", "code"=>"MW"),
						array("name"=>"Mexico", "code"=>"MX"),
						array("name"=>"Malaysia", "code"=>"MY"),
						array("name"=>"Mozambique", "code"=>"MZ"),
						array("name"=>"Namibia", "code"=>"NA"),
						array("name"=>"New Caledonia", "code"=>"NC"),
						array("name"=>"Niger", "code"=>"NE"),
						array("name"=>"Norfolk Island", "code"=>"NF"),
						array("name"=>"Nigeria", "code"=>"NG"),
						array("name"=>"Nicaragua", "code"=>"NI"),
						array("name"=>"Netherlands", "code"=>"NL"),
						array("name"=>"Norway", "code"=>"NO"),
						array("name"=>"Nepal", "code"=>"NP"),
						array("name"=>"Nauru", "code"=>"NR"),
						array("name"=>"Niue", "code"=>"NU"),
						array("name"=>"New Zealand", "code"=>"NZ"),
						array("name"=>"Oman", "code"=>"OM"),
						array("name"=>"Panama", "code"=>"PA"),
						array("name"=>"Peru", "code"=>"PE"),
						array("name"=>"French Polynesia", "code"=>"PF"),
						array("name"=>"Papua New Guinea", "code"=>"PG"),
						array("name"=>"Philippines", "code"=>"PH"),
						array("name"=>"Pakistan", "code"=>"PK"),
						array("name"=>"Poland", "code"=>"PL"),
						array("name"=>"Saint Pierre and Miquelon", "code"=>"PM"),
						array("name"=>"Pitcairn", "code"=>"PN"),
						array("name"=>"Puerto Rico", "code"=>"PR"),
						array("name"=>"Palestinian Territory", "code"=>"PS"),
						array("name"=>"Portugal", "code"=>"PT"),
						array("name"=>"Palau", "code"=>"PW"),
						array("name"=>"Paraguay", "code"=>"PY"),
						array("name"=>"Qatar", "code"=>"QA"),
						array("name"=>"Reunion", "code"=>"RE"),
						array("name"=>"Romania", "code"=>"RO"),
						array("name"=>"Serbia", "code"=>"RS"),
						array("name"=>"Russian Federation", "code"=>"RU"),
						array("name"=>"Rwanda", "code"=>"RW"),
						array("name"=>"Saudi Arabia", "code"=>"SA"),
						array("name"=>"Solomon Islands", "code"=>"SB"),
						array("name"=>"Seychelles", "code"=>"SC"),
						array("name"=>"Sudan", "code"=>"SD"),
						array("name"=>"Sweden", "code"=>"SE"),
						array("name"=>"Singapore", "code"=>"SG"),
						array("name"=>"Saint Helena", "code"=>"SH"),
						array("name"=>"Slovenia", "code"=>"SI"),
						array("name"=>"Svalbard and Jan Mayen", "code"=>"SJ"),
						array("name"=>"Slovakia", "code"=>"SK"),
						array("name"=>"Sierra Leone", "code"=>"SL"),
						array("name"=>"San Marino", "code"=>"SM"),
						array("name"=>"Senegal", "code"=>"SN"),
						array("name"=>"Somalia", "code"=>"SO"),
						array("name"=>"Suriname", "code"=>"SR"),
						array("name"=>"Sao Tome and Principe", "code"=>"ST"),
						array("name"=>"El Salvador", "code"=>"SV"),
						array("name"=>"Syrian Arab Republic", "code"=>"SY"),
						array("name"=>"Swaziland", "code"=>"SZ"),
						array("name"=>"Turks and Caicos Islands", "code"=>"TC"),
						array("name"=>"Chad", "code"=>"TD"),
						array("name"=>"French Southern Territories", "code"=>"TF"),
						array("name"=>"Togo", "code"=>"TG"),
						array("name"=>"Thailand", "code"=>"TH"),
						array("name"=>"Tajikistan", "code"=>"TJ"),
						array("name"=>"Tokelau", "code"=>"TK"),
						array("name"=>"Timor-Leste", "code"=>"TL"),
						array("name"=>"Turkmenistan", "code"=>"TM"),
						array("name"=>"Tunisia", "code"=>"TN"),
						array("name"=>"Tonga", "code"=>"TO"),
						array("name"=>"Turkey", "code"=>"TR"),
						array("name"=>"Trinidad and Tobago", "code"=>"TT"),
						array("name"=>"Tuvalu", "code"=>"TV"),
						array("name"=>"Taiwan", "code"=>"TW"),
						array("name"=>"Tanzania", "code"=>"TZ"),
						array("name"=>"Ukraine", "code"=>"UA"),
						array("name"=>"Uganda", "code"=>"UG"),
						array("name"=>"United States Minor Outlying Islands", "code"=>"UM"),
						array("name"=>"United States", "code"=>"US"),
						array("name"=>"Uruguay", "code"=>"UY"),
						array("name"=>"Uzbekistan", "code"=>"UZ"),
						array("name"=>"Holy See (Vatican City State)", "code"=>"VA"),
						array("name"=>"Saint Vincent and the Grenadines", "code"=>"VC"),
						array("name"=>"Venezuela", "code"=>"VE"),
						array("name"=>"Virgin Islands", "code"=>"VG"),
						array("name"=>"Virgin Islands", "code"=>"VI"),
						array("name"=>"Vietnam", "code"=>"VN"),
						array("name"=>"Vanuatu", "code"=>"VU"),
						array("name"=>"Wallis and Futuna", "code"=>"WF"),
						array("name"=>"Samoa", "code"=>"WS"),
						array("name"=>"Yemen", "code"=>"YE"),
						array("name"=>"Mayotte", "code"=>"YT"),
						array("name"=>"South Africa", "code"=>"ZA"),
						array("name"=>"Zambia", "code"=>"ZM"),
						array("name"=>"Zimbabwe", "code"=>"ZW")
					);
					foreach($countries as $country){
						if($ClientInfo['hosting_client_country']==$country['code']){
							echo $country['name'];
						}
					}
				?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['city'];?>:</b> <?php echo $ClientInfo['hosting_client_city'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['postal_code'];?>:</b> <?php echo $ClientInfo['hosting_client_pcode'];?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['ip_address'];?>:</b> <?php echo UserInfo::get_ip();?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['device_type'];?>:</b> <?php echo UserInfo::get_device();?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['device_os'];?>:</b> <?php echo UserInfo::get_os();?></h6>
			</div>
			<div class="col-md-6">
				<h6 class="mb-0"><b><?php echo $text['web_browser'];?>:</b> <?php echo UserInfo::get_browser();?></h6>
			</div>
			<div class="col-md-12">
				<a href="mysettings.php" class="btn m5t btn-sm btn-primary"><?php echo $text['update_porfile'];?></a>
				<a href="https://en.gravatar.com/" target="_blank" class="btn m5t btn-sm btn-secondary"><?php echo $text['update_image'];?></a>
			</div>
		</div>
	</div>
</div>
