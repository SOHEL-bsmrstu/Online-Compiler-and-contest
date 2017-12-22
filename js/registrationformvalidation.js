function checkvalidation() {
    var user_name = document.getElementById("user_name").value;
    var password = document.getElementById("password").value;
    var phn_number = document.getElementById("phn_number").value;
    var email = document.getElementById("email").pattern;
    var confirm_password = document.getElementById("confirm_password").value;
    var user_image = document.getElementById("image").value;

    if (!user_name) {
        alert("Insert your name");
        document.getElementById('user_name').focus();
        document.getElementById('user_name').select();
        return false;
    }
    if (!phn_number) {
        alert("Insert your phone number");
        document.getElementById('phn_number').focus();
        document.getElementById('phn_number').select();
        return false;
    }
    if (!email) {
        alert("Insert your E-mail");
        document.getElementById('email').focus();
        document.getElementById('email').select();
        return false;
    }
    if (!user_image) {
        alert("Insert your phone number");
        document.getElementById('image').focus();
        document.getElementById('image').select();
        return false;
    }
    if (password === "") {
        alert("Insert a password");
        document.getElementById('password').focus();
        document.getElementById('password').select();
        return false;
    }
    else if (password.length < 6)
    {
        alert("Password must be more than 5 characters!");
        document.getElementById('password').focus();
        document.getElementById('password').select();
        return false;
    }
    if (password !== confirm_password)
    {
        alert("Password doesn't match!");
        document.getElementById('confirm_password').focus();
        document.getElementById('confirm_password').select();
        return false;
    }
    document.forms.registration_form.submit();
}

		