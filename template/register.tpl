{include file='template/header.tpl'}





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

            {if $rep}
                <div class="alert alert-danger text-center" role="alert">
                  The inserted <strong>username</strong> 
                  or <strong>cryptocoin address</strong> 
                  already exists in our database
                </div>
                
            {/if}



            <script type="text/javascript">
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
             
            </script>


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




{include file='template/footer.tpl'}