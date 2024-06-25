<?php
class Dog{
    private $name;
    public $age;
    protected $weight;

    public function __construct($name, $age, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        
    } 

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }


}

class BabyDog extends Dog{

}

$pupy = new BabyDog("heh", 88, 32);
$pupy->setName("dic");

echo $pupy->getName();

?>
