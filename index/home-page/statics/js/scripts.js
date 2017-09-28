$(function(){
  $("#login").hide();
  $("#createAccount").hide();
});

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
  if(inputs.val() == ""){
    alert("All elements must be filled out");
    return false;
  } else {
    $("#loginForm").submit();
  }
}

function createAccountValidate(){
  var inputs = $(".create_account");
  if(inputs.val() == ""){
    alert("All elements must be filled out");
    return false;
  } else {
    $("#createAccountForm").submit();
  }
}
