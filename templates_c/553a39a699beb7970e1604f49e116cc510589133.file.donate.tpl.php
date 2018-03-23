<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-20 10:43:35
         compiled from "template/donate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7760732045ab13a3735c2e2-32520174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553a39a699beb7970e1604f49e116cc510589133' => 
    array (
      0 => 'template/donate.tpl',
      1 => 1521534122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7760732045ab13a3735c2e2-32520174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ed' => 0,
    'sd' => 0,
    'spengingd' => 0,
    'with' => 0,
    'foo' => 0,
    'over' => 0,
    'dmin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab13a3742f665_18346082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab13a3742f665_18346082')) {function content_5ab13a3742f665_18346082($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="blue"><div class="container"><div class="row"><h3>Donate and Advertise.</h3></div><!-- /row --></div> <!-- /container -->	</div>


<div class="panel panel-default">
<div class="panel-heading"><h3 class="panel-title">Donate</h3>
</div>
  



<?php if ($_smarty_tpl->tpl_vars['ed']->value) {?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger text-center" role="alert">
        There was an error in your payment.
        </div>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sd']->value) {?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success text-center" role="alert">
        Your donation was successfull
        </div>
    </div>
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['spengingd']->value) {?>
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success text-center" role="alert">
        Your donation in in pending mode.
        </div>
    </div>
</div>
<?php }?>











<table class="table table-striped">
  <thead>
    <tr>
      <th>Amount</th>
      <th>Date</th>
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
      <td>
      <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==0) {?>
      
      	<div class="label label-warning">Pending</div>
      
      
      
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
      
      	<div class="label label-success">Success</div>
      
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
      
      	<div class="label label-success">Active in Play </div>
      
      
      
      
      
      
      <?php }?>
      
      
      
      </td>
    </tr>
    <?php } ?>
    
    
    
    
  </tbody>
</table>

<div class="panel-body">
<?php if ($_smarty_tpl->tpl_vars['over']->value) {?>
<div class="alert alert-danger">You have asked more than in your account</div>
<?php }?>
<div class="row">







<div class="col-md-3 pull-right">
<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">
  Send a donate
</button>
</div>
</div>









  </div>
</div>










<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  
  <form action="" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Request a withdrawal</h4>
      </div>
      <div class="modal-body">
       
       
    
    
    
    
 <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="text" class="form-control" name="PAYMENT_AMOUNT" placeholder="Amount to withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['dmin']->value;?>
">
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Your link to show in index</label>
    <input type="url" class="form-control" name="link" placeholder="Link">
  </div>








      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save changes</button>
      </div>
    </div>
    
    </form>
    
  </div>
</div>








<br>

<?php echo $_smarty_tpl->getSubTemplate ('template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
