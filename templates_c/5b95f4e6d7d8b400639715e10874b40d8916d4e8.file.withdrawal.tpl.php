<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 06:54:22
         compiled from "template/withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16732686715ab13a2e601954-21378859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b95f4e6d7d8b400639715e10874b40d8916d4e8' => 
    array (
      0 => 'template/withdrawal.tpl',
      1 => 1522068860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16732686715ab13a2e601954-21378859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab13a2e730928_19325717',
  'variables' => 
  array (
    'credit' => 0,
    'curency' => 0,
    'with' => 0,
    'foo' => 0,
    'over' => 0,
    'less' => 0,
    'as_min' => 0,
    'cur_min' => 0,
    'asmoneyexist' => 0,
    'cryptoexist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab13a2e730928_19325717')) {function content_5ab13a2e730928_19325717($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<!-- ///// Start Banner Section Gradient //// -->
  <div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                  Withdrawal!
              </h1>
                <p>
                  Ask for Withdraw              
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
        <div class="col-lg-9 mx-auto">


          <h3 class="panel-title">Withdrawal
            <span class="pull-right">
            <?php echo $_smarty_tpl->tpl_vars['credit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['curency']->value;?>

            </span>
          </h3>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Amount</th>
                <th>Date</th>
                <th>Type</th>
                <th>Status</th>
              </tr>
              </thead>
            <tbody>  
              
              <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
              
              
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['amount'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['date'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['foo']->value['type']==0) {?>Asmoney<?php } else { ?>Currency<?php }?></td>
                <td>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==0) {?>
                
                	<div class="label label-warning">Pending</div>
                
                
                
                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                
                	<div class="label label-success">Paid</div>
                
                
                <?php }?>
                
                
                
                </td>
              </tr>
              <?php } ?>
              
              
              
              
            </tbody>
          </table>


          <?php if ($_smarty_tpl->tpl_vars['over']->value) {?>
            <div class="alert alert-danger">
              You have asked more than in your account
            </div>
          <?php }?>


          <?php if ($_smarty_tpl->tpl_vars['less']->value) {?>
            <div class="alert alert-danger">
              You are trying to withdrawal below the minimum amount.
            </div>
          <?php }?>
        </div>
      </div>





<div class="row">
        <div class="col-lg-9 mx-auto">



<div style="border:1px solid #ccc;padding:15px;margin-right:50px;" class="col-lg-4">
  <h3>Withdraw to AsMoney</h3>

  AsMoney is a bitcoin payment processor that allow us to send micropayments<br>
  
  <br>
  
Withdrawal any amount without minimum<br> Payment will be proceed instantly 
<br>
You can transfer your money to any cryptocoin from AsMoney
<br> 
    If you don't have AsMoney account, create a <a href="https://www.asmoney.com/default.aspx" target="a_blank">new one</a><br>
<br><br><br>
  
<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#asmoney">
  Request a AsMoney withdrawal, minimum is (<?php echo $_smarty_tpl->tpl_vars['as_min']->value;?>
)
</button>

</div>




<div class="col-lg-4" style="border:1px solid #ccc;padding:15px;">
  <h3>Withdraw to coin</h3>You can withdraw balance directly to your crypto address but you need<br><br>your balance should higher than <?php echo $_smarty_tpl->tpl_vars['cur_min']->value;?>
<br> Payment will be proceed with delay<br><br><br><br><br><br>
  
<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">
  Request a coin withdrawal, minimum is (<?php echo $_smarty_tpl->tpl_vars['cur_min']->value;?>
)
</button>

</div>
</div>









  
<?php echo '<script'; ?>
 type="text/javascript">
 function checkasmoney() {
 
var amount = document.asmoney.amount.value;
var wallet = document.asmoney.wallet.value;

if (amount <= 0) {
alert('Amount is incorrect');
return false;

}

if (wallet.length <= 1 ) {
    alert('Please Enter your AsMoney username'); 
    return false;
}

return true;

}

<?php echo '</script'; ?>
>





<div class="modal fade" id="asmoney" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  
    <form action="" method="post" name="asmoney" onsubmit="return checkasmoney()">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Request a withdrawal</h4>
      </div>
      <div class="modal-body">
       
       
       
       
       
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="text" class="form-control" name="amount" placeholder="Amount to withdrawal">
  </div>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['asmoneyexist']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
Your Asmoney account : <?php echo $_smarty_tpl->tpl_vars['asmoneyexist']->value;?>

<?php } else { ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Wallet</label>
    <input type="text" class="form-control" name="wallet" placeholder="Asmoney username">
  </div>
 <?php }?>


       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" value="1" name="asmoney">Submit</button>
      </div>

    </div>
    
    </form>
    
  </div>
</div>




       
      <?php echo '<script'; ?>
 type="text/javascript">
      function checkcoin() {
       
      var address = document.coin.address.value;
      var amount = document.coin.amount.value;


      if (amount <= 0) {
      alert('Amount is incorrect');
      return false;

      }

       if (address.length <= 15 )
      {
          alert('Crypto address is not correct ');
      return false;
      }

      if(/^[a-zA-Z0-9- ]*$/.test(address) == false) {
          alert('Crypto address is not correct ');
      return false;
      } 

      return true;
      }
      <?php echo '</script'; ?>
>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  
  <form action="" method="post" name="coin" onsubmit="return checkcoin()">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Request a withdrawal</h4>
      </div>
      <div class="modal-body">
       
       
        
       
    <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="text" class="form-control" name="amount" placeholder="Amount to withdrawal">
    </div>

    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cryptoexist']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
    Your Crypto address : <?php echo $_smarty_tpl->tpl_vars['cryptoexist']->value;?>

    <?php } else { ?>
      <div class="form-group">
        <label for="exampleInputEmail1">Wallet</label>
        <input type="text" class="form-control" name="address" placeholder="crypto address">
      </div>
     <?php }?>


       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" value="1" name="currency">Submit</button>
      </div>
    </div>
    
    </form>
    
  </div>
</div>







<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
