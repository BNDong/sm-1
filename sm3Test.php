<?php
require_once 'SM3.php';
$data = '1234567890abcdefghijklmnopqrstuvwxyz!@#$%^&*(),./;����һ�����ˣ��㲻Ҫ����';
$sm3 = new SM3($data);
echo $sm3;