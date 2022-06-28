<?php
//membuat koneksi database

$server = "localhost";
$user = "root";
$password = "";
$dbname = "utspaw";
$no = 1;

$koneksi = mysqli_connect($server,$user,$password,$dbname)or die(mysqli_error($koneksi));
$nama ="";
$jenis_kelamin ="";
$alamat ="";
$no_hp ="";
$umur ="";
$berat_badan ="";
$gol_darah ="";
$donor_ke ="";
$sukses ="";
$error ="";


if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $umur = $_POST['umur'];
    $berat_badan = $_POST['berat_badan'];
    $gol_darah = $_POST['gol_darah'];
    $donor_ke= $_POST['donor_ke'];

    if($nama && $jenis_kelamin && $alamat && $no_hp && $umur && $berat_badan && $gol_darah && $donor_ke){
        $sql1 = "insert into pendonor(nama,jenis_kelamin,alamat,no_hp,umur,berat_badan,gol_darah,donor_ke) values('tnama','tjenis_kelamin','talamat','tno_hp','tumur','tberat_badan','tgol_darah','tdonor_ke')";
        $q1 = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Berhasil Memasukkan Data Baru";
        }else{
            $error = "Gagal Memasukkan Data Baru"; 
        }
    }else{
        $error = "Silahkan Masukkan Semua Data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PMI Kabupaten Probolinggo</title>
    <style>
        .header {
    padding-left: 50px;
    padding-top: 5px;
    }
    #logo {
        width: 40px;
        height: 40px;
    }
    .card{
        margin-top:10px;
    }
    </style>
</head>
<body>
<div class="container">
    <!-- <br>
    <h1>Selamat Datang !</h1>
    <br>
    <h5>Website ini berguna untuk informasi kalian tentang PMI Kabupaten Probolinggo.</h5> -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="header">
            <img id="logo" src="images/pmi.png" alt="logo">
        </div>
        <div class="container">
        <a class="navbar-brand" href="#"> PMI Kab.Probolinggo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Beranda.php">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Formulir
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="donordarah.php">Formulir Donor Darah</a>
                <a class="dropdown-item" href="ambulance.php">Formulir Permintaan Ambulance</a>
                <a class="dropdown-item" href="tanya.php">Formulir Pertanyaan</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Informasi
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="manfaat.php">Manfaat Donor Darah</a>
                <a class="dropdown-item" href="syarat.php">Syarat Donor Darah</a>
                <a class="dropdown-item" href="procedure.php">Procedur Donor Darah</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="hubungikami.php">Kontak Darurat</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="event.php">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Keluar</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div></div>
    </nav>
    <br><br><br><br>
    <div class="max-auto">
        <!--untuk memasukkan data-->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Edit Data
            </div>
            <div class="card-body">
                <?php 
                if($error){
                    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $error?>
                    </div>
                <?php
                }
                ?>
                <?php
                if($sukses){
                    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo $sukses?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="tnama" value="<?php echo $nama?>">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="tjenis_kelamin" id="jenis_kelamin">
                        <option value="">-Pilih Jenis Kelamin-</option>
                        <option value="lk" <?php if($jenis_kelamin == "lk") echo "selected"?>>Laki - Laki</option>
                        <option value="pr" <?php if($jenis_kelamin == "pr") echo "selected"?>>Perempuan</option>
                    </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="talamat" value="<?php echo $alamat?>">
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="no_hp" name="tno_hp" value="<?php echo $no_hp?>">
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur" name="tumur" value="<?php echo $umur?>">
                </div>
                <div class="mb-3">
                    <label for="berat_badan" class="form-label">Berat Badan</label>
                    <input type="text" class="form-control" id="berat_badan" name="tberat_badan" value="<?php echo $berat_badan?>">
                </div>
                <div class="mb-3">
                    <label for="gol_darah" class="form-label">Golongan Darah</label>
                    <input type="text" class="form-control" id="gol_darah" name="tgol_darah" value="<?php echo $gol_darah?>">
                </div>
                <div class="mb-3">
                    <label for="donor_ke" class="form-label">Donor Ke</label>
                    <input type="text" class="form-control" id="donor_ke" name="tdonor_ke" value="<?php echo $donor_ke?>">
                </div>
                <div class="col-12">
                    <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">

                </div>
                </form>
            </div>
        </div>

        <!--untuk mengeluarkan data-->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Pendonor
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.css"></script>
</body>
</html>