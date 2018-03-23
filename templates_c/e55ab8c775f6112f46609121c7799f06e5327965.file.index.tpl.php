<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 02:25:00
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11774843965ab0c55c0abf06-93710446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55ab8c775f6112f46609121c7799f06e5327965' => 
    array (
      0 => 'template/index.tpl',
      1 => 1521534122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11774843965ab0c55c0abf06-93710446',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c55c318f43_40523773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c55c318f43_40523773')) {function content_5ab0c55c318f43_40523773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="blue">
	<div class="container">
		<div class="row"><h3>Earn Free CryptoCurrency</h3></div><!-- /row -->	 
	</div> <!-- /container -->	
</div>	

<div class="navbar navbar-default">
	<div class="row">
		<div class="col-md-2 text-center" style="width:135px;">	
			<div style="background-color:#B0B0B0; width:120px; height:600px;">A</div>
		</div>
		<Div class="col-md-9">
			<Div class="row text-center">
				<div style="background-color:#B0B0B0; width:768px; height:90px;margin-left:auto; margin-right:auto;">A</div>
			</Div>
			<?php if (!$_smarty_tpl->tpl_vars['notlogged']->value) {?>
			<br><?php if ($_smarty_tpl->tpl_vars['prize']->value) {?><div class="alert alert-success">You have won <?php echo $_smarty_tpl->tpl_vars['prize']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['curency']->value;?>
</div><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['capt']->value) {?><div class="alert alert-danger">You have won entered wrong captcha</div><?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['timer']->value) {?>
			<form action="" method="post">
				<Div class="row text-center">
					<Div class="col-md-5 col-md-push-3 text-center"><?php echo $_smarty_tpl->tpl_vars['captcha']->value;?>
</Div>
				</Div>
				<br>
				<Div class="row text-center">
					<Div class="col-md-5 col-md-push-3 text-center"> 
					<button type="submit" name="claim" class="btn btn-success btn-block">Claim</button>
					</Div>    
				</Div></form>   
				<?php } else { ?>            
				<div class="alert alert-info">You can get a reward again in <div data-date="<?php echo $_smarty_tpl->tpl_vars['timer_amount']->value;?>
" class="timer btn btn-warning"></div></div>              <?php echo '<script'; ?>
>           $('.timer').each(function(index, element) {	var diff=$(this).data('date');	var tth=$(this);	if(diff>0){	var minutes = Math.floor(diff / 60);	var seconds = diff - minutes * 60;	var interval=setInterval(function() {		if(seconds == 0) {			if(minutes == 0) {				location.reload();			}else{				minutes--;				seconds = 60;			}		}		if(minutes > 0){			var minute_text = minutes + ':';									}else{ 			var minute_text = '';		}		tth.html(minute_text + seconds);		seconds--;	}, 1000);	}});               <?php echo '</script'; ?>
>                                                        	<?php }
} else { ?><br><div class="alert alert-info">You are not logged in, Earn free Bitcoin by <a href="register.php">opening account</a></div><?php }?><table class="table table-striped">  <thead>    <tr>      <th colspan="3">Link</th>      </tr>    </thead>  <tbody>          <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>            <tr>      <td colspan="3"><a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['foo']->value['link'];?>
</a></td>      </tr>    <?php } ?>                  </tbody></table></Div><div class="col-md-2 text-center" style="width:135px;">	<div style="background-color:#B0B0B0; width:120px; height:600px;">B</div></div></div>

<div class="row">
  <div class="col-lg-4 exp"><h4 class="centered">How Earn Free Bitcoin?</h4>
		<p>
			just solve the captcha to verify you are a human and then press the submit button. every (Interval) minutes you will get up to (Prize) satoshi absolutely free. and if you like our free bitcoin faucet don't forget to share it with your friends as we offer (Number)% referral bonus for each dispense anyone with your referral code makes
		</p>
  </div>
  <div class="col-lg-4 exp"><h4 class="centered">What is PHPFaucet?</h4>
		<p>
			PHPFaucet is an OpenSource software to run faucet for cryptocoins like Bitcoin, Dogecoin, Litecoin, Darkcoin and Peercoin. 
		</p>
  </div>
  <div class="col-lg-4 exp"><h4 class="centered">Payments</h4>
		<p>
			Our Faucet payment handle through AsMoney, its a Bitcoin wallet support micro payments. You can withdrawal any balance to your AsMoney account because there is no fees for transferring funds between 
AsMoney account, to withdrawal your balance into cryptocoin address	you need to have (min-amount) and pay a little fee. 		
		</p>
  </div>
  </div>

<div class="clearfix"></div></div>
<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
