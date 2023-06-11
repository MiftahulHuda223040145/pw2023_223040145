<?php

define('BASE_URL', '/pw2023_223040145/tubes/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040145') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $email = htmlspecialchars($data['email']);
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars(mysqli_real_escape_string($conn, $data['password']));
  $password2 = htmlspecialchars(mysqli_real_escape_string($conn, $data['password2']));

  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('username sudah ada');
    </script>";
    return false;
  }

  if ($password !== $password2) {
    echo "<script>
    alert('Konfirmasi password tidak sesuai');
    </script>";
    return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "INSERT INTO
                  users 
                VALUES 
                  (null, '$email', '$username', '$password', '')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM users WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubahGambar($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $gambarLama = $data['gambarLama'];

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $query = "UPDATE users SET
            gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars(mysqli_real_escape_string($conn, $data['password']));
  $gambarLama = htmlspecialchars($data['gambarLama']);

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
              alert('username sudah ada');
            </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "UPDATE users SET
            username = '$username',
            email = '$email',
            password = '$password',
            gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubahEmail($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $email = htmlspecialchars($data['email']);

  $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
              alert('username sudah ada');
            </script>";
    return false;
  }

  $query = "UPDATE users SET
            email = '$email'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubahUsername($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $username = htmlspecialchars($data['username']);

  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
              alert('username sudah ada');
            </script>";
    return false;
  }

  $query = "UPDATE users SET
            username = '$username'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubahPassword($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $password = htmlspecialchars($data['password']);
  $password2 = htmlspecialchars(mysqli_real_escape_string($conn, $data['password2']));

  if ($password !== $password2) {
    echo "<script>
    alert('Konfirmasi password tidak sesuai');
    </script>";
    return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "UPDATE users SET
            password = '$password'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function upload()
{

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  if ($error === 4) {
    echo "<script>
            alert ('pilih gambar terlebih dahulu');
          </script>";
    return false;
  }


  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('Yang anda upload bukan gambar');
          </script>";
    return false;
  }

  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar')
          </script>";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, '../../assets/img/' . $namaFileBaru);

  return $namaFileBaru;
}

function register($data)
{
  $conn = koneksi();
  $email = htmlspecialchars($data['email']);
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars(mysqli_real_escape_string($conn, $data['password']));
  $password2 = htmlspecialchars(mysqli_real_escape_string($conn, $data['password2']));
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('username sudah ada');
    </script>";
    return false;
  }

  if ($password !== $password2) {
    echo "<script>
    alert('Konfirmasi password tidak sesuai');
    </script>";
    return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO
                  users 
                VALUES 
                  (null, '$email', '$username', '$password', '')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM users
            WHERE
            username LIKE '%$keyword%' OR
            email LIKE'%$keyword%'  
            ";
  return query($query);
}
function pencarian($keyword)
{
  $query = "SELECT * FROM newsrecomendation, newstrending, newsvideo 
            WHERE
            judul LIKE '%$keyword%'  
            ";
  return query($query);
}