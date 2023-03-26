function loginValidationForm() {
  // const emailInput = document.querySelector("#input-email");
  // const passwordInput = document.querySelector("#input-password");
  // if (isNaN(emailInput)) {
  //     document.querySelector("#validationEmailResponse").textContent = "email is required";
  // };
  // if (isNaN(passwordInput)) {
  //     document.querySelector("#validationPasswordResponse").textContent = "password is required";
  // };
  alert("Login validate");
  return false;
}

function registerValidationForm() {
  alert("Register validate");
  return false;
}

function formOpen(id) {
  document.getElementById(id).style.display = "block";
  var popup = document.getElementById(id);

  window.onclick = function (event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  };
}

function formClose(id) {
  document.getElementById(id).style.display = "none";
}

function check() {
  if (
    document.getElementById("register-password").value ==
    document.getElementById("confirm-password").value
  ) {
    document.getElementById("message").style.color = "green";
    document.getElementById("message").innerHTML = "matching passsword";
  } else {
    document.getElementById("message").style.color = "red";
    document.getElementById("message").innerHTML = "not matching password";
  }
}

function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
