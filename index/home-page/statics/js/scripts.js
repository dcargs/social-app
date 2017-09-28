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
  if($(".login").val() == ""){
    alert("All elements must be filled out");
    return false;
  } else {
    $("#loginForm").submit();
  }
}

function createAccountValidate(){
  if($(".create_account").val() == ""){
    alert("All elements must be filled out");
    return false;
  } else {
    $("#createAccountForm").submit();
  }
}
