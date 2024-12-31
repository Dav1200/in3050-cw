
//function to submit registration form and authenticate the user and do the validation for mathcing passwords
function submitSignupForm(e) {
    e.preventDefault()
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;

    if (password != confirm_password) {
        showErrorMessage('Passwords do not match');
        return;
    }

    else {
        const formData = new FormData(this);
        fetch('/authDinerSignup', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect or perform success action
                    document.getElementById('diner-signup').style.display = 'none';
                    document.getElementById('registration-confirm').style.display = 'block';
                    document.getElementById('email-download').innerHTML = data.confirmation_email;
                } else {
                    
                    console.log(data);
                    showErrorMessage("Failed to sign up. Please try again with different Email.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

    }
}
//function to show error message
function showErrorMessage(message) {
    const errorDiv = document.getElementById('error-message');
    errorDiv.innerHTML = message;    // Set the message
    errorDiv.style.display = 'block'; // Display the message
}

//event listener for the form submission
document.querySelector('.staff-form form').addEventListener('submit', submitSignupForm);
//  function to redirect to login page
function viewDinerHub() {
    window.location.href = '/dinerhub';
}