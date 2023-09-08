function validateForm() {
    let x = document.getElementById("x").value;
    let y = document.getElementById("y").value;
    let r = document.getElementById("r").value;

    if (isNaN(x) || isNaN(y) || isNaN(r) || r < 0) {
        alert("Invalid input! Please enter valid numbers. R should be positive.");
        return false;
    }
    return true;
}
