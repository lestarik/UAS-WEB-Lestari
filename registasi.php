<?php
$data = $_POST;
//Sesuaikan baris Insert bawah ini. Jika pakei php biasa ya pakai itu, 
//jika pakai frameworj ya pakai metoda Insert pakai framework
$input = $this->db->insert('user',$data);
if($input){
    echo json_encode(array('status'=>true));
}else{
   echo json_encode(array('status'=>false));