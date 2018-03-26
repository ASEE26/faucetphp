<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 06:34:26
         compiled from "template/referral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7737750765ab13a398e9363-65716852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17771a8f92f5eda6e9e9edd66c6238ba745c3b9' => 
    array (
      0 => 'template/referral.tpl',
      1 => 1522067223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7737750765ab13a398e9363-65716852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab13a39949985_10944230',
  'variables' => 
  array (
    'rfp' => 0,
    'uid' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab13a39949985_10944230')) {function content_5ab13a39949985_10944230($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




	<!-- ///// Start Banner Section Gradient //// -->
	<div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                	Referral
            	</h1>
                <p>
                	Referral Summary            	
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
			<Div class="col-lg-9 mx-auto py-5">


				<Div class="well">
				Earn <?php echo $_smarty_tpl->tpl_vars['rfp']->value;?>
% referral bonus! Share your referral URL:<br>
				http://www.link.com/?r=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>

				</Div>


				<Div class="alert alert-success">
					You have total referral of : <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 user(s)
				</Div>

			</Div>
		</div>




<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
