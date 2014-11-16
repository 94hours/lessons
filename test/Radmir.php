<?php
/**
 * Created by PhpStorm.
 * User: Radmir
 * Date: 03.09.14
 * Time: 14:42
 */

class fish {
    private $colour ;
    private $name ;
    private $size ;
    private $plavNum ;

    public function getColour() {
        return $this->colour;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function getPlavNum() {
        return $this->plavNum;
    }
}

class fish_1 extends fish {

    private $colour;
    private $name;
    private $size;
    private $plavNum;

    public function __construct($data1, $data2, $data3, $data4) {
        $this->colour = $data1;
        $this->name = $data2;
        $this->size = $data3;
        $this->plavNum = $data4;
    }

    public function setColor($data_colour) {
        $this->colour = $data_colour;
    }

    public function getColor() {
        return $this->colour;

    }

    public function setName($data_name) {
        $this->name = $data_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setSize($data_size) {
        $this->size = $data_size;
    }

    public function getSize() {
        return $this->size;

    }

    public function setPlavNum($data_plavNum) {
        $this->plavNum = $$data_plavNum;
    }

    public function getPlavNum() {
        return $this->plavNum;
    }

}


class fish_2 extends fish {

    private $colour;
    private $name;
    private $size;
    private $plavNum;

    public function __construct($data1, $data2, $data3, $data4) {
        $this->colour = $data1;
        $this->name = $data2;
        $this->size = $data3;
        $this->plavNum = $data4;
    }

    public function setColor($data_colour) {
        $this->colour = $data_colour;
    }

    public function getColor() {
        return $this->colour;

    }

    public function setName($data_name) {
        $this->name = $data_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setSize($data_size) {
        $this->size = $data_size;
    }

    public function getSize() {
        return $this->size;

    }

    public function setPlavNum($data_plavNum) {
        $this->plavNum = $$data_plavNum;
    }

    public function getPlavNum() {
        return $this->plavNum;
    }

}


class fish_3 extends fish {

    private $colour;
    private $name;
    private $size;
    private $plavNum;

    public function __construct($data1, $data2, $data3, $data4) {
        $this->colour = $data1;
        $this->name = $data2;
        $this->size = $data3;
        $this->plavNum = $data4;
    }

    public function setColor($data_colour) {
        $this->colour = $data_colour;
    }

    public function getColor() {
        return $this->colour;

    }

    public function setName($data_name) {
        $this->name = $data_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setSize($data_size) {
        $this->size = $data_size;
    }

    public function getSize() {
        return $this->size;
    }

    public function setPlavNum($data_plavNum) {
        $this->plavNum = $$data_plavNum;
    }

    public function getPlavNum() {
        return $this->plavNum;
    }

}
