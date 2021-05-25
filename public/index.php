<?php
// This is the entrypoint into the app, all paths will be redirected here unless another file exists at the path.

// Composer autoload:
require_once "../vendor/autoload.php";

// Classes can be autoloaded from the src/ directory under the "Task" namespace.
$test = new \Task\TestClass();
echo $test->helloWorld();
