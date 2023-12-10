
// Register Validation

function validateRegister() {
    let emriInput = document.getElementById('emri');
    let emriError = document.getElementById('emriError');
    let mbiemriInput = document.getElementById('mbiemri');
    let mbiemriError = document.getElementById('mbiemriError');
    let usernameInput = document.getElementById('username');
    let usernameError = document.getElementById('usernameError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let passInput = document.getElementById('password');
    let passError = document.getElementById('passwordError');
    let conPassInput = document.getElementById('conPass');
    let conPassError = document.getElementById('conPasswordError');

    emriError.innerText = '';
    mbiemriError.innerText = '';
    usernameError.innerText = '';
    emailError.innerText = '';
    passError.innerText = '';
    conPassError.innerText = '';

    let emriRegex = /^[A-Z][a-z]+$/;
    if (!emriRegex.test(emriInput.value)) {
        emriError.innerText = 'Emri jovalid';
        return;
    }
    if (!emriRegex.test(mbiemriInput.value)) {
        mbiemriError.innerText = 'mbiemri jovalid';
        return;
    }

    let usernameRegex = /^[\w]{2,15}$/;
    if (!usernameRegex.test(usernameInput.value)) {
        usernameError.innerText = 'username jovalid (gjatesia 2-15, vetem shkronja dhe numra)';
        return;
    }

    let emailRegex = /^[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
    if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'E-mail jovalid';
        return;
    }

    let passwordRegex = /^[\w]{8,20}$/;
    if (!passwordRegex.test(passInput.value)) {
        passError.innerText = 'Password jovalid (gjatesia 8-20, vetem shkronja dhe numra)';
        return;
    }

    if (passInput.value !== conPassInput.value) {
        conPassError.innerText = 'Confirm Password jovalid';
        return;
    }

    alert('Success');
    openLink("LogInForm.html");
}

// Functin to open likns

function openLink(referen){
    window.location.href = referen;
}

// Log in validation

function validateLogIn(){
    let usernameInput = document.getElementById('username');
    let usernameError = document.getElementById('usernameError');
    let passInput = document.getElementById('password');
    let passError = document.getElementById('passwordError');

    usernameError.innerText = '';
    passError.innerText = '';

    let usernameRegex = /^[\w]{2,15}$/;
    if (!usernameRegex.test(usernameInput.value)) {
        usernameError.innerText = 'username jovalid (gjatesia 2-15, vetem shkronja dhe numra)';
        return;
    }

    let passwordRegex = /^[\w]{8,20}$/;
    if (!passwordRegex.test(passInput.value)) {
        passError.innerText = 'Password jovalid (gjatesia 8-20, vetem shkronja dhe numra)';
        return;
    }

    alert('Success');
    openLink("HomePage.html");
}


