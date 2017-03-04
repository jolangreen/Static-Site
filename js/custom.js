//load first banner item
$(function(){
  $('.item').first().addClass('active');
});

/*
//Smooth Anchor Link
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
*/

//animate elements
$(window).scroll(function() {
    $('#object').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+800) {
            $(this).addClass("slideUp");
        }
    });
});


//Full Height
/*
$(function(){
    $('.item') .css({'height': (($(window).height()))+'px'});
    $(window).resize(function(){
        $('.item') .css({'height': (($(window).height()))+'px'});
    });
});
*/


// Contact Form Submission
$("form[name=contactForm]").on('submit', function(e) {
  e.preventDefault();

  var passed = true, 
    data = {};

  // Check form fields
  $('#contactForm [name]').each(function() {
    if(!$(this).val()) {
      $(this).addClass('error').css('border', '1px solid red');
      passed = false;
    } else {
      var value = $(this).val();
      var name = $(this).attr('name');
      data[name] = value;
    }
  }); 

  // Proceess Contact Form
  if(passed === true) {
    
    console.log(data);

    $.ajax({
        url: $(this).attr("action"),
        type: 'POST',
        data: data,
        success: function(data) {
            console.log(data);
        },
        error: function(errorThrown) {
            console.log(errorThrown);
        }
    });

  } else {
    $('.error-message').show();
  };


/*
  // Different Ways To Do AJAX Calls

  $.post('contactform.php', function(data) {
      // place success code here
  })
    .fail(function(data) {
          // place error code here
  });
*/

});