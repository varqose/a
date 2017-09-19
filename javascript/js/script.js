var jeden = document.getElementById("jeden");

function sprTekst(a) {
    if (a.value.length < 5) {
        a.style.borderColor = "red";
    } else {
        a.style.borderColor = "green";
    }
    
}



jeden.addEventListener("blur", sprTekst(jeden), false);