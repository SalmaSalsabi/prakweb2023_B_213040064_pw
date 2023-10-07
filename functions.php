<?php
//koneksi ke database
function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'prakweb_2023_B_213040064');
    
    return $conn;
    }
    
    function query($query) {
        $conn = koneksi();
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
    }   
        return $rows;
    }
?>