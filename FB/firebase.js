window.onload = function() {
   
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = document.getElementById('number').value;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function(error) {
        alert(error.message);
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;


    coderesult.confirm(code).then(function(result) {
        alert("Hi this is me");

        var number = document.getElementById('number').value;
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;

        location.replace("intern.php?Iname="+name+"&Iemail="+email+"&uname="+number)
        var user = result.user;
        console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}