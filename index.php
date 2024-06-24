<?php
$str = "huudung huudung huudung huudung";
$pattern = "/huudung/i";
//kiem tra xem co ton tai trong chuoi khong
echo preg_match($pattern, $str); 

//kem tra xem ton taij bao nhieu lan
echo preg_match_all($pattern, $str);

//thay the chuoi khop bang mot chuoi khac
echo preg_replace($pattern, "hihi", $str);
?>