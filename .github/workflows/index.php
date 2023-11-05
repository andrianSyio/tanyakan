<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Open+Sans&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Dyou | Jawab Soalmu Dengan Cepat</title>
  </head>
  <style>
    body{
      margin: 0;
      padding: 0;
      background: #fff;
      overflow: hidden;
    }
    .forKamera{
      width: 100%;
      height: 100vh;
    }
    .forKamera > video{
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }
    .content{
      z-index: 10;
      position: absolute;
      inset: 0;
    }
    .navbar{
      padding: 5%;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }
    .footer{
      position: fixed;
      bottom: -5%;
      display: flex;
      flex-wrap: wrap;
      flex: 100%;
      width: 80%;
      margin: 10%;
      gap: 10px;
    }
    .footer > h4{
      align-items: center;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      font-family: 'Karla',Sans-Serif;
      background: #fcf7f8;
      padding: 5%;
      border-radius: 20px;
      justify-content: center;
    }
    #capture{
      flex: 55%;
      width: 30%;
      height: 30%;
    }
    #item{
      flex: 10%;
      border-radius: 50%;
    }
    #info{
      background: #fcf7f8;
      padding: 2%;
      border-radius: 50%;
    }
    .float-bg{
      background: #00000081;
      z-index: 99990;
      position: absolute;
      inset: 0;
    }
    .float{
      background: #fcf7f8;
      padding: 10%;
      font-family: 'Karla',Sans-Serif;
      bottom: 10%;
      border-radius: 10px;
      margin: 5%;
    }
    #rules > span{
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }
    #rules > span > img, #rules > span > h4{
      flex: 20%;
    }
    #rules > span > img{
      width: 30%;
    }
    #izin{
      background: #de2a2a;
      padding: 5%;
      text-align: center;
      border-radius: 10px;
      color: #fcf7f8;
      border: 2px solid #de2a2a;
    }
    #close:hover, #izin:hover{
      background: #fcf7f8;
      border: 2px solid #202020;
      color: #202020;
    }
    #eror > h3{
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }
    #eror > h3 > ion-icon{
      color: #de2a2abc;
    }
    #load, #izinkan, #upload, #eror{
      display: none;
    }
    #load > span{
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }
    #load > span > img{
      width: 30%;
    }
    #upload > img{
      width: 90%;
    }
    #upLo{
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 10px;
      justify-content: center;
    }
    #upLo > img{
      flex: 30%;
      width: 30%;
    }
    #upLo > h4{
      flex: 50%;
    }
  </style>
  <body>
    <div class="forKamera">
      <video id="video" width="640" height="480" autoplay playsinline></video>
    </div>
    <div class="content">
      <div class="wrapper">
        <div class="navbar">
          <ion-icon size="large" id="info" name="help-circle-outline"></ion-icon>
        </div>
        <div class="footer">
          <h4 id="capture"><ion-icon size="large" name="camera-outline"></ion-icon></h4>
          <h4 id="pilihgambar"><ion-icon size="large" name="images-outline"></ion-icon></h4>
        </div>
      </div>
      <div class="float-bg" id="bg">
        <div class="float" id="rules">
          <h2>Cara Penggunaan</h2>
          <span>
            <img src="path/img/camera.png" alt="kamera">
            <h4>Arahkan kamera Handphone-mu ke-soal yang ingin kamu dapatkan jawabannya</h4>
          </span>
          <span>
            <h4>Sistem kami otomatis mencari jawaban yang cocok dengan soal-mu</h4>
            <img src="path/img/search.png" alt="search">
          </span>
          <span>
            <img src="path/img/upload.png" alt="upload">
            <h4>Jika kamera-mu buram, upload foto soal di icon </h4>
          </span>
          <span>
            <center><h6>TANYAIN | CREATED BY ARIS</h6></center>
          </span>
        </div>
        <div class="float" id="eror">
          <h3><ion-icon size="large" name="warning-outline"></ion-icon> DEVICE-MU TIDAK SUPPORT</h3>
        </div>
        <div class="float" id="izinkan">
          <h2>Perizinan</h2>
          <h4>Izinkan untuk mengakses kamera belakang handphone-mu yaa :)</h4>
          <p id="izin">Izinkan</p>
        </div>
        <div class="float" id="load">
          <span>
            <img src="path/img/load.gif" alt="gif">
            <h4>Tungguin yaaa!</h4>
          </span>
        </div>
        <div class="float" id="upload">
          <h3>Upload Soal</h3>
          <img id="gambar" src="" alt="Preview" style="max-width: 300px;">
          <span id="upLo">
            <img src="path/img/load.gif" alt="gif">
            <h4>Sedang Mencari Jawaban</h4>
          </span>
          <h5 id="result"></h5>
        </div>
      </div>
    </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tesseract.js/5.0.2/tesseract.min.js" integrity="sha512-kwcV5Avdjd8smmbf4OML59Rd561idC9R4pO+PaJBRU/jAgxbjAbYExIpYoyvqAVmvheC6fRJS+fZ1pXToNHRSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    const video = document.getElementById('video'); 
    const fotoSoal = document.getElementById('capture');
    const output = document.getElementById('output');
    const close = document.getElementById('close');
    const rules = document.getElementById('rules');
    const izin = document.getElementById('izin');
    const izinkan = document.getElementById('izinkan');
    const info = document.getElementById('info');
    const bg = document.getElementById('bg');
    const upload = document.getElementById('upload');
    const eror = document.getElementById('eror');
    const pilihgambar = document.getElementById('pilihgambar');
    setTimeout(function(){
      rules.style.display = "none";
      izinkan.style.display = "block";
    },3000)
    pilihgambar.onclick = function(){
      const input = document.createElement('input');
      input.type = 'file';
      input.accept = 'image/*';
      input.addEventListener('change', (event) => {
          const file = event.target.files[0];
          if (file) {
              uploadPhoto(file);
          }
      });
      input.click();
    }
    function uploadPhoto(file) {
      bg.style.display = "block";
      rules.style.display = "none";
      izinkan.style.display = "none";
      eror.style.display = "none";
      upload.style.display = "block";
      const formData = new FormData();
      formData.append('photo', file);
      const gambar = document.getElementById('gambar');
      gambar.src = URL.createObjectURL(file)
      Tesseract.recognize(
        file,
        'ind',
        { logger: info => console.log(info) }
    ).then(({ data: { text } }) => {
      fetch(`https://api.akuari.my.id/ai/gpt?chat=${encodeURIComponent(text)}`)
        .then(response => {
          if (!response.ok) {
            throw new Error('Terjadi kesalahan jaringan!');
          }
          return response.json();
        })
        .then(data => {
          document.getElementById('result').innerText = data.respon;
          document.getElementById('upLo').style.display = "none";
        })
        .catch(error => {
          console.error('Terjadi kesalahan:', error);
        });
      });
    }
    info.onclick = function(){
      bg.style.display = "block";
      rules.style.display = "block";
      izinkan.style.display = "none";
      upload.style.display = "none";
      eror.style.display = "none";
      setTimeout(function(){
        rules.style.display = "none";
        bg.style.display = "none";
      },3000)
    }
    async function setupCamera() {
      try {
        const devices = await navigator.mediaDevices.enumerateDevices();
          const backCamera = devices.find(device => device.kind === 'videoinput' && device.label.toLowerCase().includes('back'));
          if (backCamera) {
            const stream = await navigator.mediaDevices.getUserMedia({ video: { deviceId: backCamera.deviceId } });
                video.srcObject = stream;
          } else {
 
          }
      } catch (err) {
        bg.style.display = "block";
        rules.style.display = "none";
        izinkan.style.display = "none";
        eror.style.display = "block";
        upload.style.display = "none";
      }
    }
    setupCamera();
    izin.onclick = function(){
      bg.style.display = "none";
      izinkan.style.display = "none";
      navigator.mediaDevices.enumerateDevices();
      setupCamera();
    }
    fotoSoal.addEventListener('click', function() {
      const canvas = document.createElement('canvas');
      const context = canvas.getContext('2d');
      load.style.display = "block",bg.style.display = "block",rules.style.display = "none"
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      context.drawImage(video, 0, 0, canvas.width, canvas.height);
      bg.style.display = "block";
      rules.style.display = "none";
      izinkan.style.display = "none";
      eror.style.display = "none";
      upload.style.display = "block";
      const formData = new FormData();
      formData.append('photo', canvas);
      const gambar = document.getElementById('gambar');
      gambar.src = URL.createObjectURL(canvas)
      Tesseract.recognize(
          canvas,
          'ind',
          { logger: info => console.log(info) }
      ).then(({ data: { text } }) => {
          fetch(`https://api.akuari.my.id/ai/gpt?chat=${encodeURIComponent(text)}`)
        .then(response => {
          if (!response.ok) {
            throw new Error('Terjadi kesalahan jaringan!');
          }
          return response.json();
        })
        .then(data => {
          document.getElementById('result').innerText = data.respon;
          document.getElementById('upLo').style.display = "none";
        })
        .catch(error => {
          console.error('Terjadi kesalahan:', error);
        });
      });
  });
  </script>
</html>
