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
