$(window).ready(function(){
  $('.windraw').submit(function(e){
    if( $('input[name="email"]').val() == 0 ) {
      $(".alert").remove();
      $('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email can\'t be empty</div>')
                .insertAfter($(this).find('input[name="nemid"]'));
      e.preventDefault();
    }
  });
});

function goBack() {
  window.history.back();
  console.log('k');
}


$('.auth').click(function(){
    $(".alert").remove();
    var new_window = window.open('nemid/logon.php', '', "width=250,height=300");
    new_window.onbeforeunload = function(){
      var pid = $(new_window.document.getElementById("pid")).val();
      if(pid != '') {
        $("#nemid").val(pid);
      }



      if($('#nemid').val() != '') {
        //$('form').submit();
        console.log("test1");
      }
      else {
        $('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please login to nemid!</div>')
                  .insertAfter($('.auth'));
      }
    }
});
