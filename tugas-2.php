<?php
    $kelompok = array(
        array('Nama' => 'Salwa Jasmine', 'NIM' => '123455'),
        array('Nama' => 'Aminah Nurul', 'NIM' => '123456'),
        array('Nama' => 'Amanda Farliana', 'NIM' => '123457'),
        array('Nama' => 'Risma Saputri', 'NIM' => '123458'),
        array('Nama' => 'Megawati Soekarno', 'NIM' => '123459')
    );

    foreach($kelompok as $anggota) {
        $nama = $anggota['Nama'];
        $nim = $anggota['NIM'];

        if ($nim % 2 == 0) {
            $peran = 'Back-end Developer';
        } else {
            $peran = 'Front-end Developer';
        }

        echo 'Nama: ' . $nama . '<br>';
        echo 'Nim: ' . $nim . '<br>';
        echo 'Peran: ' . $peran . '<br>';
        echo '<br>';
    }
    ?>

