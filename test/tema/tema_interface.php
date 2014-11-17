<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 14.11.2014
 * Time: 0:53
 */

class ribu {
    public  $color = 'Zelenui';
    public $name = 'Vasja';
    public $size = 'Big';
    public $plavnik = '2';
}

class ribuNasledovanie extends ribu {
    public $color;
    public $name;
    public $size;
    public $plavnik;

    public  function getColor(){
        return $this->color;
    }
    public  function  getName(){
        return $this->name;
    }
    public function getSize(){
        return $this->size;
    }
    public  function getPlavnik(){
        return $this->size;
    }

}

class vodorosli {
    public $color = 'belui';
    public $name = 'Zelenka';
    public $dlina = '12';
}
class vodorosliNasledovanie extends vodorosli {
    public $color;
    public $name;
    public $dlina;

    public  function getColor(){
        return $this->color;
    }
    public function getName(){
        return $this->name;
    }
    public function getDlina(){
        return $this->dlina;
    }


}