{include file='template/header.tpl'}



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
				Earn {$rfp}% referral bonus! Share your referral URL:<br>
				http://www.link.com/?r={$uid}
				</Div>


				<Div class="alert alert-success">
					You have total referral of : {$count} user(s)
				</Div>

			</Div>
		</div>




{include file='template/footer.tpl'}