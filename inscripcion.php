<?php
  include_once('template/header.php');
?>

<br><br><br>
<div class="container">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos quos reprehenderit blanditiis cupiditate qui ducimus at officia dolor eius, saepe quidem iste laboriosam repudiandae sequi est impedit? Consequatur facere illo, eum quaerat corporis perferendis aliquid asperiores ipsam non nemo sed.</p>
  <div class="row">
    <div class="col-md-2">
    </div>

    <div class="col-md-8 animate__animated animate__fadeIn">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Registro estudiante</h4>
        </div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="nombre" class="form-label">Nombres:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Escriba sus nombres" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar sus nombres.</div>
            </div>
            <div class="col-md-6">
              <label for="apellido" class="form-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellido" placeholder="Escriba sus apellidos" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar sus apellidos.</div>
            </div>
            <div class="col-md-6">
              <label for="tipoDoc" class="form-label">Tipo de documento</label>
              <select class="form-select" required aria-label="select example" id="tipoDoc">
                <option value="">Escoge el tipo de documento</option>
                <option value="1">Tarjeta de identidad</option>
                <option value="2">Cédula de ciudadanía</option>
                <option value="3">Pasaporte</option>
              </select>
              <div class="invalid-feedback">Selecciona el tipo de documento.</div>
            </div>
            <div class="col-md-6">
              <label for="documento" class="form-label">Número de documento:</label>
              <input type="text" class="form-control" id="documento" placeholder="Escriba su número de documento" required>
              <div class="invalid-feedback">Debe registrar su número de documento.</div>
            </div>
            <div class="col-md-6">
              <label for="direccion" class="form-label">Direccion de residencia:</label>
              <input type="text" class="form-control" id="direccion" placeholder="Escriba su dirección" required>
              <div class="invalid-feedback">Debe registrar su dirección de residencia.</div>
            </div>
            <div class="col-md-6">
              <label for="telefono" class="form-label">Celular:</label>
              <input type="text" class="form-control" id="telefono" placeholder="Escriba su número celular" required>
              <div class="invalid-feedback">Debe registrar su número de celular.</div>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email:</label>
              <input type="text" class="form-control" id="email" placeholder="Escriba su email" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar su email.</div>
            </div>
            <div class="col-md-6">
              <label for="fechaNac" class="form-label">Fecha de nacimiento:</label>
              <input type="date" class="form-control" id="fechaNac" required>
              <div class="invalid-feedback">Debe registrar su fecha de nacimiento.</div>
            </div>
            <div class="col-md-3">
              <label for="depto" class="form-label">Depto. nacimiento</label>
              <select class="form-select" required aria-label="select example" id="depto">
                <option value="">Escoge el departamento</option>
                <option value="1">Antioquia</option>
                <option value="2">Caldas</option>
                <option value="3">Tolima</option>
              </select>
              <div class="invalid-feedback">Selecciona el departamento</div>
            </div>
            <div class="col-md-3">
              <label for="ciudad" class="form-label">Ciudad nacimiento</label>
              <select class="form-select" required aria-label="select example ciudad" id="ciudad">
                <option value="">Escoge la ciudad</option>
                <option value="1">Medellin</option>
                <option value="2">Manizales</option>
                <option value="3">Ibagué</option>
              </select>
              <div class="invalid-feedback">Selecciona la ciudad</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="doc" class="form-label">Anexe su documento de identidad (.pdf): </label>
              <input class="form-control" type="file" id="doc" required>
              <div class="invalid-feedback">Debe anexar su documento de identidad.</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="foto" class="form-label">Anexe su foto (.jpg o .png): </label>
              <input class="form-control" type="file" id="foto" required>
              <div class="invalid-feedback">Debe anexar su foto.</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="eps" class="form-label">Anexe su certificado EPS (.pdf): </label>
              <input class="form-control" type="file" id="eps" required>
              <div class="invalid-feedback">Debe anexar su certificado EPS.</div>
            </div>
            <div class="col-md-6">
              <label for="gradoCurso" class="form-label">Grado a cursar</label>
              <select class="form-select" required aria-label="select example" id="gradoCurso">
                <option value="">Escoge el grado a cursar</option>
                <option value="1">Primero</option>
                <option value="2">Segundo</option>
                <option value="3">Tercero</option>
              </select>
              <div class="invalid-feedback">Selecciona el grado a cursar.</div>
            </div>
            <hr>
            <h4 class="text-center">Datos acudiente</h4>
            <div class="col-md-6">
              <label for="nombreAcu" class="form-label">Nombres:</label>
              <input type="text" class="form-control" id="nombreAcu" placeholder="Escriba sus nombres" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar sus nombres.</div>
            </div>
            <div class="col-md-6">
              <label for="apellidoAcu" class="form-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellidoAcu" placeholder="Escriba sus apellidos" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar sus apellidos.</div>
            </div>
            <div class="col-md-6">
              <label for="documentoAcu" class="form-label">Número de documento:</label>
              <input type="text" class="form-control" id="documentoAcu" placeholder="Escriba su número de documento" required>
              <div class="invalid-feedback">Debe registrar su número de documento.</div>
            </div>
            <div class="col-md-6">
              <label for="direccionAcu" class="form-label">Direccion de residencia:</label>
              <input type="text" class="form-control" id="direccionAcu" placeholder="Escriba su dirección" required>
              <div class="invalid-feedback">Debe registrar su dirección de residencia.</div>
            </div>
            <div class="col-md-6">
              <label for="telefonoAcu" class="form-label">Celular:</label>
              <input type="text" class="form-control" id="telefonoAcu" placeholder="Escriba su número celular" required>
              <div class="invalid-feedback">Debe registrar su número de celular.</div>
            </div>
            <div class="col-md-6">
              <label for="emailAcu" class="form-label">Email:</label>
              <input type="text" class="form-control" id="emailAcu" placeholder="Escriba su email" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar su email.</div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Acepto <a href="">terminos y condiciones</a>
                </label>
                <div class="invalid-feedback">
                  Debe aceptar terminos y condiciones antes de enviar la información.
                </div>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
      </div>
    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>


<?php
  include_once('template/footer.php');
?>