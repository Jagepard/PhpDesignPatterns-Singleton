<?php

namespace AntiPatterns\Singleton;

require_once "vendor/autoload.php";

print (!Singleton::getInstance() instanceof Singleton) ?: "Singleton \n";
