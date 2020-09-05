<?php
/**
 * 实现注解
 */

require_once __DIR__ . './vendor/autoload.php';


use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\Annotation;


/**
 * 反射机制
 * @Annotation
 * @Target({"CLASS", "METHOD","PROPERTY"})
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

/**
 * @Annotation
 */
final class Col{

    public $name;

    public $description;
}



// Deprecated and will be removed in 2.0 but currently needed
AnnotationRegistry::registerLoader('class_exists');

$reflectionClass = new ReflectionClass(Demo::class);
$property = $reflectionClass->getProperty('name');
$property->setAccessible(true);

$reader = new AnnotationReader();
$myAnnotation = $reader->getPropertyAnnotation($property, Col::class);

echo $myAnnotation->description; // result: "value"


