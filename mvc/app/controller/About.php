<?php

class About{
    public function page() {
        echo'about/page';
    }

    public function index($nama = 'agung', $pekerjaan ='mahasiswa') {
        echo "nama saya $nama, saya seorang $pekerjaan";
    }
}



?>