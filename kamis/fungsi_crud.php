<?php
include 'koneksi.php';

// Create
function tambah_toilet($lokasi, $jumlah_fasilitas, $kebersihan) {
    global $conn;
    $lokasi = $conn->real_escape_string($lokasi);
    $sql = "INSERT INTO toilet (lokasi, jumlah_fasilitas, kebersihan) VALUES ('$lokasi', $jumlah_fasilitas, '$kebersihan')";
    return $conn->query($sql);
}

// Read
function semua_toilet() {
    global $conn;
    $sql = "SELECT * FROM toilet";
    $result = $conn->query($sql);
    $toilets = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $toilets[] = $row;
        }
    }
    return $toilets;
}

// Update
function update_toilet($id, $lokasi, $jumlah_fasilitas, $kebersihan) {
    global $conn;
    $lokasi = $conn->real_escape_string($lokasi);
    $sql = "UPDATE toilet SET lokasi='$lokasi', jumlah_fasilitas=$jumlah_fasilitas, kebersihan='$kebersihan' WHERE id=$id";
    return $conn->query($sql);
}

// Delete
function hapus_toilet($id) {
    global $conn;
    $sql = "DELETE FROM toilet WHERE id=$id";
    return $conn->query($sql);
}

?>
