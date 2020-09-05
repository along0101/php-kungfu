<?php
/**
 * aop实现demo
 */


class User
{

    private $name;

    //Join Point 连接点
    public function setName($value)
    {
        $this->name = $value;
    }

    //Join Point 连接点
    public function getName()
    {
        return $this->name;
    }

}

//Aspect 方面
class ObjectWrapper
{
    private $obj;

    //Point Cut 切入点
    public function __call($method, $args)
    {
        //Advice 通知
        echo("开始：$method(" . join(",", $args) . ")\n");
        $ret = call_user_func_array(array(&$this->obj, $method), $args);
        echo("结束：$method(" . join(",", $args) . ")\n");
        return $ret;
    }

    public function __construct($obj)
    {
        $this->obj = $obj;
    }
}

$c1 = new ObjectWrapper(new User());
$c1->setName("你的名字");
$name = $c1->getName();