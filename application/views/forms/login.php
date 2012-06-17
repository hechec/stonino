
<?php if($loginstatus === TRUE){ ?> 
	<p class="welcome">
		Welcome <?php echo $this->session->userdata('username').' ('.$this->session->userdata('usertype').')'; ?> 
		<span><?php echo anchor('forms/loginForm/logout', 'Logout') ?></span>
	</p>
<?php } else{?>
	<?php echo form_open('forms/loginForm/validate_credentials'); ?>
	<span>Username: <input id="" class="input" name="username" type="text" spellcheck="false" autocomplete="off"></span>
	<span class="password-span">Password: <input id="" name="password" class="input" type="password" spellcheck="false" autocomplete="off"></span>   			
	<?php echo form_submit(array('class'=>'login-btn', 'value'=> 'LOG IN' ))?>
	<?php echo form_close(); ?>
<?php } ?>