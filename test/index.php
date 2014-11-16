<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24.08.14
 * Time: 19:21
 */

require_once "MyTestClass.php";

$ex = new testClass2();


/*var_export('abc');
var_export('321');
var_export('<br />');
$ex->publicVasa('abc', '321');
var_export('<br />');
var_export('b87878778787887787878 c');
var_export('321');
var_export('<br />');
$ex->publicVasa('b87878778787887787878 c', '321');
var_export('<br />');
$ex->publicVasa('c', '321');
var_export('<br />');
$ex->publicVasa('888777', '321');*/

/*$ex->publicPetya('asd','123','loh');*/

$all_aribas = array(
    array(
        'name' => 'Popka',
        'size' => 15,
        'color' => 'green',
        'huina' => 'durak',
        'plavnik' => 4,
        'type' => 'gold'
    ),
    array(
        'name' => 'Petya',
        'size' => 24,
        'color' => 'orange',
        'plavnik' => 14
    ),
    array(
        'name' => 'Fedor',
        'size' => 43,
        'color' => 'red',
        'plavnik' => 1
    ),
    array(
        'name' => 'Pupkin',
        'size' => 31,
        'color' => 'blue',
        'plavnik' => 27
    )
);

echo '<p> New Aribas </p>';

foreach($all_aribas as $key => &$value) {
    if (isset($value['huina'])) {

        $ribca = new zolotayaRibca($value);
        foreach($value as $name => $vvalue){
            if ($ribca->getThisShit($name) !== false) {
                echo '<b>Ariba ' . $name . ': </b>' . $ribca->getThisShit($name);
                echo '<br />';
            } else {
                unset($value[$name]);
            }
        }
        echo '<br />';
    } else {
        $ribca = new ribca($value);
        foreach($value as $name => $vvalue){
            echo '<b>Ariba ' . $name . ': </b>' . $ribca->getThisShit($name);
            echo '<br />';
        }
        echo '<br />';
    }
}
var_dump($all_aribas[0]);
echo '</pre>';
exit;

$r1 = new ribca();
echo 'imya ribki: ';
echo $r1->getName();
var_dump($r1->getColor());
var_dump($r1->getSize());
var_dump($r1->getPlavnikovNumbers());
echo '<br />';
echo '<br />';
echo '<br />';
$r2 = new zolotayaRibca('siniy');
var_dump($r2->getName());
var_dump($r2->getColor());
var_dump($r2->getSize());
var_dump($r2->getPlavnikovNumbers());
$r2->setColor('zelenuy');
var_dump($r2->getColor());
echo'<br />';
echo'<br />';



echo'Yporotie ribki!';
echo'<br />';

require_once "tema.php";


$riba1 = new riba();
echo' Pervui rib: ';
echo $riba1->getName();
echo ' ,Size: ';
echo $riba1->getSize();
echo ' ,Color: ';
echo $riba1->getColor();
echo ' ,Plavnikov: ';
echo $riba1->getPlavnik();
echo'<br />';

$riba2 = new riba1();
$riba2->setName('Klava');
echo' Vtoroi rib: ';
echo $riba2->getName();
$riba2->setSize('oshen bolshoi rib');
echo ' ,Size: ';
echo $riba2->getSize();
echo ' ,Color: ';
$riba2->setColor('green');
echo $riba2->getColor();
$riba2->setPlavnik('8');
echo ' ,Plavnikov: ';
echo $riba2->getPlavnik();
echo'<br />';

$riba3 = new riba2();
$riba3->setName('Valera');
echo' Tretui rib: ';
echo $riba3->getName();
$riba3->setSize('smol');
echo ' ,Size: ';
echo $riba3->getSize();
$riba3->setColor('black');
echo ' ,Color: ';
echo $riba3->getColor();
$riba3->setPlavnik('3');
echo ' ,Plavnikov: ';
echo $riba3->getPlavnik();

//$es = new ribina();
//echo'<br />';
//$es->publicLol('Vasa','Red','Big','6');

require_once "Radmir.php";

echo '<br />';
echo '<br />';
echo '****Radmir*s fishes:****';
echo '<br />';
echo 'First fish->      ';
$rad1 = new fish_1('gold','Marry','big','4');
echo '    Name:';
var_export($rad1->getName());
echo '    ,Colour:';
var_export($rad1->getColor());
echo '    ,Size:';
var_export($rad1->getSize());
echo '    ,PlavNum:';
var_export($rad1->getPlavNum());
echo '<br />';
echo 'Second fish->      ';
$rad2 = new fish_2('black','Honey','small','2');
echo '    Name:';
var_export($rad2->getName());
echo '    ,Colour:';
var_export($rad2->getColor());
echo '    ,Size:';
var_export($rad2->getSize());
echo '    ,PlavNum:';
var_export($rad2->getPlavNum());
echo '<br />';
echo 'Third fish->      ';
$rad3 = new fish_3('green','Roman','medium','4');
echo '    Name:';
var_export($rad3->getName());
echo '    ,Colour:';
var_export($rad3->getColor());
echo '    ,Size:';
var_export($rad3->getSize());
echo '    ,PlavNum:';
var_export($rad3->getPlavNum());

