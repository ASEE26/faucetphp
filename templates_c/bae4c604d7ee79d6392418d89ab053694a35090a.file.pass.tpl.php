<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 05:52:31
         compiled from "template/pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:764677365ab13a427ecb86-65085789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae4c604d7ee79d6392418d89ab053694a35090a' => 
    array (
      0 => 'template/pass.tpl',
      1 => 1522064925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '764677365ab13a427ecb86-65085789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab13a4286da31_26595697',
  'variables' => 
  array (
    'wrong' => 0,
    'succ' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab13a4286da31_26595697')) {function content_5ab13a4286da31_26595697($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<!-- ///// Start Banner Section Gradient //// -->
  <div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                  Change Password!
              </h1>
                <p>
                  You can change your password here.              
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
          <?php if ($_smarty_tpl->tpl_vars['wrong']->value) {?>
          <div class="alert alert-danger">
            Entered current password is wrong.
          </div>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['succ']->value) {?>
          <div class="alert alert-success">
            Password changed.
          </div>
          <?php }?>



            <div>


                <form action="" method="post">

                  <div class="form-group">
                    <label>Current password</label>
                    <input name="prepass" type="password" class="form-control" placeholder="Your Current password">
                  </div>
                  
                  <div class="form-group">
                    <label>New password</label>
                    <input name="newpassword" type="password" class="form-control" placeholder="Your New Password">
                  </div>


                  <button type="submit" name="register" class="btn btn-success">Change</button>

                </form>


            </div>



        </div>
      </div>

  </div>
</div><!-- row -->





<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
