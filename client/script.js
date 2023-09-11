document.addEventListener("DOMContentLoaded", () => {

    // Validation Function
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

    // Update Date and Time Function
    function updateDateTime() {
        const now = new Date();
        document.getElementById("date").innerText = now.toDateString();
        document.getElementById("time").innerText = now.toTimeString().substring(0, 8);
    }

    // Initial Date Time Update
    updateDateTime();
    setInterval(updateDateTime, 1000);
    
    // Play Background Music (Assuming you have a background-music element)
    document.getElementById("background-music").play();
});
