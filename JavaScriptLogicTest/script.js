function validateLogin() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var successNotification = document.getElementById("success-notification");
    var errorNotification = document.getElementById("error-notification");

    if (email === "kevinreynaufal@gmail.com" && password === "test12345") {
        successNotification.style.display = "block";
        errorNotification.style.display = "none";
        setTimeout(function () {
            successNotification.style.display = "none";
        }, 3000);
    } else {
        successNotification.style.display = "none";
        errorNotification.style.display = "block";
        setTimeout(function () {
            errorNotification.style.display = "none";
        }, 3000);
    }
}

function formLoop() {
    const input = document.getElementById("jumlah");
    const output = document.getElementById("output");

    const jumlah = parseInt(input.value);

    let outputText = "";

    for (let i = 1; i <= jumlah; i++) {
        outputText += `Looping ke-${i}<br>`;
    }

    output.innerHTML = outputText;
}