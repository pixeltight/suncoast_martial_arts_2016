(function($) {
	'use strict';

	//drawer menu at cellphone width
	$('body').on('click', '#menu-trigger', function() {
		toggleNav();
	});

	//initialize carousel
	$('.main-carousel').flickity({
		cellAlign: 'left',
		contain: true,
        imagesLoaded: true,
        wrapAround: true,
        autoPlay: 5000
	});

	// handle contact form
	$("#contact_form").on("submit",function(e) {
        e.preventDefault();
        var dataString='name='+$("#name").val()+'&email='+$("#email").val()+'&message='+$("#message").val();
        $.ajax({
            type: "POST",
            url: "/process.php",
            data: dataString,

            success:function(){
                console.log(dataString);
                $("#contact_form").html(
                	"<div id='confirmation'>\
                		<h4>Submission Received</h4>\
                		<p id='feedback'></p>\
                		</div>"
                );
                setTimeout(function(){
                    $("#feedback").append("<span>&#10004; </span>\
                    	Thank you for your inquiry. One of our insturctors will contact you very shortly.")
                    .hide()
                    .fadeIn(2000)
                },1000);
            }
        });
        return false
    });

}(jQuery));

function toggleNav() {
	'use strict';
	var $siteWrapper = $('#site-wrapper');
	
	if($siteWrapper.hasClass('show-nav')) {
		$siteWrapper.removeClass('show-nav');
	} else {
		$siteWrapper.addClass('show-nav');
	}
}