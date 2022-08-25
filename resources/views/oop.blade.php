<?php
  echo  "hello this is oop view<br>";
  //變數 不敷使用 無法表達
//    | 
//    | 
//    V
  //陣列
  $apple=[
    'name'=>'apple',
    'color'=>'red'
  ];

//   dd($apple);

//class 模具
class Fruit{
    //設定屬性、變數 全域 
    public $name;
    public $color;

    public function drop(){
        echo "$this->name 掉下來了<br>";
        echo "$this->name 是 $this->color <br>";
    } 
    

}
//設定 物件
$appleObj=new Fruit;
$appleObj->color='red';
$appleObj->name='apple';
$appleObj->drop();


$bananaObj=new Fruit;
$bananaObj->color='yellow';
$bananaObj->name='banana';
$bananaObj->drop();


// dd($apple);
?>
