function validateLogin() {
    let email = document.getElementById("loginemail").value.trim();
    let pass = document.getElementById("loginpass").value.trim();

    if (email === "") {
        alert("Email is required");
        return false;
    }
    if (pass === "") {
        alert("Password is required");
        return false;
    }
    return true;
}

function validateSignup() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let pass = document.getElementById("pass").value;
    let cpass = document.getElementById("cpass").value;

    if (name === "") {
        alert("Full name is required");
        return false;
    }
    if (name.length < 3) {
        document.getElementById("name").style.border = "2px solid red";
        return false;
    }
;

    if (email === "") {
        alert("Email is required");
        return false;
    }

    if (!email.includes("@")) {
        alert("Enter a valid email");
        return false;
    }

    if (pass.length < 6) {
        alert("Password must be at least 6 characters");
        return false;
    }

    if (pass !== cpass) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}