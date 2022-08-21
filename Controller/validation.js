
const form = document.getElementById('form');
const useremail = document.getElementById('email');
const userpassword = document.getElementById('pass');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    validate();
});

function validate() {

    if (useremail.value == "") {

        setError(useremail, "Email cannot be empty");
    }
    else {
        setSuccess(useremail);
    }
    if (userpassword.value == "") {

        setError1(userpassword, "Password cannot be empty");
    }
    else {
        setSuccess1(userpassword);
    }
}
function setError(input, msg) {
    alert('set error function called');
    const form1 = document.getElementById('form-control');
    const smalltag = form1.querySelector('small');
    smalltag.innerHTML = msg;
    smalltag.style.visibility = "visible";
    const itag = document.getElementById('error');
    itag.style.visibility = "visible";
    itag.style.color = "red";
    input.style.borderColor = "red";
}
function setError1(input, msg) {
    alert('set error function called');
    const form1 = document.getElementById('form-control1');
    const smalltag = form1.querySelector('small');
    smalltag.innerHTML = msg;
    smalltag.style.visibility = "visible";
    const itag = document.getElementById('error1');
    itag.style.visibility = "visible";
    itag.style.color = "red";
    input.style.borderColor = "red";
}
function setSuccess(input) {
    const itag = document.getElementById('success');
    itag.style.visibility = "visible";
    itag.style.color = "green";
    input.style.borderColor = "green";
}
function setSuccess1(input) {
    const itag = document.getElementById('success1');
    itag.style.visibility = "visible";
    itag.style.color = "green";
    input.style.borderColor = "green";
}

