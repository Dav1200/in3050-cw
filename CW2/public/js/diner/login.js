//function to submit the login form and authenticate the user
function submitLoginForm(e) {
    e.preventDefault(); // Prevent default form submission
    const formData = new FormData(this);
    fetch('/authDiner', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirect or perform success action
         
              window.location.href = "/dinerhub";
            } else {
                // Highlight the input fields with red outline
                document.getElementById('username').style.border = '2px solid red';
                document.getElementById('password').style.border = '2px solid red';
                showErrorMessage("Invalid username or password");
            }

        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function showErrorMessage(message) {
    const errorDiv = document.getElementById('error-message');
    errorDiv.innerHTML = message;    // Set the message
    errorDiv.style.display = 'block'; // Display the message
}

document.querySelector('.staff-form form').addEventListener('submit', submitLoginForm);


function registerBtn() {
    window.location.href = "/register";
}
