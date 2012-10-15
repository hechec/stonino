
<html>
    <head>
        <title> <?php echo $title; ?> </title>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/main.css"></link>
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/home.css"></link> 
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/events.css"></link>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/stonino.js" ></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js'></script>
	
    </head>
    <style>
       
    </style>
    <header class="header">
    	<div class="content"> 
    		<div class="header-title">
    			<p>STO. NINO CHURCH RECORD SYSTEM</p>
    			<div class="header-nav">
	    			<ul class="links">
						<li class=""><?php echo anchor('home', 'Home') ?></li>
						<li class=""><?php echo anchor('search', 'Records') ?></li>
						<li class=""><?php echo anchor('events', 'Events') ?></li>
						<li class=""><?php echo anchor('charts', 'Statistics') ?></li>
					</ul>
	    		</div>
    		</div>
    		
    		<div class="right-header">
    			<div class="login-area">
    				<?php $this->load->view('forms/login.php') ?>
    			</div>
	    		
	    	</div>
    	</div>
    </header>    
    <div class="wrapper">
    	<?php echo $body; ?>
   	</div>
    <footer class="footer">
    	<div class="content">
    		<div class="line-border">&copy; 2012 Sto. Nino Church</div>
        </div>
    </footer>
   
</html>