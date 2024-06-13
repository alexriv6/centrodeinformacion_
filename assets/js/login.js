$(document).ready(function(){

    $('.error').hide();
    $('.correcto').hide();
    $('.retry').hide();

    $('#acceder').click(function(){

    if($('#usuario').val() != "" && $('#pass').val() != ""){
      $.ajax({
              type:"POST",
              url:"../admin/login.php",
              data: {
                usuario : $('#usuario').val(),
                pass: $('#pass').val()
              },
              success: function(data){
                if(data){
                  $('.correcto').show();
                  $('.error').hide();
                  $('.retry').hide();

                  function acceso(){
                    window.location.href="../admin/index.php";
                  }
                  setTimeout(acceso,2000);

                }else {
                  $('.error').show();
                  $('.correcto').hide();
                  $('.retry').hide();
                }
              },
              error: function(){
              alert ("Ha ocurrido un error");
              }
            });
            }else{
              $('.retry').show();
          }
    });
    $('#close').click(function(){
      $('.alert').hide();
    });
    $('#exit').click(function(){
      $('.retry').hide();
    });
});