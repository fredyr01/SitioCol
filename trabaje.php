<?php
  include_once('template/header.php');
?>
<br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-2">

      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Formulario inscripción
          </div>
          <div class="card-body">
          <form class="needs-validation" novalidate>
            <div class="form-row">
            <div class="col-md-5 mb-3">
            <label for="validationCustom01">Nombres</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
            <div class="valid-feedback">
            Looks good!
            </div>
            </div>
            <div class="col-md-5 mb-3">
            <label for="validationCustom02">Apellido</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
            <div class="valid-feedback">
            Looks good!
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationCustomEmail">Email</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <input type="text" class="form-control" id="validationCustomEmail" placeholder=" Email " 
            aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
            Please choose a Email.
            </div>
            </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationCustom03">Departamento</label>
            <input type="text" class="form-control" id="validationCustom03" placeholder="Departamento" required>
            <div class="invalid-feedback">
            Please provide a valid city.
            </div>
            </div>
            <div class="col-md-5 mb-3">
            <label for="validationCustom04">Ciudad</label>
            <input type="text" class="form-control" id="validationCustom04" placeholder="Ciudad" required>
            <div class="invalid-feedback">
            Please provide a valid state.
            </div>
            </div>
            <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
            Acepto <a href="#">terminos y condiciones</a>
            </label>
            <div class="invalid-feedback">
            You must agree before submitting.
            </div>
            </div>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
  <script>
     // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
     'use strict'; 
    window.addEventListener('load', function () {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
    form.classList.add('was-validated');
       }, false);
       });
      }, false);
     })();
    </script>

<?php
  include_once('template/footer.php');
?>