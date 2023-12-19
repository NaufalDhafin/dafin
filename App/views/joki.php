<div class="spasiheader"></div>
<form method="post" id="fjoki" class="bg-base-200">
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
    <span class="label-text">Pick a file</span>
    <span class="label-text-alt">Alt label</span>
  </div>
  <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
  <div class="label">
    <span class="label-text-alt">Alt label</span>
    <span class="label-text-alt">Alt label</span>
  </div>
</label>
</form>
<style>
  #fjoki {
    width: 90%;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    padding: 10px;
  }

  .info {
    display: flex;
    background: none;
    border: 2px solid grey;
    padding: 5px;
    border-radius: 10px;
  }

  .input {
    background: none;
  }
</style>