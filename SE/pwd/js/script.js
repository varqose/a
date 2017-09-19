document.getElementById("passwd").addEventListener("keyup", checkPwd, false);

function checkPwd() {
    var pass = document.getElementById("passwd");
    var result = document.getElementById("pwdresult");
    if (pass.value.length < 8) {
        result.textContent = "za krótkie hasło";
        } else {
            result.removeAttribute(textContent);
            result.textContent = "średnie hasło";
        }
        document.getElementById('typo').textContent = pass.value
    }
}

