<?php
class Koneksi {
    private $server = "localhost";
    private $username = "root"; //root
    private $password = ""; //""
    private $db = "id4927718_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>