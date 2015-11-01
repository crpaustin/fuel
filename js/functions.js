$(document).ready(function(){
	
	
	
	
	$('#slide-button').on({ 'touchstart' : function(){ 
		$('#nav-wrapper').slideToggle( "slow", function(){
		
		});
	} });
	
	
	// Drop down menu
	$( "#slide-button" ).click(function() {
		$( "#nav-wrapper" ).slideToggle( "slow", function() {
			// Animation half way complete.
		});
	});
	
});