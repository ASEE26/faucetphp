<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 06:03:11
         compiled from "template/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19601339955ab0c572db20d0-60863741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8922b9d876790c94ae7d7fcb920d2fe4f0aa534' => 
    array (
      0 => 'template/login.tpl',
      1 => 1522065788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19601339955ab0c572db20d0-60863741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c572eadbe6_61939067',
  'variables' => 
  array (
    'invalid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c572eadbe6_61939067')) {function content_5ab0c572eadbe6_61939067($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>





<!-- ///// Start Banner Section Gradient //// -->
  <div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                  Login Account!
              </h1>
                <p>
                  Login to your account here.              
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
  <div class="col-lg-4 mx-auto">



    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"></h3>
      </div>


      <div class="panel-body">

          <?php if ($_smarty_tpl->tpl_vars['invalid']->value) {?>
          <div class="row">
              <div class="col-md-12">
                  <div class="alert alert-danger text-center" role="alert">
                  The enetered username / password is wrong
                  </div>
              </div>
          </div>
          <?php }?>


          <form method="post">
            <div class="form-group">
              <label>Username</label>
              <input name="username" type="text" class="form-control" placeholder="Your Username">
            </div>
            
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control" placeholder="Your Password">
            </div>
            
            <button type="submit" name="register" class="btn btn-success">Login</button>
          </form>

        </div>
    </div>

  </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
