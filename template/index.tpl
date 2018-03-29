{include file='template/header.tpl'}

	
	<!-- ///// Start Banner Section Gradient //// -->
	<div class="container-fluid">
        <div class="row gradient-bg py-3">
          
          
          <div class="col-lg-8 text-center text-light mx-auto py-3 my-3">

            <img src="template/assets/images/SuperiorCoinLogo300.png" width="200" alt="">
                <h1 class="text-light">
                	Welcome to SuperiorCoin's Faucet!
            	</h1>
                <p>
                	Stay in our website to win and claim more money.            	
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

		
		<Div class="col-lg-5 mx-auto text-center">

			<h3>Earn Free SuperiorCoin's</h3>
			
			{if !$notlogged}
				<br>
				{if $prize}
					<div class="alert alert-success">
						You have won {$prize} {$curency}
					</div>
				{/if}
				{if $capt}
					<div class="alert alert-danger">
						You have won entered wrong captcha
					</div>
				{/if}
			
				{if !$timer}
				<form action="" method="post" class="text-center mx-auto">
					<Div class="text-center">
						<Div class="mx-auto text-center">{$captcha}</Div>
					</Div>
					<br>
					<Div class="text-center">
						<Div class=" text-center"> 
						<button type="submit" name="claim" class="btn btn-success btn-block">Claim</button>
						</Div>    
					</Div>
				</form>   
				{else}            
					<div class="alert alert-info">
						You can get a reward again in 
						<div data-date="{$timer_amount}" class="timer btn btn-warning">
							
						</div>
					</div>              
					
					<script>           
						$('.timer').each(function(index, element) {	
							var diff=$(this).data('date');	
							var tth=$(this);	
							if(diff>0){	
								var minutes = Math.floor(diff / 60);	
								var seconds = diff - minutes * 60;	
								var interval=setInterval(function() {		
									if(seconds == 0) {			
										if(minutes == 0) {				
											location.reload();			
										}else{				
											minutes--;				
											seconds = 60;			
										}		
									}		
									if(minutes > 0){			
										var minute_text = minutes + ':';									
									}else{ 			
										var minute_text = '';		
									}		
									tth.html(minute_text + seconds);		
									seconds--;	
								}, 
								1000);	
							}});               
					</script>                                                        
				{/if}
				
			{else}
				<br>
				<div class="alert alert-info">
					You are not logged in, Earn free SuperiorCoin's by 
					<a href="register.php">opening account</a>
				</div>
			{/if}
			<table class="table table-striped">  
				<thead>    
					<tr>      
						<th colspan="3">Link</th>      
					</tr>    
				</thead>  
					<tbody>          
					{foreach from=$with item=foo}            
						<tr>      
							<td colspan="3">
								<a href="{$foo['link']}" target="_blank">{$foo['link']}</a>
							</td>      
						</tr>    
					{/foreach}                  
				</tbody>
			</table>

		</Div>


	</div>


	<!-- ///// Start Widget SuperiorCoin Balance //// -->
	<div class="container-fluid py-5 gradient-bg text-center">	
	
		<div class="row ">

			<div class="col-lg-8 mx-auto">
			 	<h1 class="text-light">
	                Actually, our faucet's balance is
	        	</h1>
			</div>

		</div> <!-- row -->

		<div class="row">

	        <div class="col-lg-8 mx-auto ">
				 <div class="general_balance">
	                <h1 class="letter">{$faucet_balance}</h1>
	            </div>
	    	</div>
	    </div>

	    <div class="row ">

			<div class="col-lg-8 mx-auto">
			 	<h1 class="text-light">
	                SuperiorCoins available for you to win!
	        	</h1>
			</div>

		</div> <!-- row -->

	</div>
	</div>
	<!-- ///// End Widget SuperiorCoin Balance //// -->	



			
	
	<!-- ///// Start Widget SuperiorCoin Cureency //// -->	
	<div class="row py-5">
        <div class="col-lg-6 mx-auto ">
          <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
        <div class="coinmarketcap-currency-widget" data-currencyid="2522" data-base="USD"  data-secondary="BTC"></div>
          
        </div>  
        
      </div>
      <!-- ///// End Widget SuperiorCoin Cureency //// -->	




{include file='template/footer.tpl'}