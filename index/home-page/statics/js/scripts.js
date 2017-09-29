$(function(){
  $("#login").hide();
  $("#createAccount").hide();
});

function sendRequest(alias){
  $("#" + alias).attr("disabled", true).html("Friend Request Sent");
  $.ajax({
    url: 'post_hub',
    type: 'post',
    data: {action: 'add_friend',
           alias: alias},
    success: function(output){

    }
  });
}

function respondRequest(id){
  $.ajax({
    url: 'post_hub',
    type: 'post',
    data: {action: 'respond_request',
           id: id},
    success: function(output){
      console.log(output);
    }
  });
}

function loginForm(){
  $("#login").slideToggle();
  $("#choiceButtons").slideToggle();
}

function createAccountForm(){
  $("#createAccount").slideToggle();
  $("#choiceButtons").slideToggle();
}

function loginValidate(){
  var inputs = $(".login");
  for (var i = 0; i < inputs.length; i++) {
    if(inputs[i].value == ""){
      alert("All elements must be filled out");
      return false;
    }
  }
}

function createAccountValidate(){
  var inputs = $(".create_account");
  for (var i = 0; i < inputs.length; i++) {
    if(inputs[i].value == ""){
      alert("All elements must be filled out");
      return false;
    }
  }
}
