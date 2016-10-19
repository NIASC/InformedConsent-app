$(window).ready(function(){
  $('.windraw').submit(function(e){
    if( $('input[name="email"]').val() == 0 ) {
      $(".alert").remove();
      $('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email can\'t be empty</div>')
                .insertAfter($(this).find('input[name="email"]'));
      e.preventDefault();
    }
  });
});

function goBack() {
  window.history.back();
  console.log('k');
}
