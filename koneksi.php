<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4927718_dev"; //root
    private $password = "azizah04"; //""
    private $db = "id4927718_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>