<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-27 15:37:13
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11774843965ab0c55c0abf06-93710446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55ab8c775f6112f46609121c7799f06e5327965' => 
    array (
      0 => 'template/index.tpl',
      1 => 1522114029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11774843965ab0c55c0abf06-93710446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c55c318f43_40523773',
  'variables' => 
  array (
    'notlogged' => 0,
    'prize' => 0,
    'curency' => 0,
    'capt' => 0,
    'timer' => 0,
    'captcha' => 0,
    'timer_amount' => 0,
    'with' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c55c318f43_40523773')) {function content_5ab0c55c318f43_40523773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<!-- ///// Start Banner Section Gradient //// -->
	<div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                	Welcome to SuperiorCoin's Faucet!
            	</h1>
                <p>
                	Stay in our website to win and claim more money.            	
                </p>
                <!--
                <p>
                	<a class="btn btn-lg btn-outline-light" href="#" role="button">
                	Learn more
                	</a>
                </p>
            	-->
          </div>
          

        </div><!-- row -->
      </div><!-- container -->
      <!-- ///// End Banner Section Gradient //// -->



<div class="row">

		
		<Div class="col-lg-5 mx-auto text-center">

			<h3>Earn Free SuperiorCoin's</h3>
			
			<?php if (!$_smarty_tpl->tpl_vars['notlogged']->value) {?>
				<br>
				<?php if ($_smarty_tpl->tpl_vars['prize']->value) {?>
					<div class="alert alert-success">
						You have won <?php echo $_smarty_tpl->tpl_vars['prize']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['curency']->value;?>

					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['capt']->value) {?>
					<div class="alert alert-danger">
						You have won entered wrong captcha
					</div>
				<?php }?>
			
				<?php if (!$_smarty_tpl->tpl_vars['timer']->value) {?>
				<form action="" method="post" class="text-center mx-auto">
					<Div class="text-center">
						<Div class="mx-auto text-center"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</Div>
					</Div>
					<br>
					<Div class="text-center">
						<Div class=" text-center"> 
						<button type="submit" name="claim" class="btn btn-success btn-block">Claim</button>
						</Div>    
					</Div>
				</form>   
				<?php } else { ?>            
					<div class="alert alert-info">
						You can get a reward again in 
						<div data-date="<?php echo $_smarty_tpl->tpl_vars['timer_amount']->value;?>
" class="timer btn btn-warning">
							
						</div>
					</div>              
					
					<?php echo '<script'; ?>
>           
						$('.timer').each(function(index, element) {	
							var diff=$(this).data('date');	
							var tth=$(this);	
							if(diff>0){	
								var minutes = Math.floor(diff / 60);	
								var seconds = diff - minutes * 60;	
								var interval=setInterval(function() {		
									if(seconds == 0) {			
										if(minutes == 0) {				
											location.reload();			
										}else{				
											minutes--;				
											seconds = 60;			
										}		
									}		
									if(minutes > 0){			
										var minute_text = minutes + ':';									
									}else{ 			
										var minute_text = '';		
									}		
									tth.html(minute_text + seconds);		
									seconds--;	
								}, 
								1000);	
							}});               
					<?php echo '</script'; ?>
>                                                        
				<?php }?>
				
			<?php } else { ?>
				<br>
				<div class="alert alert-info">
					You are not logged in, Earn free SuperiorCoin's by 
					<a href="register.php">opening account</a>
				</div>
			<?php }?>
			<table class="table table-striped">  
				<thead>    
					<tr>      
						<th colspan="3">Link</th>      
					</tr>    
				</thead>  
					<tbody>          
					<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>            
						<tr>      
							<td colspan="3">
								<a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['foo']->value['link'];?>
</a>
							</td>      
						</tr>    
					<?php } ?>                  
				</tbody>
			</table>

		</Div>


	</div>



			
	


	
	<!-- ///// Start Widget SuperiorCoin Cureency //// -->	
	<div class="row py-5">
        <div class="col-lg-6 mx-auto">
          <?php echo '<script'; ?>
 type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"><?php echo '</script'; ?>
>
        <div class="coinmarketcap-currency-widget" data-currencyid="2522" data-base="USD"  data-secondary="BTC"></div>
          
        </div>  
        
      </div>
      <!-- ///// End Widget SuperiorCoin Cureency //// -->	




<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
