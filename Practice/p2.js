let userName = document.getElementById("userName");

userName.addEventListener("input", function() {
    this.value = this.value.toUpperCase();
});