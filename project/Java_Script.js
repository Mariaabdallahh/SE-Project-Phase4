$('.mail-choice').change(function() {
    if($(this).is(":checked")) {
        $(this).parent().addClass('selected-bg');
  } else {
    $(this).parent().removeClass('selected-bg');
  }
});

const colorInput = document.getElementById("colorpicker");

colorInput.addEventListener("input", (e) => {
 document.body.style.setProperty("--button-color", e.target.value);
});

$('.inbox-calendar').click(function(){
  $('.calendar-container').toggleClass('calendar-show');
 $('.inbox-container').toggleClass('hide');
 $('.mail-detail').toggleClass('hide'); 
});

//THIS IS FOR THE LOGIN IN PAGE 
$(document).ready(function(){
  $('#birth-date').mask('00/00/0000');
  $('#phone-number').mask('0000-0000');
 })