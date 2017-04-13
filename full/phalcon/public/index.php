<?php

require_once '../app/Application.php';

try {
    $application = new Application();
    $application->main();
} catch (\Exception $e) {
    echo $e->getMessage();
}

