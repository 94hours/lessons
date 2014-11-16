<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 03.09.14
 * Time: 1:41
 */
class riba {
    private $color = 'red';
    private $name = 'Vasya';
    private $size = 'big';
    private $plavnik = 5;

    public function getName (){
        return $this->name;
        }

    public function getSize (){
        return $this->size;
        }

    public function getPlavnik (){
        return $this->plavnik;
        }

    public function getColor (){
        return $this->color;
        }
   }



class riba1 extends riba{

    private $color;
    private $name;
    private $size;
    private $plavnik;


    public function __construct($data,$data1,$data2,$data3){
        $this->color = $data;
        $this->name = $data1;
        $this->size = $data2;
        $this->plavnik = $data3;

    }
    public function setColor ($data_color){
        $this->color = $data_color;

    }
    public function getColor (){
        return $this->color;

    }
    public function setName($data_name){
        $this->name = $data_name;
    }
    public function getName (){
        return $this->name;
    }
    public function  setSize($data_size){
        $this->size = $data_size;
    }
    public function getSize(){
        return $this->size;
    }
    public function setPlavnik ($data_plavnik){
        $this->plavnik = $data_plavnik;
    }
    public function getPlavnik (){
        return $this->plavnik;
    }


}

class riba2 extends riba{

    private $color;
    private $name;
    private $size;
    private $plavnik;


    public function __construct($data,$data1,$data2,$data3){
        $this->color = $data;
        $this->name = $data1;
        $this->size = $data2;
        $this->plavnik = $data3;


    }
    public function setColor ($data_color){
        $this->color = $data_color;
    }
    public function getColor(){
        return $this->color;
    }

    public function setName ($data_name){
        $this->name = $data_name;

    }
    public function getName (){
        return $this->name;

    }
    public function setSize ($data_size){
        $this->size = $data_size;
    }
    public function getSize (){
        return $this->size;
    }
    public function setPlavnik($data_plavnik){
        $this->plavnik = $data_plavnik;
    }
    public function getPlavnik(){
        return $this->plavnik;
    }
}

//class ribina {
//    private function lol ($name,$color,$size,$plavnik){
//        $myArray [] = $name;
//        $myArray [] = $color;
//        $myArray [] = $size;
//        $myArray [] = $plavnik;
//
//        return $myArray;
//    }
//    public function publicLol ($name,$color,$size,$plavnik){
//        $dump = $this->lol($name,$color,$size,$plavnik);
//        var_export($dump);
//        var_export($dump['']);
//       $tut = $dump[''];
//        var_dump($tut);
//        for($i = 0,  $count = count($dump) + 0; $i < $count; $i++){
//            var_export($dump[$i]);
//        }
//    }
//}

