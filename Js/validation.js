function validateForm() 
{let Name = document.getElementById("name").value.trim();

if (Name === "") {
    alert("Name cannot be empty");
    return false;
}

let words = Name.split(" ");
if (words.length < 2) {
    alert("Name must contain at least two words");
    return false;
}

let nameRegex = /^[A-Za-z][A-Za-z.\- ]*$/;

if (!nameRegex.test(Name)) {
    alert("Name can contain only letters, dot(.) or dash(-) and must start with a letter");
    return false;
}
}
