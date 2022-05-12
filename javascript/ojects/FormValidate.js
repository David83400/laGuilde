class FormValidate {
    constructor(pseudoRegex, emailRegex) {
        this.pseudoRegex = pseudoRegex;
        this.emailRegex = emailRegex;
        this.pseudoInput = document.getElementById('pseudo');
        this.emailInput = document.getElementById('email');

        this.pseudoValidation;
        this.emailValidation;
        this.emailConfirmValidation;
        this.passwordValidation;
        this.passwordConfirmValidation;
        this.formValidation;

        this.emailConfirmInput = document.getElementById('emailConfirm');
        this.passwordInput = document.getElementById('password');
        this.passwordConfirmInput = document.getElementById('passwordConfirm');

    }

    pseudoVerif() {
        if ((!this.pseudoRegex.test(this.pseudoInput.value)) || (this.pseudoInput.value.length <= 4) || (this.pseudoInput.value.length >= 20)) {
            this.pseudoInput.style.borderColor = '#F86300';
            this.pseudoValidation = false;
        } else {
            this.pseudoInput.style.borderColor = '#81bd42';
            this.pseudoValidation = true;
        }
    }

    // méthode pour vérifier la validité de la réponse dans le champ prénom du formulaire
    emailVerif() {
        if (!this.emailRegex.test(this.emailInput.value)) {
            this.emailInput.style.borderColor = '#F86300';
            this.emailValidation = false;
        } else {
            this.emailInput.style.borderColor = '#81bd42';
            this.emailValidation = true;
        }
    }

    emailConfirmVerif() {
        if (this.emailConfirmInput.value !== this.emailInput.value) {
            this.emailConfirmInput.style.borderColor = '#F86300';
            this.emailConfirmValidation = false;
        } else {
            this.emailConfirmInput.style.borderColor = '#81bd42';
            this.emailConfirmValidation = true;
        }
    }

    passwordVerif() {
        if (this.passwordInput.value.length <= 7) {
            this.passwordInput.style.borderColor = '#F86300';
            this.passwordValidation = false;
        } else {
            this.passwordInput.style.borderColor = '#81bd42';
            this.passwordValidation = true;
        }
    }

    passwordConfirmVerif() {
        if (this.passwordConfirmInput.value !== this.passwordInput.value) {
            this.passwordConfirmInput.style.borderColor = '#F86300';
            this.passwordConfirmValidation = false;
        } else {
            this.passwordConfirmInput.style.borderColor = '#81bd42';
            this.passwordConfirmValidation = true;
        }
    }
    // méthode pour vérifier si les champs nom, prénom et le canvas sont rempli correctement
    verifForm() {
        if ((this.pseudoValidation === true) && (this.emailValidation === true) && (this.emailConfirmValidation === true) && (this.passwordValidation === true) && (this.passwordConfirmValidation === true)) {
            document.getElementById('inscription').removeAttribute('disabled');
            document.getElementById('inscription').classList.remove('blurButton');
            this.pseudoInput.setAttribute('disabled', '');
            this.emailInput.setAttribute('disabled', '');
            this.emailConfirmInput.setAttribute('disabled', '');
            this.passwordInput.setAttribute('disabled', '');
            this.passwordConfirmInput.setAttribute('disabled', '');
        }
    }
}