
$('#phone, #phoneAgain, #storeboxPhone, #storeboxPhoneAgain').mask($("#mobile-format").val()+"99999999", {placeholder: $("#mobile-format").val()+"XXXXXXXX"}).focus(function(){
  setCaretToPos(this, 5);
});
$(".registration-step .comment").hide();
var currentStep = 'undefined';

var validationSteps = {
  "questionnaire": function() {

	  var Status = true;

		$.each($('.type-21.required'), function( index, value ) {

			if(!radioButtonsValidation( $("input:radio[name="+$(value).data('name')+"]") ))  {

				Status = false;
			}
		});
    $('.type-21.required input[type="radio"]').each(function(){
      if( this.checked==true && $(this).attr('data-correct')=='') {
        Status=false;
      }
    });

    if(Status) {
      $(".registration-step .comment").hide();
      return true;
    }

    if($('.registration-step[data-step="questionnaire"] .alert').length == 0)
      $('.registration-step[data-step="questionnaire"] button.btn-next').before(
        validationMessage("To continue please check answers above!")
      );
      $(".registration-step .comment").show();
    return false;
  },
  "disease": function() {

	var mailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var phoneReg = /^([+]46)\s*(7\d{1})\s*(\d{4})\s*(\d{3})$/;

    var email = document.forms["registration-form"]["email"].value;
    var emailAgain = document.forms["registration-form"]["emailAgain"].value;
    var phone = document.forms["registration-form"]["phone"].value;
    var phoneAgain = document.forms["registration-form"]["phoneAgain"].value;

    var isStoreboxAccount = document.forms["registration-form"]["isStoreboxAccount"].value;
    var isSome = document.forms["registration-form"]["isSome"].checked;

    var storeboxEmail = document.forms["registration-form"]["storeboxEmail"].value;
    var storeboxEmailAgain = document.forms["registration-form"]["storeboxEmailAgain"].value;
    var storeboxPhone = document.forms["registration-form"]["storeboxPhone"].value;
    var storeboxPhoneAgain = document.forms["registration-form"]["storeboxPhoneAgain"].value;

    var message = "";

    var result = true;



    if(!document.forms["registration-form"]["HavePrioritzedDiseases"].checked &&
      (document.forms["registration-form"]["selectedDiseases[]"] == null || document.forms["registration-form"]["selectedDiseases[]"].length == 0)) {

      if($('.registration-step[data-step="disease"] .alert').length == 0)
        $('.registration-step[data-step="disease"] button.btn-next').before(
          validationMessage("To continue please choes diseases!")
        );
      result = false;
    }


    /*
    if(email == "" || emailAgain == "" || phone == "" || phoneAgain == "" ||
      isStoreboxAccount == null || (isStoreboxAccount == '1' && !isSome &&
      (storeboxEmail == "" || storeboxEmailAgain == "" || storeboxPhone == "" || storeboxPhoneAgain == ""))) {
          message += "To continue please fill all fields.<br/>";
          result = false;
    }

    if(email != "" && !mailReg.test(email)) {
      message += "Enter valid Email address.<br/>";
      result = false;
    }

    if(phone != "" && !phoneReg.test(phone)) {
      message += "Enter valid Phone Number.<br/>";
      result = false;
    }

    if(email != emailAgain) {
      message += "Email and Email again addresses not match.<br/>";
      result = false;
    }

    if(phone != phoneAgain) {
      message += "Phone and Phone Again not match.<br/>";
      result = false;
    }

    if(isStoreboxAccount == '1' && !isSome) {
      if(storeboxEmail != "" && !mailReg.test(storeboxEmail)) {
        message += "Enter valid Storebox Email address.<br/>";
        result = false;
      }

      if(storeboxPhone != "" && !phoneReg.test(storeboxPhone)) {
        message += "Enter valid Storebox tel Number.<br/>";
        result = false;
      }

      if(storeboxEmail != storeboxEmailAgain) {
        message += "Storebox Email and Storebox Email again addresses not match.<br/>";
        result = false;
      }

      if(storeboxPhone != storeboxPhoneAgain) {
        message += "Storebox tel no. and Storebox tel no. Again not match.<br/>";
        result = false;
      }
    }*/

    if(!result)
      $('.registration-step[data-step="contact-information"] .alert').remove();
      $('.registration-step[data-step="contact-information"] button.btn-submit').before(
        validationMessage(message)
      );
      console.log(result);
    return result;



  },
  "contact-information": function() {}
};

