
//function to send otp to email and show the otp form if succesful
function sendOtp(event) {
  event.preventDefault();
  // Get the form data
  const form = document.getElementById("otpForm");
  const formData = new FormData(form);
  //post request to send otp using fetch
  fetch("/sendotp", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        document.getElementById("otpFormSection").style.display = "none";
        document.getElementById("enterOtpSection").style.display = "block";
        document.getElementById("email_download").innerHTML = data.htmlresult;
      } else {
        showErrorMessage(data.errormsg);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

document.querySelector("#otpForm").addEventListener("submit", sendOtp);
//function to check otp and show the change password form if succesful
function checkOtp(event) {
  event.preventDefault();
  // Get the form data
  const form = document.getElementById("enterotp");
  const formData = new FormData(form);
  //post request to send otp using fetch
  fetch("/checkotp", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        document.getElementById("enterOtpSection").style.display = "none";
        document.getElementById("chnagepasswordsection").style.display =
          "block";
      } else {
        alert("Incorrect OTP");
        showErrorMessage("Invalid OTP");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
document.querySelector("#enterotp").addEventListener("submit", checkOtp);
//function to update the password
function updatePassword(event) {
  event.preventDefault();
  // Check if the passwords match
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirm_password").value;
  if (password !== confirmPassword) {
    showErrorMessage("Passwords do not match");
    return;
  }
  // Get the form data
  const form = document.getElementById("changePasswordForm");
  const formData = new FormData(form);
  //post request to send otp using fetch
  fetch("/authchangepass", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        window.location.href = "/login";
      } else {
        showErrorMessage("Invalid Password");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
document
  .querySelector("#changePasswordForm")
  .addEventListener("submit", updatePassword);

function showErrorMessage(message) {
  const errorDiv = document.getElementById("error-message");
  errorDiv.innerHTML = message; // Set the message
  errorDiv.style.display = "block"; // Display the message
}
