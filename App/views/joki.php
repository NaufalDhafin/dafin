<div class="spasiheader"></div>
<div class="spasi10p"></div>
<p id="jdl">Harap isi beberapa data dibawah</p>
<div class="spasi10p"></div>
<form method="post" class="bg-base-200" enctype="multipart/form-data" id="jform">
  <div class="form">
    <p class="p">Data Diri</p>
    <div class="inp">
      <p>Nama Kamu</p>
      <input class="bg-base-300" type="text" name="nama">
    </div>
    <div class="inp">
      <p>Whatsapp</p>
      <input class="bg-base-300" type="text" name="whatapp">
    </div>
  </div>
  <div class="form">
    <p class="p">Data Tugas</p>
    <div class="inp">
      <p>Judul Tugas</p>
      <input class="bg-base-300" type="text" name="nama">
    </div>
    <div class="inp">
      <p>saran/masukan Tentang Tugas</p>
      <textarea class="bg-base-300" name="" cols="30" rows="3" placeholder="Contoh: jangan pake source/sumber nya, background warna biru, blalabalaba..."></textarea>
    </div>
  </div>
  <div class="form">
    <p class="p">Upload File Tugasnya Disini</p>
    <div class="inp">
      <p></p>
      <input style="color: grey;" class="bg-base-300" type="file" name="berkas">
    </div>
  </div>
  <div class="submit">
    <button class="btn">Kirim</button>
    <!-- <a href="">Data Yang Ngejoki</a> -->
  </div>
</form>

<style>
  #jform{
    max-width: 700px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    border-radius: 10px;
  }
  #jform .form{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid gray;
    width: 300px;
    border-radius: 10px;
    padding: 10px;
    gap: 5px;
    transition: .3s;
  }
  #jform .form:hover{
    box-shadow: 0 0 20px black;
    width: 308px;
  }
  #jform .form .p{
    font-weight: 500;
  }
  #jform .form .inp{
    display: flex;
    flex-direction: column;
    gap: 3px;
  }
  #jform .form .inp input{
    width: 240px;
    border-radius: 5px;
    border: 1px solid gray;
    transition: .2s;
    padding: 2px;
    color: white;
  }
  #jform .form .inp input:hover{
    width: 245px;
  }
  #jform .form .inp textarea{
    width: 240px;
    border-radius: 5px;
    border: 1px solid gray;
    transition: .2s;
    padding: 2px;
    color: white;
  }
  #jform .form .inp textarea:hover{
    width: 245px;
  }

  .submit{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    color: lightskyblue;
  }
  .submit .btn{
    width: 150px;
    font-size: 18px;
    border:2px solid lightskyblue;
    height: 15px;
  }

  @media screen and (max-width:600px){
    #jform{
      width: 95%;
    }
  }
</style>

<?php
if (isset($_POST['uploads'])) {
  $namaFile = $_FILES['berkas']['name'];
  $namaSementara = $_FILES['berkas']['tmp_name'];

  $dirUpload = "src/";
  $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

  if ($terupload) {
    echo "<script>window.alert('Tugas kamu berhasil terkirim!. Mohon menunggu untuk antrian joki, kami akan menghubungi anda.')</script>";
  } else {
    echo "Upload Gagal!";
  }
}
?>