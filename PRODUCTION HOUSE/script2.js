// Validate form fields on submit
document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('.my-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        var nameField = document.querySelector('#name');
        var emailField = document.querySelector('#email');

        var name = nameField.value.trim();
        var email = emailField.value.trim();

        if (name === '') {
            // Show an error message for the name field
            nameField.classList.add('error');
        } else {
            // Remove the error message for the name field
            nameField.classList.remove('error');
        }

        if (email === '') {
            // Show an error message for the email field
            emailField.classList.add('error');
        } else {
            // Remove the error message for the email field
            emailField.classList.remove('error');
        }

        // Submit the form if all fields are valid
        if (name !== '' && email !== '') {
            form.submit();
        }
    });
});
