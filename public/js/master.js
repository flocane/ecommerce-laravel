window.addEventListener('load',function(){

  //para hacer pasar los paneles
  
    let panelOne = $('.gssform-panel.two').height(),
      panelTwo = $('.gssform-panel.two')[0].scrollHeight;

    $('.gssform-panel.two').not('.gssform-panel.two.active').on('click', function(e) {
      e.preventDefault();

      $('.gssform-toggle').addClass('visible');
      $('.gssform-panel.one').addClass('hidden');
      $('.gssform-panel.two').addClass('active');
      
    });

    $('.gssform-toggle').on('click', function(e) {
      e.preventDefault();
      $(this).removeClass('visible');
      $('.gssform-panel.one').removeClass('hidden');
      $('.gssform-panel.two').removeClass('active');
    });


    //VALIDACIONES PARA FORMULARIO
  let fomulario = document.querySelector('.formReg');
  let botonClickAqui = document.getElementById('clickAqui');
  console.log(botonClickAqui);
  console.log(formulario.elements);
  formulario.elements.name.focus();

  formulario.onsubmit = function(evento) {
    //Si los campos no pasan las validaciones, entonces no envio el formulario, que es la acción por defecto del submit, en el caso contrario este se envía.
    if (!validateRegisterForm()) {
      evento.preventDefault()
    }else{
      formulario.submit();
    }
  }

  botonClickAqui.addEventListener('click', function (){ 
    
  });


    //Esta es la función que valida todos los campos del formulario
    function validateRegisterForm() {
       let {name, email, password, password_confirmation, termsCondition} = formulario.elements;
       console.log(formulario.elements);
      
       //valido cada campo
      if (!validatename(name)) return false; 
      if (!validateEmail(email)) return false;
      if (!validatePassword(password)) return false;
      if (!validatePasswordRepeat(password, password_confirmation)) return false;
      if (!validateTermsCondition(termsCondition)) return false;
      return true;
      }


      function validatename(name) {
        let errorname = document.getElementById('errorname');
        if (name.value.length < 1){
          errorname.innerHTML = "Nombre de usuario invalido";
          errorname.classList.add('alert-danger');
          name.classList.add('is-invalid');
          return false;
        } else{
          errorname.innerHTML = "";
          errorname.classList.remove('alert-danger');
          name.classList.remove('is-invalid');
          name.classList.add('is-valid');
          formulario.elements.email.focus();
          return true;
        }
    
       // swal('Error', 'Ingrese un nombre de usuario válido', 'error')
        
      }

      //valido email
      function validateEmail(email) {
        //Esta es una expresión regular que tome de stack overflow, para validar el email por esta vía.
        let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        let error = document.getElementById('errorEmail');
        //Aquí hago uso del método test() de javascript, encargado de validar una expresión regular, esta retorna un booleano
        if (!re.test(email.value)){ 
          //Aquí hago uso de las clases de bootstrap, para hacer el efceto visual de los colores por si hay un error o no.        
          email.classList.add('is-invalid'); 
          console.log(errorEmail);
          error.innerHTML= "Debe colocar un email válido";
          error.classList.add('alert-danger');
          //errorEmail.classList.add('alert-danger');
         // email.addEventListener('change',cambioNombre);
        return false;
      }else{
        error.innerHTML= "";
        error.classList.remove('alert-danger');
        email.classList.remove('is-invalid'); 
        email.classList.add('is-valid');
        formulario.elements.password.focus()
        return true;
      }
      }

      //valida password
      function validatePassword(password) {
        //Atrape esta regex desde stack overflow
        let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
        let errorPassword = document.getElementById('errorPassword');
  
        if (!re.test(password.value)) {
          errorPassword.innerHTML = "Debe especificar una contraseña válida";
          errorPassword.classList.add('alert-danger');
          password.classList.add('is-invalid');
          return false;  
  
        }else{
          errorPassword.innerHTML = "";
          errorPassword.classList.remove('alert-danger');
          password.classList.remove('is-invalid');
          password.classList.add('is-valid');
          formulario.elements.passwordRepeat.focus();
          return true;
        }    
      }

    // valida repear password
      function validatePasswordRepeat(password,repeat){
      console.log(password.value);
      console.log(repeat.value);
      if (password.value!= repeat.value) {
        errorPasswordRepeat.innerHTML = "Las contraseñas no coinciden";
        errorPasswordRepeat .classList.add('alert-danger');
        repeat.classList.add('is-invalid');
        return false;  

      }else{
        errorPasswordRepeat .innerHTML = "";
        errorPasswordRepeat.classList.remove('alert-danger');
        repeat.classList.remove('is-invalid');
        repeat.classList.add('is-valid');
        formulario.elements.termsCondition.focus();
        console.log('hasta aca ok')
        // swal('Error', 'Ingrese una contraseña válida', 'error')
        return true;
      }  
      //swal('Error', 'Las contraseñas no son iguales', 'error')
      }


      // valida terminos y condiciones
      function validateTermsCondition(termsConditionChecked) {
        let errorTerminos = document.getElementById('errorTerminos');
        console.log ('errorTerminos');
        if (!termsConditionChecked.checked) {
          console.log('Entro terminos');
          console.log(termsConditionChecked);
          console.log(termsConditionChecked.checked);
          errorTerminos.innerHTML = "Debe aceptar los terminos y condiciones";
          errorTerminos.classList.add('alert-danger');
          termsConditionChecked.classList.add('is-invalid');
          return false;
        }else{
          errorTerminos.innerHTML = "";
          errorTerminos.classList.remove('alert-danger');
          termsConditionChecked.classList.remove('is-invalid');
          termsConditionChecked.classList.add('is-valid');
          console.log("Se va a salir de terminos");
          return true;
        }
       // swal('Error', 'Debe aceptar los términos y condiciones', 'error')
      }

  });
