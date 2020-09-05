<?php
/**
 * 第一个程序
 * 直接php 1.HaloWorld.php执行，或者放入apache或者nginx中就可以访问
 */

echo "Halo world!"; //不分单引号双引号，不需要引入任何包

echo "Halo world!\n"; //的那引号换行符不起作用，变量也必须再双引号字符串中才能

$name = "along"; //变量

echo '你好，$name \n'; //

echo "你好， $name \n";


printf("Halo %s! Very %s.", "world","happy"); //带格式的输入