<?php

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

function cr_juald() {
    global $koneksi;
    $result = $koneksi->query("CALL cr_juald()");
    if (!$result) {
        die("Error: " . $koneksi->error);
    }
}
        cr_juald(); 
        $koneksi->close();
?>