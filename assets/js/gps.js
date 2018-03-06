jQuery(function(){
	var display = false;
	$('.load-items').on('click', function(e){
	    e.preventDefault();
		$('.load_more').toggle('slow');
		if(display == true){
			$('.load-items').text('More Courses');
			display =false;
		}else{
			$('.load-items').text('Hide Courses');
			display =true;
		}

		// $(this).hide();
		
	});
})