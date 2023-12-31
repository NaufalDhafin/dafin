<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naufal Dhafin</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.20/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="navbar bg-base-300" style="position: fixed;">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-4 z-[1] p-2 shadow bg-base-300 rounded-box w-52">
        <li><a href="?">Beranda</a></li>
        <li><a href="?a=joki">Joki</a></li>
        <li><a href="?a=tugas">Tugas</a></li>
      </ul>
    </div>
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost text-xl">Naufal Dhafin</a>
  </div>
  <div class="navbar-end">
  <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Naufal Dhafin" src="App/imgs/logo.png" />
        </div>
      </div>
  </div>
</div>
<style>
    body{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .navbar{
        width: 95%;
        margin-top: 10px;
        border-radius: 10px;
        z-index: 1;
    }
    .spasi10p{
      margin-bottom: 10px;
    }
    .spasi20p{
      margin-bottom: 20px;
    }
    .spasi30p{
      margin-bottom: 30px;
    }
    .spasiheader{
      margin-top: 80px;
    }
    #jdl{
      font-size: 18px;
      font-weight: 500;
    }
</style>