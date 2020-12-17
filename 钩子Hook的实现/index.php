<?php

/**
 * 预览
 * 执行 php index.php
 */

require __DIR__.'/PluginManager.php';
require __DIR__.'/DemoHook.php';

$pluginManager = new PluginManager();
new DemoHook($pluginManager);
$pluginManager->trigger('demo','');
