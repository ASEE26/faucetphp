<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-24 15:44:48
         compiled from "template/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3821374065ab0c55c3d2af7-72958645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84c9eac503738ff27933fbd524327d07b9b240e7' => 
    array (
      0 => 'template/header.tpl',
      1 => 1521927880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3821374065ab0c55c3d2af7-72958645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c55c3e07a2_27841461',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c55c3e07a2_27841461')) {function content_5ab0c55c3e07a2_27841461($_smarty_tpl) {?><html>
<head>    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <title>Faucet</title>    
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">    
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap-theme.css">  
	<link rel="stylesheet" type="text/css" href="style/css/font-awesome.css">    
	<link rel="stylesheet" type="text/css" href="style/css/style.css">	
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="style/javascript/jquery-1.11.2.min.js">
		
	<?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="style/javascript/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<nav class="navbar navbar-pro navbar-fixed-top">	
		<div class="container">            
			<div class="navbar-header">          
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

			<span class="sr-only">Toggle navigation</span>            
			<span class="icon-bar"></span>           
			 <span class="icon-bar"></span>            
			 <span class="icon-bar"></span>          
			</button>          
			<a class="navbar-brand" href="#">First Faucet</a>       
			 </div>                
			 <div id="navbar" class="collapse navbar-collapse">          <ul class="nav navbar-nav">            
			 	<li><a href="index.php">Home</a></li>                                    
			 	<?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>            
			 	<li><a href="login.php">Login</a></li>            
			 	<li><a href="register.php">Register</a></li>			
			 	<li><a href="howto.php">How It works?</a></li>            <?php } else { ?>                        
			 	<li><a href="withdrawal.php">Withdrawal</a></li>

			 	<li><a href="donate.php">Donate</a></li>                        <li><a href="referral.php">Referral</a></li>                        
			 	<li><a href="pass.php">Change Password</a></li>                                      
			 	<li><a href="logout.php">Logout</a></li>                                                                                    
			 <?php }?>                                                                                                                      </ul>        
			</div><!--/.nav-collapse -->	
		</div>
		</nav>
		<div class="container"><?php }} ?>
