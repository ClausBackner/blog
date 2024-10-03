<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
</head>
<body>
    <div id="header">
        <h1 id="title">
          Responsive form
        </h1>
        <p id="description">
          Este es un diseño de un formulario responsive
        </p>
      </div>

      <main>

        <form id="survey-form">

          <div id="form-group">
            <label id="name-label">nombre</label>
            <input type= "text" name="name" id="name" class="formcontrol" placeholder="your name here" required>
          </div>

          <div id="form-group">
            <label id="email-label">mail</label>
            <input type= "email" name="email" id="email" class="formcontrol" placeholder="mail-example@tuagina.com" required>
          </div>

          <div id="form-group">
            <label id="number-label">edad (opcional)</label>
            <input type= "number" name="age" id="age" class="formcontrol" placeholder="your age here" min="18" max="75">
          </div>

          <div id="form-group">
            <label id="choose-rol">¿Cuál opción describe tu situación actual?</label>

            <select type= "dropdown" name="role" id="dropdown" class="formcontrol" required>
              <option disabled selected value> Seleccione una opción</option>
              <option value="student">Estudiante</option>
              <option value="student">Empleado</option>
              <option value="student">Independiente</option>
              <option value="student">Otra</option>
            </select>
          </div>

          <div id="form-group">
            <label id="recommend">Recomendaria este servicio a un amigo</label>

            <div id="recommend-option">
              <input name="user-recommend" type="radio" value="definitely" class="input-radio" checked>Definitivamente
            </div>

            <div id="recommend-option">
              <input name="user-recommend" type="radio" value="maybe" class="input-radio">Es probable
            </div>

            <div id="recommend-option">
              <input name="user-recommend" type="radio" value="not-sure" class="input-radio">No estoy seguro
            </div>
          </div>

          <div id="form-group">

            <label id="choose-rol">¿Que te gusto más del servicio?</label>

            <select type= "dropdown" name="role" id="role" class="formcontrol" required>
              <option disabled selected value> Seleccione una opción</option>
              <option value="student">Precio</option>
              <option value="student">Calidad</option>
              <option value="student">Tiempo de respuesta</option>
              <option value="student">todas las anteriores</option>
              <option value="student">Relación precio - calidad</option>
              <option value="student">Relación calidad - tiempo</option>
              <option value="student">Relación precio - tiempo</option>
              <option value="student">Otra</option>
              <option value="student">Nada</option>
            </select>


          </div>


          <div id="form-group">

            <label id="to-better">¿Qué aspectos debemos mejorar? <br>(elija todas las respuestas necesarias)</label>

            <div id="to-better-option">
              <input name="user-recommend" type="checkbox" value="client-services" class="input-check-box">Atención al cliente
            </div>

            <div id="to-better-option">
              <input name="user-recommend" type="checkbox" value="answer-time" class="input-check-box">Tiempo de Respuesta
            </div>

            <div id="to-better-option">
              <input name="user-recommend" type="checkbox" value="services-quality" class="input-check-box">Calidad del Servicio
            </div>

          </div>

          <div id="form-group">
            <label> Deja tu comentario</label>
            <textarea id="comment" name="comments" class="input-area" placeholder="escribe tus comentarios aquí..."></textarea>
          </div>

          <div id="form-group">
            <button type="submit" id="submit" class="submit-button">Enviar</button>

          </div>
        </form>
      </main>
</body>
</html>
