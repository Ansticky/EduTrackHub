// Validate form data
function validateForm() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let course = document.getElementById('course').value;
    let phone = document.getElementById('phone').value;

    if (name == "" || email == "" || course == "" || phone == "") {
        alert("All fields must be filled out!");
        return false;
    }

    // Check if email is valid
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Optionally, you could also validate phone number format
    let phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    return true;
}

// Confirmation before deleting a student
function confirmDelete() {
    return confirm("Are you sure you want to delete this record?");
}
