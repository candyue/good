<?php 
use yii\helpers\Html;
use app\models\Country;


$countries = Country::find()->orderBy('name')->all();
$country = Country::findOne('US');
echo $country->name;
$country->name = 'U.S.A';
$country->save();
echo '<pre>';
var_dump($countries);
?>
