function sprawdzImie(){
	var imie = document.getElementsByName("imie")[0];
	if(imie.value.length <1 || /[^a-zA-Zęółśążźćń]/.test(imie.value) || /\d/.test(imie.value)){
		imie.style.borderColor = "red";
		return false;
	} else {
		imie.removeAttribute("style");
		return true;
	}
}
//[^a-zA-Zęółśążźćń]
function sprawdzNazwisko(){
	var nazwisko = document.getElementsByName("nazwisko")[0];
	if(nazwisko.value.length <1 || /[^a-zA-Zęółśążźćń]/.test(nazwisko.value) || /\d/.test(nazwisko.value)){
		nazwisko.style.borderColor = "red";
		return false;
	} else {
		nazwisko.removeAttribute("style");
		return true;
	}
}

function sprawdzPESEL(){
	var pesel = document.getElementsByName("pesel")[0];
	if(pesel.value.length !==11 || /[^\d]/.test(pesel.value)){
		pesel.style.borderColor = "red";
		return false;
	} else {
		pesel.removeAttribute("style");
		return true;
	}
}
document.getElementsByName("imie")[0].addEventListener('blur', sprawdzImie, false);
document.getElementsByName("nazwisko")[0].addEventListener('blur', sprawdzNazwisko, false);
document.getElementsByName("pesel")[0].addEventListener('blur', sprawdzPESEL, false);
