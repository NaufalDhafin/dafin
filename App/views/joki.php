<div class="spasiheader"></div>
<form method="post" id="fjoki" class="bg-base-200" enctype="multipart/form-data">
  <p style="font-size: 20px;">Masukan Data</p>
  <p>Data Diri</p>
  <div class="info">
    <div class="input">
      <p>Nama Kamu</p>
      <input type="text" name="nama" id="inp">
    </div>
    <div class="input">
      <p>Whatsapp</p>
      <input type="text" name="nama" id="inp">
    </div>
  </div>
  <p>Data Tugas</p>
  <div class="info">
    <div class="input">
      <p>Judul Tugas</p>
      <input type="text" name="nama" id="inp">
    </div>
    <div class="input">
      <p>Tenggat Pengumpulan</p>
      <input type="text" name="nama" id="inp">
    </div>
  </div>
  <label class="form-control w-full max-w-xs">
    <div class="label">
      <span class="label-text">Upload file tugas kamu disini</span>
    </div>
    <input type="file" name="berkas" class="file-input file-input-bordered w-full max-w-xs" />
    <div class="label">
      <span class="label-text-alt">Untuk mempermudah kami memahami tugas</span>
    </div>
  </label>
  <label class="form-control w-full max-w-xs">
    <button type="submit" name="uploads" class="btn btn-outline btn-success">Kirim Tugas</button>
  </label>

</form>
<style>
  #fjoki {
    width: 90%;
    display: flex;
    gap: 20px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    padding: 10px;
  }

  .info {
    display: flex;
    flex-wrap: wrap;
    background: none;
    border: 2px solid grey;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    align-items: center;
    justify-content: center;
    gap: 5px;
  }

  .input {
    background: none;
  }

  input {
    background: none;
    border: 1px solid grey;
    border-radius: 5px;
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
