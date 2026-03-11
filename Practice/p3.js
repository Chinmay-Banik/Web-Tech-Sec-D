let inputAge = document.getElementById("age");
let message = document.getElementById("message");

inputAge.addEventListener("input", function () {

    let age = parseInt(inputAge.value);
    if (age < 40) {
        message.innerHTML = "To be a part of the community, you need to at least 40";
        message.style.color = "black";
    }
    else if (age >= 40 && age <= 50) {
        message.innerHTML = "You are the youngsters of this community";
        message.style.color = "black";
    }

    else if (age > 50) {
        message.innerHTML = "Top level members of the group";
        message.style.color = "red";
    }

})