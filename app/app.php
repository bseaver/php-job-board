<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Welcome to the job board!";
    });

    $app->get("/test-contact", function(){
        $new_job = new Job("programmer", "make money", "503-555-5555");
        return  "My job is: " . $new_job->getContact();


    });

    return $app;
?>
