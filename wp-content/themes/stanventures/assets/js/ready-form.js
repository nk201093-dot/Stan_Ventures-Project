document.addEventListener("DOMContentLoaded", function () {

    var form = document.getElementById("readyForm");

    if (!form) return;

    form.addEventListener("submit", function (e) {

        e.preventDefault();

        var email = document.getElementById("readyEmail").value;
        var errorBox = document.getElementById("emailError");

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === "") {
            errorBox.style.display = "block";
            errorBox.innerHTML = "Email is required";
            return false;
        }

        if (!emailPattern.test(email)) {
            errorBox.style.display = "block";
            errorBox.innerHTML = "Please enter a valid email address";
            return false;
        }

        errorBox.style.display = "none";
        alert("Form submitted successfully!");

    });

});
