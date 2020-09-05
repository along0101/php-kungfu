<?php


/**
 * 反射机制
 * @Table(name="demo")
 */
class Demo
{

    /**
     * @Col(name="id",description="id")
     * @AutoGenerateKey()
     * @var int
     */
    private $id;

    /**
     * @Col(name="name",description="名字")
     * @var string
     */
    private $name;

    /**
     * @Col(name="name",description="名字")
     * @var int
     */
    private $gender;

    /**
     * 密码
     * @var string
     */
    protected $password;

    /**
     * 年龄
     * @var int
     */
    public $age;

    /**
     * 数字
     * @var int
     */
    static $num;


    public function sayHelloTo($name)
    {
        echo 'Hello ' . $name . "\n";
    }


}


$ref = new \ReflectionClass(Demo::class);

//var_dump($ref->getDefaultProperties());

//var_dump($ref->getParentClass());

//var_dump($ref->getMethods());

//var_dump($ref->getMethods(ReflectionMethod::IS_PUBLIC));

//var_dump($ref);

//var_dump($ref->getDocComment());

//var_dump($ref->getProperties());

foreach ($ref->getProperties() as $reflectionProperty) {
    //var_dump($reflectionProperty->getModifiers());

    //var_dump($reflectionProperty->isPrivate()); //true

    //var_dump($reflectionProperty->isDefault()); //true

    //var_dump($reflectionProperty->isStatic());

    //var_dump($reflectionProperty->isProtected());

    //$reflectionProperty->setAccessible(true);

    //var_dump($reflectionProperty->getName());

    $doc = $reflectionProperty->getDocComment();

    //var_dump($doc);

    $matches = [];
    if ($doc && preg_match('/@Col/', $doc, $matches)) {
        var_dump($matches);
    }


    //var_dump($reflectionProperty->getName());
}


//方法1：
$refMethod = new \ReflectionMethod(Demo::class, 'sayHelloTo');
$refMethod->invoke(new Demo(), '你的名字');

//方法2：
try {
    $refMethod = $ref->getMethod('sayHelloTo');
    $refMethod->invoke(new Demo(), "我的名字");
} catch (\ReflectionException $e) {

}
