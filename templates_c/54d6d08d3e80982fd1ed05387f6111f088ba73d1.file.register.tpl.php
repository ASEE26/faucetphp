<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 05:59:46
         compiled from "template/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7504167035ab0c64f548f31-95205401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d6d08d3e80982fd1ed05387f6111f088ba73d1' => 
    array (
      0 => 'template/register.tpl',
      1 => 1522065340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7504167035ab0c64f548f31-95205401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c64fdbd103_00925912',
  'variables' => 
  array (
    'rep' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c64fdbd103_00925912')) {function content_5ab0c64fdbd103_00925912($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<!-- ///// Start Banner Section Gradient //// -->
  <div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                  Open Account!
              </h1>
                <p>
                  You can open your account here.              
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
          <h3 class="panel-title">
            
          </h3>
        </div>




        <div class="panel-body">

            <?php if ($_smarty_tpl->tpl_vars['rep']->value) {?>
                <div class="alert alert-danger text-center" role="alert">
                  The inserted <strong>username</strong> 
                  or <strong>cryptocoin address</strong> 
                  already exists in our database
                </div>
                
            <?php }?>



            <?php echo '<script'; ?>
 type="text/javascript">
             function checkform() {
             
            var address = document.regform.address.value;

            if (address == "") {
            return true;
            } else if (address.length <= 15 )
            {
                alert('Crypto address is not correct ');
            return false;

            }
             if(/^[a-zA-Z0-9- ]*$/.test(address) == false) {
                alert('Crypto address is not correct ');
            return false;
            } 
            }
             
            <?php echo '</script'; ?>
>


            <form method="post" name="regform" onsubmit="return checkform()">
              <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" class="form-control" placeholder="Your Username">
              </div>
              
              
              <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Your Password">
              </div>
              
              
              <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control" placeholder="Your address">
              </div>
              
              
              <div class="form-group">
                <label>Asmoney username</label>
                <input name="ausername" type="text" class="form-control" placeholder="Your Asmoney address">
              </div>
              
              
              <button type="submit" name="register" class="btn btn-success">
              Register
            </button>

            </form>


         </div>
      </div>
  
  </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
