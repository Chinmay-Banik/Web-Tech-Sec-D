const p1 = 300;
const p2 = 200;
const p3 = 100;

let q1 = document.getElementById("q1");
let q2 = document.getElementById("q2");
let q3 = document.getElementById("q3");

let btn = document.getElementById("calculateTotal");

q1.addEventListener("input", calculateTotal);
q2.addEventListener("input", calculateTotal);
q3.addEventListener("input", calculateTotal);

function calculateTotal() {

    if (q1.value < 0) {
        q1.value = 0;
    }
    if (q2.value < 0) {
        q2.value = 0;
    }
    if (q3.value < 0) {
        q3.value = 0;
    }

    let t1 = p1 * q1.value;
    let t2 = p2 * q2.value;
    let t3 = p3 * q3.value;

    document.getElementById("t1").value = t1;
    document.getElementById("t2").value = t2;
    document.getElementById("t3").value = t3;
}

btn.addEventListener("click", function () {
    let total = (p1 * parseInt(q1.value)) + (p2 * parseInt(q2.value)) + (p3 * parseInt(q3.value));
    document.getElementById("grandTotal").value = total;

    if (total > 1000) {
        alert("Congratulations! You are eligible for a gift coupon!");
    }
});