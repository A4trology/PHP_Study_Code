<?php

$price = $_POST['price'];
$discount = $_POST['discount'];
switch ($discount){
    case "九折":$discount=0.9;
    break;
    case "八折":$discount=0.9;
    break;
    case "七折":$discount=0.7;
    break;
    case "六折":$discount=0.6;
    break;
    case "五折":$discount=0.5;
    break;
    default:$discount=1.0;
    break;
}
$cur_price = $price*$discount;
echo "商品销售后的价格为".$cur_price."元";
;?>
<html>
<title>商品打折计算系统</title>
<body></body>
<form action="course01.php" method="post">
<input type="text" name="price" value="500"/>
折扣:
<select name="discount">
    <option>九折</option>
    <option>八折</option>
    <option>七折</option>
    <option>六折</option>
    <option>五折</option>
</select>
    <input type="submit" value="提交">
</form>
</html>
