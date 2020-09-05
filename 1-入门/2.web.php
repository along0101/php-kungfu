<?php
/**
 * 我的第1个个人主页网站
 * 启动命令：php -S localhost:8080 -t 1-入门
 * 访问：http://localhost:8080/2.web.php?name=along
 */

$name = $_GET["name"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的主页</title>
</head>
<body>

<div id="root">

    <h1>Hello,<?= $name ?: "World" ?>!</h1>

    <h4><?php echo "欢迎访问我的个人博客网站" ?></h4>
    <p><?= "欢迎访问我的个人博客网站" ?></p>

</div>

</body>
</html>
