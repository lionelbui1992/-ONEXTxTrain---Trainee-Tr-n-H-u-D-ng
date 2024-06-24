<?php
//ham khong tham so
function inTen($ten){
    echo "ten cua ban la $ten";
}

//ham co tham so
function tinhTuoi($namSinh){
    return 2024 - $namSinh;
}

//ham luan ly
function diLinhNhe($tuoi){
    if($tuoi < 18){
        false;
    }else{
        true;
    }
}

inTen("dung");

echo "<br>tuoi cua ban la " .tinhtuoi(2004);
?>