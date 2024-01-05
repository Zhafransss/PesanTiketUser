
<link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

<style>
    body{
            font-family: sans-serif;
            margin: 0;
            padding: 10px;
        }
        .container{
            max-width: 7000px;
            margin: 0 auto;
            
            padding: 10px;
            
        }
        h2{
            text-transform: uppercase;
            margin: 10px 0;
            padding: 0;
            text-align: center;
            
        }
        input[type="text"],input[type="email"]{
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin: 3px 0;
            border: 1px solid #ccc;
        }
        input[type="submit"]{
            margin-top: 5px;
            padding: 6px 12px;
            font-size: 16px;
            cursor: pointer;
            background-color:dodgerblue;
            color: #FFF;
            outline: none;
            border: 1px solid rgba(0,0,0,.1);

        }

        .pilih {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin: 3px 0;
            border: 1px solid #ccc;
        }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f6f7f9;
    }
        a,a:visited{
            color: white;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
            color: red;
        }
        
</style>

<header class="header" data-header>
    <div class="container">

      <a href="home">
        <h1 class="logo">JogloSemar </h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list">

        <li>
            <a href="home" class="navbar-link">Home</a>
          </li>
          <li>
            <a href="trayek" class="navbar-link">Jadwal Travel</a>
          </li>
          <li>
            <a href="pesan" class="navbar-link">Pesan Now</a>
          </li>
          <li>
            <a href="lacak" class="navbar-link">Lacak Paket</a>
          </li>
          <li>
            <a href="home#Aboutme" class="navbar-link">About Us</a>
          </li>
          <li>
            <a href="https://wa.me/+6285173240443" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        
        

      </nav>

    </div>
  </header>



<form method="post" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autocomplete="off"></td>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ old('nomor_hp') }}" autocomplete="off"></td>
            @error('nomor_hp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="off"></td>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" class="pilih form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" autocomplete="off"></td>
            @error('tanggal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </tr>
        <tr>
            <td>Asal</td>
            <td>
            <select class="pilih form-select @error('asal') is-invalid @enderror" id="basicSelect" name="asal">
                <option value="">-- Pilih --</option>
                <option {{ old('asal') == 'Semarang' ? 'selected' : '' }} value="Semarang">Semarang</option>
                <option {{ old('asal') == 'Purwokerto' ? 'selected' : '' }} value="Purwokerto">Purwokerto</option>
            </select>
            @error('asal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </tr>
        <tr>
            <td>Tujuan</td>
            <td>
            <select class="pilih form-select @error('tujuan') is-invalid @enderror" id="basicSelect" name="tujuan">
                <option value="">-- Pilih --</option>
                <option {{ old('tujuan') == 'Jogja' ? 'selected' : '' }} value="Jogja">Jogja</option>
                <option {{ old('tujuan') == 'Solo' ? 'selected' : '' }} value="Solo">Solo</option>
            </select>
            @error('tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </tr>
        <tr>
            <td>Pilih Pembayaran</td>
            <td>
            <select class="pilih form-select @error('pembayaran') is-invalid @enderror" id="basicSelect" name="pembayaran">
                <option value="">-- Pilih --</option>
                <option {{ old('pembayaran') == 'Dana' ? 'selected' : '' }} value="Dana">Dana</option>
                <option {{ old('pembayaran') == 'Transfek_Bank_BRI' ? 'selected' : '' }} value="Transfek_Bank_BRI">Transfer Bank BRI</option>
            </select>
            @error('pembayaran')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </tr>
        <tr>
            <td>Pilih Kendaraan</td>
            <td>
            <select class="pilih form-select @error('kendaraan') is-invalid @enderror" id="basicSelect" name="kendaraan">
                <option value="">-- Pilih --</option>
                <option {{ old('kendaraan') == 'Innova_Reborn' ? 'selected' : '' }} value="Innova_Reborn">Innova_Reborn</option>
                <option {{ old('kendaraan') == 'elf' ? 'selected' : '' }} value="elf">Elf</option>
            </select>
            @error('kendaraan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
<form>