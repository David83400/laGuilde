window.addEventListener('load', () => {
    leafletMap.loadMap();
});

/*document.querySelector(".listMap").addEventListener("load", () => {
    leafletMap.itemHoverEvent();
});*/

document.getElementById('pseudo').addEventListener('input', () => {
    inscriptionForm.pseudoVerif();
});

document.getElementById('email').addEventListener('input', () => {
    inscriptionForm.emailVerif();
});

document.getElementById('emailConfirm').addEventListener('input', () => {
    inscriptionForm.emailConfirmVerif();
});

document.getElementById('password').addEventListener('input', () => {
    inscriptionForm.passwordVerif();
});

document.getElementById('passwordConfirm').addEventListener('input', () => {
    inscriptionForm.passwordConfirmVerif();
});

document.getElementById('form').addEventListener('input', () => {
    inscriptionForm.verifForm();
});