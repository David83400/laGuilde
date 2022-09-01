/**
 * Manage the animations of the forms
 */
class FormValidate {
    constructor(form, inputs = [], button) {
        this.pseudoRegex = /^[a-zA-Z0-9éèê_-]+$/;
        this.emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        this.form = form.split('Form');
        this.inputs = inputs;
        this.button = document.getElementById(button);
    }

    /**
     * Launch animations on each inputs and validate the forms
     */
    formValidate() {
        this.validity = [];

        this.inputs.forEach(element => {
            if (typeof element !== 'undefined' && element !== null) {
                if (element === 'pseudo') {
                    this.pseudo = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.splice(0, this.validity.length, this.pseudoVerif());
                } else if (element === 'email') {
                    this.email = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.emailVerif());
                } else if (element === 'emailConfirm') {
                    this.emailConfirm = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.emailConfirmVerif());
                } else if (element === 'password') {
                    this.password = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.passwordVerif());
                } else if (element === 'oldPassword') {
                    this.password = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.passwordVerif());
                } else if (element === 'passwordConfirm') {
                    this.passwordConfirm = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.passwordConfirmVerif());
                } else if (element === 'object') {
                    this.object = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.objectVerif());
                } else if (element === 'title') {
                    this.title = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.titleVerif());
                } else if (element === 'message') {
                    this.message = document.getElementById(this.form[0] + element.charAt(0).toUpperCase() + element.slice(1));
                    this.validity.push(this.messageVerif());
                }
            }


            const formValidation = (boolValid) => boolValid === true;

            if (this.validity.every(formValidation)) {
                this.button.removeAttribute('disabled');
                this.button.classList.remove('blurButton');
            } else {
                this.button.setAttribute('disabled', '');
                this.button.classList.add('blurButton');
            };
        });
    }

    /**
     * Manage the entered value in the pseudo input
     */
    pseudoVerif() {
        if ((!this.pseudoRegex.test(this.pseudo.value)) || (this.pseudo.value.length <= 4) || (this.pseudo.value.length >= 20)) {
            this.pseudo.classList.remove('formBorder');
            this.pseudo.style.borderColor = '#F86300';
            return false;
        } else {
            this.pseudo.classList.remove('formBorder');
            this.pseudo.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the entered value in the email input
     */
    emailVerif() {
        if (!this.emailRegex.test(this.email.value)) {
            this.email.classList.remove('formBorder');
            this.email.style.borderColor = '#F86300';
            return false;
        } else {
            this.email.classList.remove('formBorder');
            this.email.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the entered value in the email confirm input
     */
    emailConfirmVerif() {
        if (this.emailConfirm.value === '' || this.emailConfirm.value !== this.email.value) {
            this.emailConfirm.classList.remove('formBorder');
            this.emailConfirm.style.borderColor = '#F86300';
            return false;
        } else {
            this.emailConfirm.classList.remove('formBorder');
            this.emailConfirm.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the entered value in the password input
     */
    passwordVerif() {
        if (this.password.value === '' || this.password.value.length <= 7) {
            this.password.classList.remove('formBorder');
            this.password.style.borderColor = '#F86300';
            return false;
        } else {
            this.password.classList.remove('formBorder');
            this.password.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the entered value in the password confirm input
     */
    passwordConfirmVerif() {
        if (this.passwordConfirm.value === '' || this.passwordConfirm.value !== this.password.value) {
            this.passwordConfirm.classList.remove('formBorder');
            this.passwordConfirm.style.borderColor = '#F86300';
            return false;
        } else {
            this.passwordConfirm.classList.remove('formBorder');
            this.passwordConfirm.style.borderColor = '#81bd42';
            this.password.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the selected value in the select input
     */
    objectVerif() {
        if (this.object.value === 'default') {
            this.object.classList.remove('formBorder');
            this.object.style.borderColor = '#F86300';
            return false;
        } else {
            this.object.classList.remove('formBorder');
            this.object.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the entered value in the title input
     */
    titleVerif() {
        if (this.title.value.length <= 5) {
            this.title.classList.remove('formBorder');
            this.title.style.borderColor = '#F86300';
            return false;
        } else {
            this.title.classList.remove('formBorder');
            this.title.style.borderColor = '#81bd42';
            return true;
        }
    }

    /**
     * Manage the entered value in the message textarea
     */
    messageVerif() {
        if (this.message.value.length <= 5) {
            this.message.classList.remove('formBorder');
            this.message.style.borderColor = '#F86300';
            return false;
        } else {
            this.message.classList.remove('formBorder');
            this.message.style.borderColor = '#81bd42';
            return true;
        }
    }

}
