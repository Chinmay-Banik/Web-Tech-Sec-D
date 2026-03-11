function validateForm() {
    let firstName = document.getElementById("FirstName").value;
    let lastName = document.getElementById("LastName").value;

    if(firstName === "" || lastName === "") {
        alert("Please fill in both fields.");
        return false;   
    }
    if(firstName.length < 2 || lastName.length < 2) {
        alert("First Name and Last Name must be at least 2 characters long.");
        return false;
    }
    else {
        alert("Form submitted successfully!");
        return true;    
    }

}