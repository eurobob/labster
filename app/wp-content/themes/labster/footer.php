</main>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          },
          "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
          }
        },
        "opacity": {
          "value": 0.5,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 1,
          "direction": "none",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "grab"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 140,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 2
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });

</script>

<script>

window.$ = function(selector) {
    var selectorType = 'querySelectorAll';

    if (selector.indexOf('#') === 0) {
        selectorType = 'getElementById';
        selector = selector.substr(1, selector.length);
    }

    return document[selectorType](selector);
};


$window = $(window);

var windowHeight = $window.height();

$window.scroll(function() {

	var windowWidth = $window.width();
	if (windowWidth > 1000) {

    	var scrollTop = $window.scrollTop();

    	window.requestAnimationFrame(function(){

		// For each element that has a data-type attribute
			$('.section').each(function(index){

				// Store some variables based on where we are
				var $self = $(this),
					topOffset = index * windowHeight,
					percentage = -(scrollTop - topOffset) / windowHeight * 100;
		
				// If this section is in view
				if ( (scrollTop + windowHeight) > (topOffset) && scrollTop < (windowHeight*1.5) + topOffset ) {
					
					$('[data-type="heading-zoom"]', $self).each(function() {
						
						var $sprite = $(this);
						var zoomPercentage = percentage + $sprite.data('offset');

						var scale = (100 - Math.floor(zoomPercentage))/100;

						if (scale >= 1) {
							$sprite.css({
								transform: 'translate(-50%, -50%) scale(1)',
								opacity: 1
							});
						} else if (scale > 0) {
							$sprite.css({
								transform: 'translate(-50%, -50%) scale(' + scale + ')',
								opacity: scale
							});
						} else {
							$sprite.css({
								transform: 'translate(-50%, -50%) scale(0)',
								opacity: 0
							});
						}
						
					});
				
				}
		
			});	// each data-type
		
		}); //requestAnimationFrame
	}

}); // window scroll
</script>
<?php 

// Grunticon stuff for lazily loaded svg embedding & styling
$embeddedSVGdir = 'wp-content/themes/labster/dist/img/svg/embed';
?>
<script src="<?php echo $embeddedSVGdir; ?>grunticon.loader.js"></script>
<script>
	var embeddedSVGdir = '<?php echo $embeddedSVGdir; ?>';
	grunticon([
		embeddedSVGdir + 'icons.data.svg.css',
		embeddedSVGdir + 'icons.data.png.css',
		embeddedSVGdir + 'icons.fallback.css'
	], grunticon.svgLoadedCallback);
</script>

</body>
</html>