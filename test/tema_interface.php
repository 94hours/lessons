<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 14.11.2014
 * Time: 0:53
 */


class ribu {
    private  $vidRiba = 'Riba';
    private  $name = 'Boba';
    private  $size = 12;
    private  $color = 'Blue';

    public function getVid() {
        $this->vidRiba;
            }
    public function getName(){
        $this->name;
    }
    public function getSize(){
        $this->size;
    }
    public function getColor(){
        $this->color;
    }

}
class vodorosli{
    private  $vidVodorosli = 'Vodorosli';
    private  $nameVodorosli = 'Zelenka';
    private  $sizeVodorosli = 23;
    private  $colorVodorosli = 'Green';

    public function getVid(){
        $this->vidVodorosli;
            }
    public function getNameVodorosli(){
        $this->nameVodorosli;
    }
    public function getSizeVodorosli(){
        $this->sizeVodorosli;
    }
    public function getColorVodorosli(){
        $this->colorVodorosli;
    }

}



    $ribu_vodorosli = array(
        array(
            'vidRiba' => 'riba',
            'name' => 'Vasa',
            'size' => 2,
            'color' => 'Red'
        ),
        array(
            'vidRiba' => 'riba',
            'name' => 'Biba',
            'size' => '16',
            'color' => 'Red'
        ),
        array(
            'vidRiba' => 'riba',
            'name' => 'Lola',
            'size' => '45',
            'color' => 'Black'
        ),
        array(
            'vidVodorosli' => 'vodorosli',
            'name' => 'HrenZnaet4to',
            'size' => 'Big',
            'color' => 'Belui'
        ),
        array(
            'vidVodorosli' => 'vodorosli',
            'name' => 'Trof',
            'size' => 'smol',
            'color' => 'serui'
        ),
        array(
            'vidVodorosli' => 'vodorosli',
            'name' => 'Tifon',
            'size' => 'Very Big',
            'color' => 'Krasnui'
        )

    );



    var_export($ribu_vodorosli);

    foreach ($ribu_vodorosli as $key => $value){
    echo $value, $key;
}


class ribuModern extends ribu {
    public $name;
    public $size;
    public $color;
    public $vidRiba;

    public function getName(){
        return $this ->name;

    }

}
class vodorosliModern extends vodorosli{
    public $nameVodorosli;
    public $sizeVodorosli;
    public $colorVodorosli;
    public $vidVodorosli;

}
