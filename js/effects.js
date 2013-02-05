jQuery(window).load(function(){
	delay();
});

function delay() {
	var secs = 500;
	setTimeout('initFadeIn()', secs);
}

function initFadeIn() {
	jQuery("#campus").css("visibility","visible");
	jQuery("#campus").css("display","none");
	jQuery("#campus").fadeIn(1000);
	$.scrollTo( '#home', 1000 );
}

$('#campusnavigation').localScroll({	
	axis:'xy',
	queue:false,
	hash:true,
	duration:1500,
	stop: true,
	easing: 'easeInOutQuad'
})

$(function(){ 
	$('#campusnavigation a').click(function(){ 
	$('#campusnavigation a').removeClass('active'); 
	$(this).addClass('active'); 
	});
});