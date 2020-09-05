<?php
/**
 * 魔术方法：invoke
 * 实例化对象本身是不能被调用，但是类中如果实现 __invoke() 方法，则把实例对象当作方法调用，会自动调用到 __invoke() 方法，参数顺序相同。
 */


class Demo
{
    public $title;

    public $description;

    public function __construct()
    {
        echo "__construct \n";
    }

//    public function __invoke()
//    {
//        echo "invoke";
//    }

    public function __invoke($title, $desc)
    {
        $this->title = $title;
        $this->description = $desc;
        echo "__invoke args:" . func_num_args() . "\n";
    }
}


$demo = new Demo();

$demo("标题", "描述");


var_dump(is_callable($demo)); //判断是否可以回调

echo $demo->title;