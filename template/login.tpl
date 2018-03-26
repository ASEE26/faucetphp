{include file='template/header.tpl'}




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

          {if $invalid}
          <div class="row">
              <div class="col-md-12">
                  <div class="alert alert-danger text-center" role="alert">
                  The enetered username / password is wrong
                  </div>
              </div>
          </div>
          {/if}


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




{include file='template/footer.tpl'}