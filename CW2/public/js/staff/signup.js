
//function to submit sign up form 
function submitSignupForm(e) {
    e.preventDefault()
    var password = document.getElementById('password').value;
    var confirm_password = document.getElementById('confirm_password').value;
    var secret = document.getElementById('secret').value;
    if (password != confirm_password && secret != empty) {
        showErrorMessage('Passwords do not match');
        return;
    }

    else if (secret === ''){
        showErrorMessage('Secret key is required');
        return;
    }


    else {
        const formData = new FormData(this);
        fetch('/authStaffSignup', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect or perform success action
                    window.location.href = '/stafflogin';
                } else {
                    document.getElementById('secret').style.border = '2px solid red';
                    showErrorMessage("Incorrect Secret Key");
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });

    }
}

function showErrorMessage(message) {
    const errorDiv = document.getElementById('error-message');
    errorDiv.innerHTML = message;    // Set the message
    errorDiv.style.display = 'block'; // Display the message
}

document.querySelector('.staff-form form').addEventListener('submit', submitSignupForm);