<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Job.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Welcome to the job board!";
    });

    $app->get("/test-contact", function(){
        $bob = new Contact("Bob Marley","myAddress","555-Bite-ME");
        $new_job = new Job("programmer", "make money", $bob);

        $output = "";
        $output .= '<br>$bob = new Contact("myName","myAddress","555-Bite-ME")';
        $output .= '<br>new Job("programmer", "make money", $bob);';
        $output .= '<br>getTitle(): ' . $new_job->getTitle();
        $output .= '<br>getDescription(): ' . $new_job->getDescription();
        $output .= "<br>getName(): " . $new_job->getContact()->getName();
        $output .= "<br>getAddress(): " . $new_job->getContact()->getAddress();
        $output .= "<br>getPhoneNumber(): " . $new_job->getContact()->getPhoneNumber();

        return  "Test Output -- $output";


    });

    return $app;``
?>