$(document).ready(function() {
  currentStep = parseInt($('.registration-step.active').attr('data-step'));

  $('.combobox').combobox();

  $('.btn-next').click(function(evt) {

    evt.preventDefault();
    if(!$(this).is('.blocked'))
      nextStep();
  });

  $('.btn-submit').click(function(evt) {
    evt.preventDefault();

    finish();
  });

  $('#HavePrioritzedDiseases').change(function() {
      if (this.checked) {
        $('#diseasesListContainer').hide('slow');
      } else {
        $('#diseasesListContainer').show('slow');
      }
  });

  $('#isStoreboxAccountY').change(function() {
    if(this.checked) {
      $('#storeboxAccount').show('slow');
    }
  });

  $('#isStoreboxAccountN').change(function() {
    if(this.checked) {
      $('#storeboxAccount').hide('slow');
    }
  });

  $('#isSome').change(function() {
    if(this.checked) {
      $('#storeboxAccountInfo').slideUp('fast', function(){

            $("#storeboxEmail").val($('#email').val());
            $("#storeboxEmailAgain").val($('#emailAgain').val());
            $("#storeboxPhone").val($("#phone").val());
            $("#storeboxPhoneAgain").val($("#phoneAgain").val());

      });
    } else {
      $("#storeboxEmail").val("");
      $("#storeboxEmailAgain").val("");
      $("#storeboxPhone").val("");
      $("#storeboxPhoneAgain").val("");

      $('#storeboxAccountInfo').slideDown('fast');
    }
  });

  $('#addDiseaseButton').click(function(evt) {
    evt.preventDefault();

    var selectedDiseaseId = parseInt($('#diseasesListContainer .combobox-selected > input').attr('value'));
    var selectedOption = $('#diseasesListContainer select option[value="' + selectedDiseaseId + '"]');

    addDisease(selectedDiseaseId, selectedOption.text());

    selectedOption.prop( "disabled", true );

    $('#diseasesSelect').data('combobox').clearElement();
    $('#diseasesSelect').data('combobox').clearTarget();
    $('#diseasesSelect').data('combobox').refresh();
  });
});


$("#addNotListedDiseaseButton").click(function(e){
  e.preventDefault();
  if($(this).prev().find("input").val() != "") {
    var parentElelent = $("<div class='selected-disease'></div>");
    $(this).parent().clone().appendTo(parentElelent);
    parentElelent.find('input[type="text"]').attr('readonly' ,'').attr('name', 'selectedDiseases[]');
    parentElelent.find('button').remove();
    parentElelent.append('<button class="btn btn-link">');
    parentElelent.find('button').text('Delete');
    parentElelent.find('button').click(function(){
      $(this).parent().remove();
    });

    $("#selectedDiseasesContainer").append(parentElelent);
    $(this).prev().find('input').val("");
  }
});

function finish() {
  if(currentStep != null) {
    if(validationSteps[currentStep] != null && !validationSteps[currentStep]()) return;

    //submit form

    // $('.registration-step.active').removeClass('active');
    if($("#nemid").val() == '')
    {
      var new_window = window.open('nemid/logon.php', '', "width=250,height=300");
      new_window.onbeforeunload = function(){
        var pid = $(new_window.document.getElementById("pid")).val();
        if(pid != '') {
          $("#nemid").val(pid);
        }

        if($('#nemid').val() != '') {
          $('#registration-form').submit();
        }
        else {
          $('form .alert-danger').remove();
          $(validationMessage('Please verify nemid')).insertBefore('.btn-submit');
        }
      }
    } else {
      $('#registration-form').submit();
    }

    // if(pid !== false) {
    //   $('#registration-form').submit();
    // }
    // else {
    //   validationMessage('Login to nemid');
    // }
  }
}

function nextStep() {
  if(currentStep != null) {
    if(validationSteps[currentStep] != null && !validationSteps[currentStep]()) return;

    if(currentStep!=6)
      currentStep = $(".registration-step.active").next().attr('data-step');
    window.location.hash=currentStep;
  }
}

function prevStep() {
	if($(".registration-step.active").prev().length != 0) {
		currentStep = $(".registration-step.active").prev().attr('data-step');
		window.location.hash=currentStep;
		return false;
	}
}


	$('#contact_info').change(function(){
		$('#contact-info-optional').toggle('slow');
	});

function addDisease(id, name) {
  if(!isNaN(id) && $('#selected' + id).length == 0) {

    var selectedDisease = $('<div class="selected-disease" id="selected' + id + '"><div class="form-group"><div class="input-group">' +
                '<input class="form-control" type="text" value="' + name + '" readonly/>' +
                '<input type="hidden" name="selectedDiseases[]" value="' + id + '" readonly/>' +
                '</div><button onclick="removeSelectedDisease(this, event);" class="btn btn-link">Delete</button>' +
                '</div></div>');
    $('#selectedDiseasesContainer').append(selectedDisease);
  }
}

function removeSelectedDisease(element, evt) {
  evt.preventDefault();
  var container = $(element).closest(".selected-disease");
  var id = container.find('input:hidden').attr("value");

  container.remove();

  $('#diseasesListContainer select option[value="' + id + '"]').prop( "disabled", false );
  $('#diseasesSelect').data('combobox').refresh();
}

