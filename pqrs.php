<?php
  include_once('template/header.php');
?>
<br><br><br>
<div class="container">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos quos reprehenderit blanditiis cupiditate qui ducimus at officia dolor eius, saepe quidem iste laboriosam repudiandae sequi est impedit? Consequatur facere illo, eum quaerat corporis perferendis aliquid asperiores ipsam non nemo sed. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur provident facere similique nostrum. Tempora, quisquam.</p>
  <div class="row">
    <div class="col-md-2">
    </div>

    <div class="col-md-8 animate__animated animate__fadeIn">
      <div class="card ">
        <div class="card-header">
          <h4 class="text-center">P.Q.R.S.</h4>
        </div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
              <label for="nombre" class="form-label">Nombre completo: <span class="requerido">*</span></label>
              <input type="text" class="form-control" id="nombre" placeholder="Escriba su nombre completo" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar su nombre completo.</div>
            </div>
            <div class="col-md-6">
              <label for="cedula" class="form-label">Número de documento: <span class="requerido">*</span></label>
              <input type="text" class="form-control" id="cedula" placeholder="Digite su número de cédula" required>
              <div class="invalid-feedback">Debe registrar su número de cédula.</div>
            </div>
            <div class="col-md-6">
              <label for="direccion" class="form-label">Direccion de residencia: <span class="requerido">*</span></label>
              <input type="text" class="form-control" id="direccion" placeholder="Escriba su dirección" required>
              <div class="invalid-feedback">Debe registrar su dirección de residencia.</div>
            </div>
            <div class="col-md-6">
              <label for="telefono" class="form-label">Celular: <span class="requerido">*</span></label>
              <input type="text" class="form-control" id="telefono" placeholder="Escriba su número celular" required>
              <div class="invalid-feedback">Debe registrar su número de celular.</div>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email: <span class="requerido">*</span></label>
              <input type="text" class="form-control" id="email" placeholder="Escriba su email" required>
              <!-- <div class="valid-feedback">Ok</div> -->
              <div class="invalid-feedback">Debe registrar su email.</div>
            </div>
            <div class="col-md-6">
              <label for="asunto" class="form-label">Asunto: <span class="requerido">*</span></label>
              <select class="form-select" required aria-label="select example" id="asunto">
                <option value="">Seleccione el asunto</option>
                <option value="1">Asunto #1</option>
                <option value="2">Asunto #2</option>
                <option value="3">Asunto #3</option>
              </select>
              <div class="invalid-feedback">Selecciona el asunto.</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="formFile" class="form-label">Si presenta algún documento, anexelo por favor: </label>
              <input class="form-control" type="file" id="formFile">
              <!-- <div class="invalid-feedback">Debe anexar su hoja de vida.</div> -->
            </div>
            <div class="col-md-12">
              <label for="mensaje" class="form-label">Mensaje: <span class="requerido">*</span></label>
              <textarea class="form-control" placeholder="Escriba su mensaje aquí" required></textarea>
              <div class="invalid-feedback">Escriba el mensaje.</div>
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