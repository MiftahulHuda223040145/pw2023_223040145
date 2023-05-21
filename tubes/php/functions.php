<?php 
define('BASE_URL', '/pw_2023_223040145/kuliah/tubes/');
function dd($Value){
    echo "<pre>";
    var_dump($Value);
    echo "</pre>";
    die;
}


function vd($vd){
    while($users = mysqli_fetch_assoc($result)) {
	var_dump ($users);
    }
}

$conn = mysqli_connect("localhost", "root", "", "pw2023_223040145");
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}