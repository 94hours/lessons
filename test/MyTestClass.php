<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.08.14
 * Time: 19:10
 */
class MyTestClass {
    private function transformData($arg) {
        return ($arg + 100)/$arg*342;
    }

    public function mPrint($data) {
        $result = $this->transformData($data);

        var_dump($result);
        var_export($result);
    }
}

class testClass {
    private function vasa($a,$b) {
        $result = '';
        var_export($a !==  'abc' );
        if($a !==  'abc' ) {
            $result = $a;
        } else if (strlen($a) > 10) {
            $result = strlen($a);
        } else {
            $result = $b;
        }

        return $result;
    }
    public function publicVasa($a, $b) {
        var_export($this->vasa($a,$b));
    }
}

class testClass2 {
    private function petya($a,$b,$c) {
        $myArray = array( 3 => 789);
        $myArray['a']= array( $a, $b);
        $myArray[]= $b;
        $myArray[]= $c;

        return $myArray;
    }

    public function publicPetya($a,$b,$c) {
        $dump = $this->petya($a,$b,$c);
        var_export($dump['a']);
        $ttt = $dump['a'];
        var_dump($ttt[1]);

        /*foreach($dump as $key => $val) {
            var_dump($val);
            var_dump($key);

        }
        for($i = 3, $count = count($dump) + 3; $i < $count; $i++) {
            var_export($dump[$i]);
        }*/


    }
}

class ribca {

    public     $color = 'krasniy';
    public    $name = 'Vasya';
    public    $size = 'big';
    public    $plavnik = 4;

    public function __construct($fishProperties = array()) {
        if (count($fishProperties) > 0) {
            foreach($fishProperties as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->{$key} = $value;
                }
            }
        }
    }

    public function getThisShit($shit) {
        $result = false;
        if (property_exists($this, $shit)){
            $result = $this->{$shit};
            $func_name = 'get'.ucfirst($shit);
            if(method_exists($this, $func_name)){
                $result = $this->$func_name();
            }
        }

        return $result;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size*784/978*32.6;
    }

    public function getPlavnikovNumbers() {
        return ($this->plavnik * $this->size)/3.44-2.089;
    }

    public function getColor() {
        return $this->color;
    }
}

class zolotayaRibca extends ribca {

    public $name;
    public $huina;

    public function getName() {
        return $this->name . ' ' . $this->huina;
    }

    public function getHuina() {
        return $this->huina;
    }
}



