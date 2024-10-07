<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
</head>
<body>

<hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>

      <main>

        <form id="survey-form">

          <div id="form-group">
            <label id="name-label">nombre</label>
            <input type= "text" name="name" id="name" class="formcontrol" placeholder="Nombres completos" required>
          </div>
          <div id="form-group">
            <label id="name-label">apellido</label>
            <input type= "text" name="name" id="name" class="formcontrol" placeholder="Apellidos completos" required>
          </div>

          <div id="form-group">
            <label id="email-label">mail</label>
            <input type= "email" name="email" id="email" class="formcontrol" placeholder="mail-example@gmail.com" required>
          </div>

          <div id="form-group">
            <label id="number-label">edad</label>
            <input type= "number" name="age" id="age" class="formcontrol" placeholder="Tu edad" min="18" max="75">
          </div>
          <div id="form-group">
            <label id="number-label">telefono</label>
            <input type= "number" name="telephone" id="telephone" class="formcontrol" placeholder="Telefono" min="18" max="75">
          </div>
          <div id="form-group">
            <label id="name-label">Direccion</label>
            <input type= "text" name="address" id="address" class="formcontrol" placeholder="Dirección" required>
          </div>
          <div id="form-group">
            <label id="choose-rol">¿Servicio por el cual ser atendido?</label>

            <select type= "dropdown" name="role" id="dropdown" class="formcontrol" required>
              <option disabled selected value> Seleccione una opción</option>
              <option value="student">Restauraciones</option>
              <option value="student">Profilaxis</option>
              <option value="student">Rayos X</option>
              <option value="student">Blancamiento</option>
              <option value="student">Ortodoncia</option>
              <option value="student">Extracciones</option>
              <option value="student">Cirugias</option>
              <option value="student">Endodoncia</option>
              <option value="student">Protesis</option>
            </select>
          </div>
          <div id="form-group">
                <label for="fecha" class="formcontrol">Introduzca la fecha de la cita</label>
                <input id="fecha" class="fecha-hora" type="datetime-local"  required>
        </div>
          <div id="form-group">
            <label> Describir sintomas (opcional)</label>
            <textarea id="comment" name="comments" class="input-area" placeholder="escribe tus comentarios aquí..."></textarea>
          </div>

          <div id="form-group">
            <button type="submit" id="submit" class="submit-button">Enviar</button>

          </div>

        </form>

      </main>

</body>
</html>
