window.onload = function () {
    let contactForm = document.querySelector('#formulario');
    contactForm.elements.name.focus();

    contactForm.onsubmit = function (evento) {
        if (!validateContactForm()) {
            evento.preventDefault()
        } else {
            contactForm.submit()
        }
    }
    //Validacion de cada campo
    function validateContactForm() {
        let { name, phone, email} = contactForm.elements
        if (!validateName(name)) return false;
        if (!validatePhone(phone)) return false;
        if (!validateEmail(email)) return false;
        if (!validateMessage(mensaje)) return false;
        return true;
    }

    function validateName(name) {
        let errorName = document.getElementById('errorName');
        if (name.value.length < 1) {
            errorName.innerHTML = "Por favor ingrese su nombre";
            errorName.classList.add('alert-danger');
            name.classList.add('is-invalid');
            return false;
        } else {
            errorName.innerHTML = "";
            errorName.classList.remove('alert-danger');
            name.classList.remove('is-invalid');
            name.classList.add('is-valid');
            contactForm.elements.name.focus();
            return true;
        }
    }
    function validatePhone(phone) {
        let errorPhone = document.getElementById('errorPhone');
        if (phone.value.length < 1) {
            errorPhone.innerHTML = "El numero de telefono es Requerido";
            errorPhone.classList.add('alert-danger');
            phone.classList.add('is-invalid');
            return false;
        } else if (isNaN(phone.value)) {
            errorPhone.innerHTML = "Ingresar solo numeros";
            errorPhone.classList.add('alert-danger');
            phone.classList.add('is-invalid');
            return false;
        } else {
            errorPhone.innerHTML = "";
            errorPhone.classList.remove('alert-danger');
            phone.classList.remove('is-invalid');
            phone.classList.add('is-valid');
            contactForm.elements.phone.focus();
            return true;
        }
    }
    function validateEmail(email) {
        let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        let errorEmail = document.getElementById('errorEmail');
        if (email.value.length < 1) {
            // if (!re.test(email.value) && email.value.length < 1){
            errorEmail.innerHTML = "Debe Ingresar un Correo Electronico";
            errorEmail.classList.add('alert-danger');
            email.classList.add('is-invalid');
            //errorEmail.classList.add('alert-danger');
            // email.addEventListener('change',cambioNombre);
            return false
        } else if (!re.test(email.value)) {
            errorEmail.innerHTML = "Debe Ingresar un Correo Valido";
            errorEmail.classList.add('alert-danger');
            email.classList.add('is-invalid');
            return false
        } else {
            errorEmail.innerHTML = "";
            errorEmail.classList.remove('alert-danger');
            email.classList.remove('is-invalid');
            email.classList.add('is-valid');
            contactForm.elements.email.focus();
            return true;
        }
    }
 }


