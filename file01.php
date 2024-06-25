<?php
abstract class HuuDung {
    abstract public function getTen();
}

class BabyHuuDung extends HuuDung{
    public function getTen(){
        return "Baby Huu Dung";
    }  
}
$hd = new BabyHuuDung();

echo $hd->getTen();
?>
