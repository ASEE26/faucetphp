{include file='template/header.tpl'}


<div id="blue">
	<div class="container">
		<div class="row"><h3>Earn Free CryptoCurrency</h3></div><!-- /row -->	 
	</div> <!-- /container -->	
</div>	

<div class="navbar navbar-default">
	<div class="row">
		<div class="col-md-2 text-center" style="width:135px;">	
			<div style="background-color:#B0B0B0; width:120px; height:600px;">A</div>
		</div>
		<Div class="col-md-9">
			<Div class="row text-center">
				<div style="background-color:#B0B0B0; width:768px; height:90px;margin-left:auto; margin-right:auto;">A</div>
			</Div>
			{if !$notlogged}
			<br>
			{if $prize}
			<div class="alert alert-success">You have won {$prize} {$curency}</div>
			{/if}
			{if $capt}
			<div class="alert alert-danger">
			You have won entered wrong captcha
			</div>
			{/if}
			
			{if !$timer}
			<form action="" method="post">
				<Div class="row text-center">
					<Div class="col-md-5 col-md-push-3 text-center">{$captcha}</Div>
				</Div>
				<br>
				<Div class="row text-center">
					<Div class="col-md-5 col-md-push-3 text-center"> 
					<button type="submit" name="claim" class="btn btn-success btn-block">Claim</button>
					</Div>    
				</Div></form>   
				{else}            
				<div class="alert alert-info">You can get a reward again in 
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
				</script>                                                        	{/if}{else}<br>
				<div class="alert alert-info">
					You are not logged in, Earn free Bitcoin by 
					<a href="register.php">opening account</a>
				</div>
				{/if}
				<table class="table table-striped">  
					<thead>    
						<tr>      
							<th colspan="3">Link</th>      
						</tr>    </thead>  
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
			<div class="col-md-2 text-center" style="width:135px;">	
				<div style="background-color:#B0B0B0; width:120px; height:600px;">
				B
			</div>
		</div>
	</div>


  </div>

<div class="clearfix">
	
</div>
</div>
{include file='template/footer.tpl'}