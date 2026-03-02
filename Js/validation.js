function validateForm() {

    let name = document.getElementById("name").value.trim();

    if (name === "") {
        alert("Name cannot be empty");
        return false;
    }

    if (name.length < 2) {
        alert("Name must contain at least two words");
        return false;
    }

    let namePattern = /^[A-Za-z][A-Za-z.\- ]*$/;

    if (!namePattern.test(name)) {
        alert("Name can contain only letters, dot (.), dash (-) and must start with a letter");
        return false;
    }



    let email = document.getElementById("email").value.trim();

    if (email === "") {
        alert("Email cannot be empty");
        return false;
    }

    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/;

    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }


    let gender = document.getElementsByName("gender");
    let genderSelected = false;

    for (let i = 0; i < gender.length; i++) {
        if (gender[i].checked) {
            genderSelected = true;
            break;
        }
    }

    if (!genderSelected) {
        alert("Please select your gender");
        return false;
    }


    let dob = document.getElementById("dob").value.trim();

    if (dob === "") {
        alert("Date of Birth cannot be empty");
        return false;
    }

    let year = parseInt(dob.split("-")[0]);

    if (year < 1900 || year > 2016) {
        alert("Year must be between 1900 and 2016");
        return false;
    }

    let blood = document.getElementById("bloodgroup").value;
    if (blood === "") {
        alert("Please select your blood group");
        return false;
    }


    let degree = document.getElementsByName("degree");
    let degreeSelected = false;

    for (let i = 0; i < degree.length; i++) {
        if (degree[i].checked) {
            degreeSelected = true;
            break;
        }
    }

    if (!degreeSelected) {
        alert("Please select your degree");
        return false;
    }

    let photo = document.getElementById("photo").value;
    if (photo === "") {
        alert("Please upload your photo");
        return false;
    }

    return true;

}