function validationMessage(message) {
  if(message == '' || message == null) {
    return '';
  }

  return '<div class="alert alert-danger">' +
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
            message +
          '</div>';
}

function radioButtonsValidation(radios) {
  for (i = 0; i < radios.length; ++ i) {
    if (radios[i].checked) return true;
  }
  return false;
}

function setCaretToPos(input, pos) {
  setSelectionRange(input, pos, pos);
}

function setSelectionRange(input, selectionStart, selectionEnd) {
  if (input.setSelectionRange) {
    input.focus();
    input.setSelectionRange(selectionStart, selectionEnd);
  } else if (input.createTextRange) {
    var range = input.createTextRange();
    range.collapse(true);
    range.moveEnd('character', selectionEnd);
    range.moveStart('character', selectionStart);
    range.select();
  }
}

$('#registration-form').submit(function(e) {
  e.preventDefault();
  $(".btn-submit").prepend("<i class='fa fa-spinner fa-spin '></i>");
  $(".btn-submit").attr("disabled",'');
  $(this).find('.alert-danger').remove();
  console.log("kk");
  $.ajax({
          type:    "POST",
          url:     "",
          data:    $('#registration-form').serialize(),
          success: function(data){
            if(data == null) {
              alert("there was an error on server try again later");
              return;
            }
            if(data.error == false) {
              window.location.hash="finish";
            }
            else if(data.error.questionary != null){
              window.location.hash="errors";
            } else if(data == true){
              window.location.hash="1";
            } else {
              for (var prop in data.error) {
                // skip loop if the property is from prototype
                if(!data.error.hasOwnProperty(prop)) continue;
                $(validationMessage(data.error[prop])).insertBefore('.btn-submit');
              }

              $(".btn-submit i").remove();
              $(".btn-submit").removeAttr("disabled");
            }
            console.log(typeof data);
          },
          // vvv---- This is the new bit
          error:   function(jqXHR, textStatus, errorThrown) {
                $(validationMessage("There was an error try again later")).insertBefore('.btn-submit');
                $(".btn-submit i").remove();
                $(".btn-submit").removeAttr("disabled");
          }
        });
  // $.post('', $('#registration-form').serialize() ,function(data){
  //   console.log("kk");
  //   if(data == null) {
  //     alert("there was an error try again later");
  //     return;
  //   }
  //   if(data.error == false) {
  //     window.location.hash="finish";
  //   }
  //   else if(data.error.questionary != null){
  //     window.location.hash="errors";
  //   } else if(data == true){
  //     window.location.hash="1";
  //   } else {
  //     for (var prop in data.error) {
  //       // skip loop if the property is from prototype
  //       if(!data.error.hasOwnProperty(prop)) continue;
  //       $(validationMessage(data.error[prop])).insertBefore('.btn-submit');
  //     }
  //   }
  //   console.log(typeof data);
  // });
});

$("#email").on('keyup paste', function(){
  if($('#isSome')[0].checked)
    $("#storeboxEmail").val($(this).val());
});

$("#emailAgain").on('keyup paste', function(){
  if($('#isSome')[0].checked)
    $("#storeboxEmailAgain").val($(this).val());
});

$("#phone").on('keyup paste', function(){
  if($('#isSome')[0].checked)
    $("#storeboxPhone").val($(this).val());
});

$("#phoneAgain").on('keyup paste', function(){
  if($('#isSome')[0].checked)
    $("#storeboxPhoneAgain").val($(this).val());
});

$(".btn-restart").click(function(e){
  e.preventDefault();
  $("#registration-form").find("input[type=text], textarea").val("");
  $("#registration-form").find("input[type=checkbox]").each(function(){
    this.checked=false;
  });
  $("#registration-form").find("input[type=radio]").each(function(){
    this.checked=false;
  });
  $('#diseasesListContainer').show();
  $('#storeboxAccountInfo').show();
  currentStep=1;
  window.location.hash=currentStep;
});

window.location.hash=1;

window.onhashchange = function() {
  currentStep=window.location.href.split('#')[1];
  var returnTo1 = false;
  var currentEl = $('.registration-step[data-step="'+currentStep+'"]');
  if(currentEl.prev().length != 0) {
    var allPrevEl=currentEl.prevAll();
    allPrevEl.each(function(){
      if(typeof validationSteps[$(this).attr('data-step')] != 'undefined') {
          if(!validationSteps[$(this).attr('data-step')]()) {
            returnTo1=true;
          }
      }

      console.log(typeof validationSteps[$(this).attr('data-step')]);
    });
  }
  if(returnTo1) {
    window.location.hash=1;
  } else {
    $('.registration-step.active').removeClass('active');
    $('.registration-step[data-step="' + currentStep + '"]').addClass('active');
  }
}
