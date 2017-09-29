$(function(){
  $("#login").hide();
  $("#createAccount").hide();
  $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
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
