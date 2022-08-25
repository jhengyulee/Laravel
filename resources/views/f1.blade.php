<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
   


   <h2 style="text-align:center"> 餐廳訂位 <br>
    <!-- html語法 -->
    <p>{{$data['name']}}</p>
    <p>{{$data['num']}}</p>
<hr>    

<!-- 原生php語法 -->
    <?php
    echo "訂位大名:".$data['name']."<br>";
    echo "訂位人數:".$data['num']."<br>";
    ?>
<hr>
<!-- blade 語法 -->
{{-- 要裝laravel blade snippets套件 才會出現提示字-- --}}
    @php
    echo "訂位大名:".$data['name']."<br>";
    echo "訂位人數:".$data['num']."<br>";
    @endphp

    <a href="/f2">F2</a> <br>
    <a href="/f3">F3</a>

</h2>

</body>
</html>