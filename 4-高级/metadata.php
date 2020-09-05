<?php


require_once __DIR__.'./vendor/autoload.php';

use Metadata\MetadataFactory;
use Metadata\Driver\DriverChain;

class Col{

    /**
     * @Target
     * @var string
     */
    public $name;

    /**
     * @Target
     * @var string
     */
    public $description;
}

$driver = new DriverChain(array(
    /** Annotation, YAML, XML, PHP, ... drivers */
));
$factory = new MetadataFactory($driver);
$metadata = $factory->getMetadataForClass(Col::class);

var_dump($metadata);