var data={};


$(document).ready(function(){


	// Mouse Enter Overlay
	$('ul#gallery li').on('mouseenter', function(){
		// Get data Attribute values
		var title=$(this).children().data('title');
		var desc = $(this).children().data('desc');

		// Validation
		if (desc == null) {
			desc = 'Click to Enlarge';
		}

		if (title == null) {
			title='';
		}

		// Create overlay div
		$(this).append('<div class="overlay"></div>');

		// Get the overlay div
		var overlay = $(this).children('.overlay');

		// Add html to overlay
		overlay.html('<h3>' +title+ '</h3><p>' +desc+ '</p>');

		// Fade in Overlay
		overlay.fadeIn(1000);
	});

	// Mouseleave overlay
	$('ul#gallery li').on('mouseleave', function(){

		// Create overlay div
		$(this).append('<div class="overlay"></div>');

		// Get the overlay div
		var overlay = $(this).children('.overlay');
		
		// Fade out overlay
		overlay.fadeOut(1000);
	});	

	// Global Variable
	
	var wrap = document.querySelector('#wrap');
	

	// Fetch JSON Data
		
		// $.getJSON('data.json', function(data){
		// 	// data=data.premData.thingsILike;
		// 	console.log(data);
		// 		var d = data.premData.thingsIDo;
		// 		$('.two ul').prepend(d);
		// 		d = data.premData.thingsILike;
		// 		$('.three ul').prepend(d);
		// 		d = data.premData.WhatTech;
		// 		$('.four ul').prepend(d);
			
		// });
		

	$('#submit').on('click',function(){
		var name = $('.name').val();
		var txtarea = $('.txtarea').val();
		var date = getDate();
		var dataString = 'name=' +name+'&txtarea='+txtarea+'&date='+ date;
		// console.log(name+txtarea+date);
		// Validation
		if(name==''|| txtarea=='' || name==' '|| txtarea==' '){
			// alert("fill first");
			return;
			
			//alert("Please Fill the Name and comment field !! ");

		}
		else{
			console.log(dataString);
			$.ajax({
				type: 'GET',
				url: "../premweb/web.php",
				data: dataString,
				cache: false,
				success: function(html){
					$('#newpage ul').prepend(html);
					console.log("done");
					//console.log(html);
				}
			});
		


		}
			
			alert('Your message is successfully sent.');
			$('.name').reset();
			$('.txtarea').reset();
		return false;
	});
		
});


// Get DAte Function

function getDate(){
	var date="";
    var d=new Date();
    d=d.toString();
    for (var i = 0; i < 24; i++) {
           date=date+d[i];
    }
    console.log(date);





	// var date;
	// date = new Date();
	// date=date.toUTCString();
	// console.log(date);
	// date = date.getUTCFullYear() +'-' +
	// 	('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
	// 	('00' + date.getUTCDate()).slice(-2) + '-' +
	// 	('00' + date.getUTCHours()).slice(-2) + ':' +
	// 	('00' + date.getUTCMinutes()).slice(-2) + ':' +
	// 	('00' + date.getUTCSeconds()).slice(-2);
	return date;
}