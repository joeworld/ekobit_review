/* OJO OLUWASEUN JOSEPH */

$(function(){
  $('#submit-me').submit(function(){
    var url = $(this).attr('action');
    var data = $(this).serialize();

    $.post(url, data, function(response){

    if(response.status == '0'){
        $("#responseDiv").html("<p class='alert alert-danger' style='color: red'><b>"+ response.text +"</b></p>");
    }else{
    	$("#responseDiv").html("<p class='alert alert-success' style='color: green'><b>"+ response.text +"</b></p>");
        $("#pushModal").click();
    }

    }, 'json');
    return false;
  });
});