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

$akvarium = array(
    'ribu'=> array(
        array(
            'name' => 'Petja',
            'size' => 'Smoll',
            'color' => 'Zelenui',
            'plavnik' => '4',

        ),
        array(
            'name' => 'Gora',
            'siza' => 'very big',
            'color' => 'Red',
            'plavnik' => '8',
        ),
        array(
            'name' => 'Jenja',
            'size' => 'Big',
            'color' => 'Serui',
            'plavnik' => '3',
        ),
        array(
            'name' => 'Vova',
            'size' => 'very smoll',
            'color' => 'jeltui',
            'plavnik' => '9',
        )

    ),
    'vodorosli'=> array(
        array(
            'name' => 'Hren6',
            'color' => 'Green',
            'dlina' => '5',
        ),
        array (
            'name' => 'Belka',
            'color' => 'Red',
            'dlina' => '2',
        ),
        array(
            'name' => 'Roza',
            'color' => 'Fioletovui',
            'dlina' => '7',
        ),
        array(
            'name' => 'Xioma',
            'color' => 'Serui',
            'dlina' => '4',
        ),
    ),
);

echo '<div align="center">Аквариум</div>';


foreach ($akvarium as $key => $value){
    if ($key == 'ribu'){
        echo '<p>Рибы</p>';
        foreach ($value as $kkey => $vvalue){
            foreach ($vvalue as $kkkey => $vvvalue){
                echo '<b>Рибы ' . $kkkey . ': </b> ' . $vvvalue;
                echo '<br />';
            }
        }
    }

    else {
        echo '<p>Водоросли</p>';
        foreach ($value as $kkey => $vvalue){
            foreach ($vvalue as $kkkey => $vvvalue){
                echo '<b>Водоросли ' . $kkkey . ': </b> ' . $vvvalue;
                echo '<br />';


            }
        }
    }

}


