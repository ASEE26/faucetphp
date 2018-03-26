{include file='template/header.tpl'}




  <!-- ///// Start Banner Section Gradient //// -->
  <div class="container-fluid py-5">
        <div class="row gradient-bg">
          
          
          <div class="col-lg-8 text-center text-light mx-auto ">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                  Donate
              </h1>
                <p>
                  Donate and Advertise.             
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

        
        {if $ed}
          <div class="alert alert-danger text-center" role="alert">
          There was an error in your payment.
          </div>
        {/if}

        {if $sd}
          <div class="alert alert-success text-center" role="alert">
            Your donation was successfull
          </div>
        {/if}


        {if $spengingd}
          <div class="alert alert-success text-center" role="alert">
            Your donation in in pending mode.
          </div>
        {/if}



        <table class="table table-striped">
          <thead>
            <tr>
              <th>Amount</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
            </thead>
          <tbody>  
            
            {foreach from=$with item=foo}
            
            
            <tr>
              <td>{$foo['amount']}</td>
              <td>{$foo['date']}</td>
              <td>
              {if $foo['status']==0}
              
              	<div class="label label-warning">Pending</div>
              
              
              
              {elseif $foo['status']==1}
              
              	<div class="label label-success">Success</div>
              
              {elseif $foo['status']==2}
              
              	<div class="label label-success">Active in Play </div>
              
              
              
              
              
              
              {/if}
              
              
              
              </td>
            </tr>
            {/foreach}
            
            
            
            
          </tbody>
        </table>

        <div class="panel-body">
            {if $over}
            <div class="alert alert-danger">
              You have asked more than in your account
            </div>
            {/if}
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
              <input type="text" class="form-control" name="PAYMENT_AMOUNT" placeholder="Amount to withdrawal" value="{$dmin}">
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



        </Div>
      </div>








{include file='template/footer.tpl'}