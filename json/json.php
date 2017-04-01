<?php
header('Content-type : json/text');
$data = array();

$data[0]    = array(
    'nama'  => 'Abdul',
    'gender'    => 'Male',
    'tinggi'    => 168,
    'berat' => 73,
    'alamat'    => 'Yogyakarta'
);
$data[1]    = array(
    'nama'  => 'Fauzi',
    'gender'    => 'Male',
    'tinggi'    => 171,
    'berat' => 84,
    'alamat'    => 'Semarang'
);
$data[2]    = array(
    'nama'  => 'Arif',
    'gender'    => 'Male',
    'tinggi'    => 169,
    'berat' => 76,
    'alamat'    => 'Surabaya'
);
$data[3]    = array(
    'nama'  => 'Dina',
    'gender'    => 'Female',
    'tinggi'    => 165,
    'berat' => 43,
    'alamat'    => 'Denpasar'
);
$data[4]    = array(
    'nama'  => 'Citra',
    'gender'    => 'Female',
    'tinggi'    => 166,
    'berat' => 38,
    'alamat'    => 'Bandung'
);
$data[5]    = array(
    'nama'  => 'Eko',
    'gender'    => 'Male',
    'tinggi'    => 173,
    'berat' => 78,
    'alamat'    => 'Jakarta'
);
$data[6]    = array(
    'nama'  => 'Susi',
    'gender'    => 'Female',
    'tinggi'    => 167,
    'berat' => 42,
    'alamat'    => 'Tangerang'
);

echo json_encode($data, JSON_PRETTY_PRINT);