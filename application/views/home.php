<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<head>
    <style>
        .left-container {
            float: left;
            width: 600px;
            border: 1px #ccc solid;
        }
        .right-container {
            float: right;
            border: 1px #ccc solid;
            width: 300px;
        }
    </style>
</head>
<div>
    
    <div class="left-container">left</div>
    <div class="right-container">
         
        <?php echo form_open('formControllers/loginForm'); ?>

        <h5>Username</h5>
        <input type="text" name="username" value=""  />
         <?php echo form_error('username') ?>  
        <h5>Password</h5>
        <input type="text" name="password" value="" />
         <?php echo form_error('password') ?>  
        <div><input type="submit" value="Submit" /></div>

        </form>        
    </div>
</div>