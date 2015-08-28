'use strict';

  var app = (function(document, $) {
  	var docElem = document.documentElement,
  		_userAgentInit = function() {
  			docElem.setAttribute('data-useragent', navigator.userAgent);
  		},
      _validate = function(){
        	// Get the form.
        	var form = $('#form_compartir');

        	// Get the messages div.
        	var formMessages = $('#form-messages');

        	// Set up an event listener for the contact form.
        	$(form).submit(function(e) {
        		// Stop the browser from submitting the form.
        		e.preventDefault();

        		// Serialize the form data.
        		var formData = $(form).serialize();

        		// Submit the form using AJAX.
        		$.ajax({
        			type: 'POST',
        			url: $(form).attr('action'),
              beforeSend: function() {
                $(formMessages).html('<img src="img/load.gif" />');
                $(formMessages).addClass('load');
              },
        			data: formData
        		})
        		.done(function(response) {
        			// Make sure that the formMessages div has the 'success' class.
        			$(formMessages).removeClass('error');
              $(formMessages).removeClass('load');
        			$(formMessages).addClass('success');

        			// Set the message text.
        			$(formMessages).text(response);

        			// Clear the form.
              $('input, textarea').val('');
              $('input:checkbox').val('1').removeAttr('checked');
        		})
        		.fail(function(data) {
        			// Make sure that the formMessages div has the 'error' class.
        			$(formMessages).removeClass('success');
              $(formMessages).removeClass('load');
        			$(formMessages).addClass('error');

        			// Set the message text.
        			if (data.responseText !== '') {
        				$(formMessages).text(data.responseText);
        			} else {
        				$(formMessages).text('Oops! Ha habido un error al grabar en nuestra base. Espere unos minutos y vuelva a intentar.');
        			}
        		})
          });
      },
      _confirmation = function(){
        	// Get the form.
        	var form = $('#confirmation');

        	// Get the messages div.
        	var formMessages = $('#form_confirmation');

        	// Set up an event listener for the contact form.
        	$(form).submit(function(e) {
        		// Stop the browser from submitting the form.
        		e.preventDefault();

        		// Serialize the form data.
        		var formData = $(form).serialize();

        		// Submit the form using AJAX.
        		$.ajax({
        			type: 'POST',
        			url: $(form).attr('action'),
              beforeSend: function() {
                $(formMessages).html('<img src="img/load-confirmation.gif" />');
                $(formMessages).addClass('load');
              },
        			data: formData
        		})
        		.done(function(response) {
        			// Make sure that the formMessages div has the 'success' class.
              $(formMessages).removeClass('error');
              $(formMessages).removeClass('load');
        			$(formMessages).addClass('success');

        			// Set the message text.
        			$(formMessages).text(response);

        			// Clear the form.
        			$('input, textarea').val('');
              $('input:checkbox').removeAttr('checked');

              setTimeout(function(){ window.location.assign("videos.php");}, 4000);

        		})
        		.fail(function(data) {
        			// Make sure that the formMessages div has the 'error' class.
              $(formMessages).removeClass('success');
              $(formMessages).removeClass('load');
        			$(formMessages).addClass('error');

        			// Set the message text.
        			if (data.responseText !== '') {
        				$(formMessages).text(data.responseText);
        			} else {
        				$(formMessages).text('Oops! Ha habido un error al grabar en nuestra base. Espere unos minutos y vuelva a intentar.');
        			}
        		})
          });
      },
      _close_modal = function(){
        $('.close-form, .modal-backdrop').on('click', function(){
          $('input, textarea').val('');
          $('input:checkbox').val('1').removeAttr('checked');
          $('#form-messages').html('').removeClass('success, error');
        });
        $('#exampleModal').on('hidden.bs.modal', function (e) {
          $('input, textarea').val('');
          $('input:checkbox').val('1').removeAttr('checked');
          $('#form-messages').html('').removeClass('success, error');
        });
      },
      _view_info = function() {
         //Tipo de Retorno
        $( "#tUno" ).click(function() {
          $( "#col1").toggleClass( "visible" );
        });
        $( "#tDos").click(function() {
          $( "#col2").toggleClass( "visible" );
        });
        $( "#tTres" ).click(function() {
          $( "#col3").toggleClass( "visible" );
        });
        $( "#tCuatro" ).click(function() {
          $( "#col4").toggleClass( "visible" );
        });
      },
      _share_fb = function(){
        $('#sharebutton').click(function(e){
       	  e.preventDefault();
          var _this = $(this).attr('href');
          var _commit = $(this).attr('data-commit');

         	FB.ui(
         	{
           	method: 'share',
           	name: 'Windows 10',
            href: _this,
           	link: 'localhost',
           	picture: 'http://www.hacegrandescosas.com/preview/img/logo_thumb_03.png',
           	caption: 'Windows 10',
           	description: _commit,
           	message: ''
         	});
       	});
      },
  		_init = function() {
  			_userAgentInit();
        _validate();
        _confirmation();
        _view_info();
        _close_modal();
        _share_fb();
  		};
  	return {
  		init: _init
  	};
  })(document, jQuery);

  (function() {
  	app.init();
  })();
 //Tipo de Retorno
