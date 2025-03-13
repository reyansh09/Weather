function showButton() {
    document.getElementById("weather-btn").style.display = "inline-block";
}

function hideButton() {
    let input = document.querySelector(".input-group").value;
    if (!input) {
        document.getElementById("weather-btn").style.display = "none";
    }
}