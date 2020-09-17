particlesJS.load('particles-js', 'particles.json', function() {
    'use strict';
  console.log('particles.js loaded - callback');
});


particlesJS('particles-js',
  
  {
  "particles": {
    "number": {
      "value": 47,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#58a9b8"
    },
    "shape": {
      "type": "star",
      "stroke": {
        "width": 0,
        "color": "#000"
      },
      "polygon": {
        "nb_sides": 6
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.33933348590187723,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 0.3996003996003996,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 7.891476416322726,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 4.795204795204795,
        "size_min": 16.783216783216783,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 110.48066982851817,
      "color": "#b9afa5",
      "opacity": 1,
      "width": 1.1048066982851816
    },
    "move": {
      "enable": true,
      "speed": 8,
      "direction": "none",
      "random": false,
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
        "enable": false,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
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
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
);

$.fn.changeWords = function(options) {
var settings = $.extend({
  time: 1500,
  animate: "zoomIn",
  selector: "span",
  repeat: true
}, options);
var wordCount = $(settings.selector, this).length;
var words = $(settings.selector, this);
words.filter(function() {
  return $(this).attr("data-id") != "1"
}).css("display", "none");
var count = 1;
var changeThisWord = setInterval(function() {
  ++count;
  var wordOrder = count;
  words.filter(function() {
    return $(this).attr("data-id") == wordOrder
  }).addClass("animated " + settings.animate).css("display", "inline-block");
  words.filter(function() {
    return $(this).attr("data-id") != wordOrder
  }).css("display", "none").removeClass();
  if (count == wordCount) {
    count = 0;
  }
  if(count == 0 && settings.repeat != true)
  {
    clearInterval(changeThisWord);
  }
}, settings.time);
}