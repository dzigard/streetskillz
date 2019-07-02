function main() {
 
  
  $('.description').hide();
  
  $('.show').on('click', function() {
		//$(this).toggle();
    $(this).next().slideToggle(400);
	
  	$(this).text('Show less');
     
  
	});
}



$(document).ready(main);