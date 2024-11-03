<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restauraciones</title>
</head>
<body>
    @include('partials.navegacion')
<h1>Restauraciones</h1>

<template id="image-circle-component">
  <div style="position: relative; max-width: 600px; margin: auto;">
    <div style="text-align: center;">
      <img id="centralImage" src="" style="width: 300px; height: 300px; border-radius: 50%; transition: all 0.5s ease; cursor: pointer;" onclick="openModal();">
    </div>

    <div id="circle" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 350px; height: 350px; border-radius: 50%; overflow: hidden;">
      <!-- Small circular images will be added here -->
      <img src="" onclick="changeImage(this.src)" style="width: 100%; height: 100%; border-radius: 50%; position: absolute;">
      <img src="" onclick="changeImage(this.src)" style="width: 100%; height: 100%; border-radius: 50%; position: absolute; transform: rotate(60deg);">
      <img src="" onclick="changeImage(this.src)" style="width: 100%; height: 100%; border-radius: 50%; position: absolute; transform: rotate(120deg);">
      <img src="" onclick="changeImage(this.src)" style="width: 100%; height: 100%; border-radius: 50%; position: absolute; transform: rotate(180deg);">
      <img src="" onclick="changeImage(this.src)" style="width: 100%; height: 100%; border-radius: 50%; position: absolute; transform: rotate(240deg);">
      <img src="" onclick="changeImage(this.src)" style="width: 100%; height: 100%; border-radius: 50%; position: absolute; transform: rotate(300deg);">
    </div>

    <div id="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.8); z-index: 999; justify-content: center; align-items: center;">
      <span onclick="closeModal()" style="position: absolute; top: 20px; right: 20px; color: white; font-size: 30px; cursor: pointer;">&times;</span>
      <img id="modalImage" src="" style="max-width: 90%; max-height: 90%;">
    </div>
  </div>

  <script>
    function changeImage(imageUrl) {
      document.getElementById('centralImage').src = imageUrl;
    }

    function openModal() {
      document.getElementById('modalImage').src = document.getElementById('centralImage').src;
      document.getElementById('modal').style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }
  </script>

  <style>
    #circle img {
      transition: 0.3s;
    }
    #circle img:hover {
      transform: scale(1.1);
      cursor: pointer;
    }
  </style>
</template>

<script>
  // Function to initialize the component
  function initializeImageCircleComponent(centralImageUrl, smallImageUrls) {
    const template = document.getElementById('image-circle-component');
    const clone = template.content.cloneNode(true);

    // Set the central image URL
    clone.querySelector('#centralImage').src = centralImageUrl;

    // Update small images
    const smallImages = clone.querySelectorAll('#circle img');
    smallImageUrls.forEach((url, index) => {
      if (smallImages[index]) {
        smallImages[index].src = url;
      }
    });

    document.body.appendChild(clone);
  }

  // Example usage
  document.addEventListener('DOMContentLoaded', () => {
    const centralImageUrl = 'https://cdn.prod.website-files.com/66183cdcc69331bd58af1786/66646552144fb707a8d2b6a0_22-1024x731.jpeg';
    const smallImageUrls = [
      'https://www.colgate.com/content/dam/cp-sites/oral-care/oral-care-center/global/article/gscp/latam/cheerful-man-dentist-talking.jpg',
      'https://cdn.prod.website-files.com/66183cdcc69331bd58af1786/66646552144fb707a8d2b6a0_22-1024x731.jpeg',
      'https://www.postgradounab.cl/wp-content/uploads/2022/10/400x243-Conoce-los-5-tipos-de-cirugia-dental-mas-requeridas.jpg',
      'https://i0.wp.com/onsmile.cl/wp-content/uploads/2024/09/0dac0-profilaxis-dental.jpg?fit=1080%2C1080&ssl=1',
      'https://www.clinicagramadent.com/wp-content/uploads/2017/07/blanqueamiento-tratamientos-clinica-dental-gramadent.jpg',
      'https://static.wixstatic.com/media/ca9b4b9a4c494157b7aac8c5ad1a334d.jpg/v1/fill/w_568,h_378,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/ca9b4b9a4c494157b7aac8c5ad1a334d.jpg'
    ];
    initializeImageCircleComponent(centralImageUrl, smallImageUrls);
  });
</script>
    <template id="appointment-form">
      <form style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; margin-bottom: 20px;">Reservar Cita Médica</h2>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">Nombres:</label>
          <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">Apellidos:</label>
          <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">Teléfono:</label>
          <input type="tel" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">Dirección:</label>
          <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">DNI:</label>
          <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">Tipo de Consulta:</label>
          <select required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <option value="">Seleccione...</option>
            <option value="blanqueamiento">Blanqueamiento</option>
            <option value="rayos_x">Rayos X</option>
            <option value="ortodoncia">Ortodoncia</option>
            <option value="endodoncia">Endodoncia</option>
            <option value="cirugia">Cirugía</option>
            <option value="protesis">Prótesis</option>
          </select>
        </div>
        <div style="margin-bottom: 15px;">
          <label style="display: block; font-weight: bold;">Fecha y Hora:</label>
          <input type="datetime-local" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
          Reservar
        </button>
      </form>
    </template>

    <script>
      // To render the form, you can use JavaScript like below
      document.addEventListener('DOMContentLoaded', () => {
        const template = document.getElementById('appointment-form');
        document.body.appendChild(template.content.cloneNode(true));
      });
    </script>




</div>



</body>
</html>
