{include file='template/header.tpl'}





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
          {if $wrong}
          <div class="alert alert-danger">
            Entered current password is wrong.
          </div>
          {/if}

          {if $succ}
          <div class="alert alert-success">
            Password changed.
          </div>
          {/if}



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





{include file='template/footer.tpl'}