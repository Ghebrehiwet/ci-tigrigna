<?php
	// gig/add.php
	$this->load->view( $this->config->item('theme') . 'header');
	
	echo '<h2>ፊደል ወስኽ</h2>';
?>
	 <a href="<?php echo site_url('letter/addhelp') ?>">መብርሂ</a>.
	
		
<?php	
	echo validation_errors();
	
	echo form_open('letter/insert');
	
	echo '<div class="form-horizontal">';
	
	/**
	 * Fields for form:
		GigTitle
		GigNumber
		Term
		Type
		Description
		Responsibilities
		Requirements
		PayRate
		CompanyName
		CompanyURL
		CompanyLogoURL
		ContactName
		ContactPhone
		ContactEmail
		ClosingDate
		SpecialInstructions
	 */
	
	$FirstFidel = array(
		'name' => 'FirstFidel',
		'id' => 'FirstFidel',
		'value' => set_value('FirstFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ቀዳማይ ፊደል', 'FirstFidel') . '</div><div class="col-sm-10">';
	echo form_input($FirstFidel) . '</div></div>';
	
	$SecondFidel = array(
		'name' => 'SecondFidel',
		'id' => 'SecondFidel',
		'value' => set_value('SecondFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ካልኣይ ፊደል', 'SecondFidel') . '</div><div class="col-sm-10">';
	echo form_input($SecondFidel) . '</div></div>';
	
	$ThirdFidel = array(
		'name' => 'ThirdFidel',
		'id' => 'ThirdFidel',
		'value' => set_value('ThirdFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ሳልሳይ ፊደል', 'ThirdFidel') . '</div><div class="col-sm-10">';
	echo form_input($ThirdFidel) . '</div></div>';
	
	$FourthFidel = array(
		'name' => 'FourthFidel',
		'id' => 'FourthFidel',
		'value' => set_value('FourthFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ራብዓይ ፊደል', 'FourthFidel') . '</div><div class="col-sm-10">';
	echo form_input($FourthFidel) . '</div></div>';
	
	
	$FifthFidel = array(
		'name' => 'FifthFidel',
		'id' => 'FifthFidel',
		'value' => set_value('FifthFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ሓሙሻይ ፊደል', 'FifthFidel') . '</div><div class="col-sm-10">';
	echo form_input($FifthFidel) . '</div></div>';
	
	
	$SixthFidel = array(
		'name' => 'SixthFidel',
		'id' => 'SixthFidel',
		'value' => set_value('SixthFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ሻዱሻይ ፊደል', 'SixthFidel') . '</div><div class="col-sm-10">';
	echo form_input($SixthFidel) . '</div></div>';
	
	
	$SeventhFidel = array(
		'name' => 'SeventhFidel',
		'id' => 'SeventhFidel',
		'value' => set_value('SeventhFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ሻቡዓይ ፊደል', 'SeventhFidel') . '</div><div class="col-sm-10">';
	echo form_input($SeventhFidel) . '</div></div>';
	
	
	$SoundFidel = array(
		'name' => 'SoundFidel',
		'id' => 'SoundFidel',
		'value' => set_value('SoundFidel', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('ኣደማምጻ ፊደል', 'SoundFidel') . '</div><div class="col-sm-10">';
	echo form_input($SoundFidel) . '</div></div>';
	
	/*$Term = array(
		'name' => 'Term',
		'id' => 'Term',
		'value' => set_value('Term', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Tax Term', 'Term') . '</div><div class="col-sm-10">';
	echo form_input($Term) . '</div></div>';*/
	
	/*$Term = array(
                  'Contract'  => 'Contract',
                  'Temporary'    => 'Temporary',
                  'Permanent'   => 'Permanent',
                );
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Tax Term', 'Term') . '</div><div class="col-sm-10">';
	echo form_dropdown('Term', $Term) . '</div></div>';
	
	
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Start Date in YY-MM-DD format', 'StartDate') . '</div><div class="col-sm-10">';
	echo '<input type="date" name="StartDate" id="StartDate" value="' . $this->input->post('StartDate') . '" /></div></div>';
	
	
	
	$Responsibilities = array(
		'name' => 'Responsibilities',
		'id' => 'Responsibilities',
		'value' => set_value('Responsibilities', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Responsibilities', 'Responsibilities') . '</div><div class="col-sm-10">';
	echo form_textarea($Responsibilities) . '</div></div>';
	
	$Requirements = array(
		'name' => 'Requirements',
		'id' => 'Requirements',
		'value' => set_value('Requirements', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Qualifications', 'Requirements') . '</div><div class="col-sm-10">';
	echo form_textarea($Requirements) . '</div></div>';
	
	
	$PayRate = array(
		'name' => 'PayRate',
		'id' => 'PayRate',
		'value' => set_value('PayRate', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Pay Rate', 'PayRate') . '</div><div class="col-sm-10">';
	echo form_input($PayRate) . '</div></div>';
	
	$CompanyName = array(
		'name' => 'CompanyName',
		'id' => 'CompanyName',
		'value' => set_value('CompanyName', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Company Name', 'CompanyName') . '</div><div class="col-sm-10">';
	echo form_input($CompanyName) . '</div></div>';
	
	$CompanyURL = array(
		'name' => 'CompanyURL',
		'id' => 'CompanyURL',
		'value' => set_value('CompanyURL', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Company URL', 'CompanyURL') . '</div><div class="col-sm-10">';
	echo form_input($CompanyURL) . '</div></div>';
	
	$CompanyLogoURL = array(
		'name' => 'CompanyLogoURL',
		'id' => 'CompanyLogoURL',
		'value' => set_value('CompanyLogoURL', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Company Logo URL', 'CompanyLogoURL') . '</div><div class="col-sm-10">';
	echo form_input($CompanyLogoURL) . '</div></div>';
	
	$ContactName = array(
		'name' => 'ContactName',
		'id' => 'ContactName',
		'value' => set_value('ContactName', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Contact Name', 'ContactName') . '</div><div class="col-sm-10">';
	echo form_input($ContactName) . '</div></div>';
	
	$ContactEmail = array(
		'name' => 'ContactEmail',
		'id' => 'ContactEmail',
		'value' => set_value('ContactEmail', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Contact Email', 'ContactEmail') . '</div><div class="col-sm-10">';
	echo form_input($ContactEmail) . '</div></div>';
	
	$ContactPhone = array(
		'name' => 'ContactPhone',
		'id' => 'ContactPhone',
		'value' => set_value('ContactPhone', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Contact Phone', 'ContactPhone') . '</div><div class="col-sm-10">';
	echo form_input($ContactPhone) . '</div></div>';
	
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Closing Date in YY-MM-DD format', 'ClosingDate') . '</div><div class="col-sm-10">';
	echo '<input type="date" name="ClosingDate" id="ClosingDate" value="' . $this->input->post('ClosingDate') . '" /></div></div>';
	
	$SpecialInstructions = array(
		'name' => 'SpecialInstructions',
		'id' => 'SpecialInstructions',
		'value' => set_value('SpecialInstructions', ''),
	);
	echo '<div class="form-group"><div class="col-sm-2">' . form_label('Special Instructions', 'SpecialInstructions') . '</div><div class="col-sm-10">';
	echo form_textarea($SpecialInstructions) . '</div></div>';
	
	*/
	
	echo form_submit('submit', 'ጠውቕ ፨ ስደድ');
	
	echo '</div>';
	
	echo form_close();
	
	$this->load->view( $this->config->item('theme') . 'footer');