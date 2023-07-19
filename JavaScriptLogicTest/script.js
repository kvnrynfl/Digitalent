
/**
 * 
 *  @note tab login  
 *  
 */
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

/**
 * 
 *  @note tab formLoop  
 *  
 */
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

/**
 * 
 *  @note tab kalkulator  
 *  
*/
function alertWarning(message) {
    var alertWarning = document.getElementById("warning-alert");

    alertWarning.style.display = "block";
    alertWarning.innerHTML = message;
    setTimeout(function () {
        errorNotification.style.display = "none";
    }, 3000);
}

function validateKalkulator() {
    const inputPertama = document.getElementById("input-pertama").value;
    const inputKedua = document.getElementById("input-kedua").value;
    const inputOption = document.getElementById("input-option").value;

    const divKalkulator = document.getElementById("div-kalkulator");
    const outputKalkulator = document.getElementById("output-kalkulator");

    if (inputPertama == "" || inputPertama == null) {
        return alertWarning("Input Pertama Wajib Di Isi");
    } else if (inputKedua == "" || inputKedua == null) {
        return alertWarning("Input Kedua Wajib Di Isi");
    } else if (inputOption == "" || inputOption == null) {
        return alertWarning("Option Wajib Di Isi");
    }

    divKalkulator.style.display = "flex";

    jQuery.ajax({
        type: "POST",
        url: 'controller/KalkulatorController.php',
        dataType: 'json',
        data: { inputPertama: parseFloat(inputPertama), inputKedua: parseFloat(inputKedua), option: inputOption },
        success: function (hasil) {
            outputKalkulator.innerHTML = hasil;
        }
    });
}
