window.addEventListener('load', () => {
    leafletMap.loadMap();
});


/* ------------------------------------ Connection form animations ---------------------------------------- */
if (document.getElementById('connectionForm')) {
    document.getElementById('connectionForm').addEventListener('input', () => {
        connectionForm.formValidate();
    });
}

/* ------------------------------------ Contact form animations ---------------------------------------- */
if (document.getElementById('contactForm')) {
    document.getElementById('contactForm').addEventListener('input', () => {
        contactForm.formValidate();
    });
}

/* ------------------------------------ Register form animations ---------------------------------------- */
if (document.getElementById('registerForm')) {
    document.getElementById('registerForm').addEventListener('input', () => {
        registerForm.formValidate();
    });
}

/* ------------------------------------ Assistance form animations ---------------------------------------- */
if (document.getElementById('assistanceForm')) {
    document.getElementById('assistanceForm').addEventListener('input', () => {
        assistanceForm.formValidate();
    });
}

/* ------------------------------------ ChangeMdp form animations ---------------------------------------- */
if (document.getElementById('changeMdpForm')) {
    document.getElementById('changeMdpForm').addEventListener('input', () => {
        changeMdpForm.formValidate();
    });
}