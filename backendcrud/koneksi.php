<?php
//header untuk menangani cors policy
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, PUT, GET, HEAD, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
header('Content-Type: application/json; charset=utf-8');
//membuat variable koneksi ke mysql
$con = mysqli_connect('localhost','root','','learningcrud') or die ('koneksi gagal');
