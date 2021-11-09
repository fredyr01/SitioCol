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
          <h4 class="text-center">Formulario inscripción aspirante</h4>
        </div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="nombre" class="form-label">Nombres:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Escriba sus nombres" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar su nombre.</div>
            </div>
            <div class="col-md-6">
              <label for="apellido" class="form-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellido" placeholder="Escriba sus apellidos" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar su apellido.</div>
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
              <label for="formFile" class="form-label">Anexe su hoja de vida por favor (pdf): </label>
              <input class="form-control" type="file" id="formFile" required>
              <div class="invalid-feedback">Debe anexar su hoja de vida.</div>
            </div>
            <div class="col-md-6">
              <label for="cargo" class="form-label">Cargo al cual aspira</label>
              <select class="form-select" required aria-label="select example" id="cargo">
                <option value="">Seleccione el cargo</option>
                <option value="1">Profesor</option>
                <option value="2">Secretario</option>
                <option value="3">Ingeniero de sistemas</option>
              </select>
              <div class="invalid-feedback">Selecciona el cargo.</div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Agree to <a href="">terms and conditions</a>
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
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