<?php
$koneksi = mysqli_connect('localhost','root','','pemesanan_wisata');
define('URL', 'http://localhost/pemesanan_tiket_wisata');
if(!empty($_POST['harga']) && !empty($_POST['nama'])){
    $nama = $_POST['nama'];
    $no_id = $_POST['no_id'];
    $hp = $_POST['hp'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak= $_POST['pengunjung_anak'];
    $harga_tiket = $_POST['harga'];
    $total_bayar = $_POST['total'];
    mysqli_query($koneksi,"INSERT INTO pemesanan VALUES (null, '$nama', '$no_id', '$hp', '$tempat', '$tanggal', '$pengunjung_dewasa', '$pengunjung_anak', '$harga_tiket', '$total_bayar')");
    $data= [
        'nama_lengkap' => $nama,
        'nomor_identitas' => $no_id,
        'nomor_hp' => $hp,
        'tempat_wisata' => $tempat,
        'tanggal_kunjungan' => $tanggal,
        'pengunjung_dewasa' => $pengunjung_dewasa,
        'pengunjung_anak' => $pengunjung_anak,
        'total_bayar' => $total_bayar,
        'harga_tiket' => $harga_tiket
    ];
    include_once('konfirmasi_pemesanan.php');
    die();
}
//Fungsi ini digunakan untuk mengoneksikan ke database
function connect()
{
    // Koneksi ke database
    $mysqli = new mysqli('localhost','root','','pemesanan_wisata'); //Library PHP

    // Check connection
    if ($mysqli -> connect_errno) {
        throw new Exception("Database error : " . $mysqli -> connect_error); //Handle Error
    }

    // Mengembalikan nilai koneksi
    return $mysqli;
}

// Fungsi untuk mengambil data tempat_wisata dari database
function get_tempat_wisata()
{
    // Query sql
    $sql = "SELECT * FROM `daftar_wisata`";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil;
}
// Prosedur untuk mencetak judul halaman
function judul($title)
{
    echo "<h4>$title</h4>";//Prosedur
}
// Prosedur untuk mengambil data pantai
function get_pengunjung_pantai()
{
    // Query sql
    $sql = "SELECT COUNT(kelas_wisata) as total FROM pemesanan WHERE kelas_wisata = 'pantai';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data taman
function get_pengunjung_taman()
{
    // Query sql
    $sql = "SELECT COUNT(kelas_wisata) as total FROM pemesanan WHERE kelas_wisata = 'taman nasional';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}
// Prosedur untuk mengambil data museum
function get_pengunjung_museum()
{
    // Query sql
    $sql = "SELECT COUNT(kelas_wisata) as total FROM pemesanan WHERE kelas_wisata = 'museum';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil[0]['total'];
}

?>

