"use strict";

$(document).ready(function() {

	/*================== Google Maps ==================*/

	/*
	Change address and maps longitude/latitude to set your own address
	*/
	
	var address = "Paris<br>75000 France";

	function initialize() {
		var myLatlng = new google.maps.LatLng(48.8588589, 2.3470599);
	    var mapCanvas = document.getElementById('map_canvas');
	    var mapOptions = {
	      center: myLatlng,
	      zoom: 11,
	      draggable: false,
	      scrollwheel: false,
	      zoomControl: false,
		}

		var map = new google.maps.Map(mapCanvas, mapOptions);

		var contentString = address;
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Come visit us'
		});

		infowindow.open(map,marker);

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);

	/*================== Sticky Navbar & Auto Nav Underline ==================*/

	var navHeight = parseInt($('.menu').css('height'));
	var navBottom = navHeight;

	$('body').scrollspy({ target: '.menu', offset: navHeight});

	$(window).scroll(function() {
		var windowTop = $(window).scrollTop();

		if (windowTop >= navBottom) {
			$('.menu').addClass('sticky animated flipInX');
			$('.menu').removeClass('bounceInDown');
		} else {
			$('.menu').addClass('');
			$('.menu').removeClass('sticky flipInX');
		}; 
	});

	/*================== Waypoints ==================*/

	$('.wp0').waypoint(function() {
	}, {
		offset: '-15%'
	});
	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInDown');
	}, {
		offset: '75%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});


	/*================== Smooth Scrolling ==================*/

	$('a[href*=#]:not([href=#])').click(function() { 
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top-navHeight+1

				}, 300);
				return false;
			}
		}
  	});

  	/*================== FitVids ==================*/

  	$('.video').fitVids();

  	/*================== Options Panel ==================*/

  	$('.options-panel').click(function(){
  		var optionsPanel = $('.options-panel');
  		if (optionsPanel.css('bottom') == '-125px') {
  			optionsPanel.css('bottom', '0');
  		} else {
  			optionsPanel.css('bottom', '-125px');
  		};
  	});

  	$('.options-panel button').click(function(){
  		changeThemeColor("css/" + $(this).attr("value") + ".css", "css");
  	});

  	function changeThemeColor(filename, filetype){
        var fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", filename)
        document.getElementsByTagName("head")[0].appendChild(fileref)
	}

});