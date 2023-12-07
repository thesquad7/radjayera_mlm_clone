<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" aria-label="Eleventh navbar example">
    <div class="container-fluid">
      <!--a class="navbar-brand" href="#">RADJAYERA</a-->
      <a class="navbar-brand">
        <a href="/" class="d-flex align-items-center  link-body-emphasis text-decoration-none">
          <img class="bi me-2" width="32" height="32" src="{{asset('Logo.png')}}">
          <span class="fs-4">RADJAYERA</span>
        </a>
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Radjayera Jaya Utama") ? 'active' : ''}}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Profile") ? 'active' : ''}}" href="/Profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Legal") ? 'active' : ''}}" href="/Legalitas">Legalitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Produk") ? 'active' : ''}}" href="/Produk">Produk</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link {{ ($title === "System") ? 'active' : ''}}" href="/System">System</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kontak") ? 'active' : ''}}" href="/Kontrak">Kontak</a>
          </li>
          <!--
            Dipakai untuk mitigasi perbaikan system

            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Legalitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">System</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Kontak</a>
          </li>
        -->
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="/Login" class="nav-link link-body-emphasis px-2">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Sign up</a></li>
          </ul>
        
      </div>
    </div>
</nav>