


// video overlay trigger

var videoOverlayTrigger = document.getElementById('videoOverlayTrigger');
var videoOverlay = document.getElementById('videoOverlay');
var videoOverlayClose = document.getElementById('videoOverlayClose');

videoOverlayTrigger.addEventListener('click', function(e) {

	e.preventDefault();
	videoOverlay.classList.add('active');
});

videoOverlayClose.addEventListener('click', function() {

	videoOverlay.classList.remove('active');


});





// Register for open days email input
// (animated floating label style text input)
var registerTextInput = document.querySelector('.register-input__text-field');

if (registerTextInput) {

  registerTextInput.addEventListener('change', function() {

    // When text input field is changed, if it contains content add 'active' class
    // To ensure input label remains floated above the input if text has been added
    if (registerTextInput && registerTextInput.value) {
      registerTextInput.classList.add('active');
    }
    else {
      registerTextInput.classList.remove('active');
    }
  });
}


}, false);
