var form = $('#login_signup_form');

var loginButton = $('#login');
var signupButton = $('#signup');

loginButton.click(function(e){
      form.attr('action', 'login.php');
          e.preventDefault();
              form.submit();
});

signupButton.click(function(e){
      form.attr('action', 'signup.php');
          e.preventDefault();
              form.submit();
});

