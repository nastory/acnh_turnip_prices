var username = document.getElementById('username');
var password = document.getElementById('password');
var confirmPassword = document.getElementById('confirm_password');


username.addEventListener('keyup', function(){

	checkUsername();

});


confirmPassword.addEventListener('keyup', function(){

	checkPasswordConf();
	validate();

});


password.addEventListener('keyup', function(){

	checkPasswordConf();
	checkPasswordStrength();

});


function validate() {

	var usr = checkUsername();
	var pwd = checkPasswordConf();

	if(usr & pwd) {
		$('#create_user_btn').removeAttr('disabled');
	} else {
		$('#create_user_btn').attr('disabled', true);
	}

}

function checkUsername() {

	var usr = $('#username').val();
	var usr_check = new RegExp('^(?=.*[a-z])(?=.{5,})');

	if(usr_check.test(usr)){
		$('#username_check').css({'display': 'none'});
		return true;
	} else {
		$('#username_check').css({'display': 'block'});
		return false;
	}

}


function checkPasswordConf() {

	var usr = $('#username').val();
	var pwd = $('#password').val();
	var conf = $('#confirm_password').val();
	var chk1 = false;
	var chk2 = false;

	if(pwd == conf & conf != '') {
		$("#confirm_password_message").css({"display": "none"});
		chk1 = true;
	} else {
		$("#confirm_password_message").css({'display': 'block'});
	}

	if(pwd == usr) {
		$('#password_username_message').css({'display': 'block'});
	} else {
		$('#password_username_message').css({'display': 'none'});
		chk2 = true;
	}

	return chk1 & chk2;

}

function checkPasswordStrength() {

	var usr = $('#username').val();
	var pwd = $('#password').val();
	var pwd_check = new RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{5,})|(?=.{8,})");

	if(pwd_check.test(pwd)) {
		$('#password_strength_message').css({'display': 'none'});
		return true;
	} else {
		$('#password_strength_message').css({'display': 'block'});
		return false;
	}

}

