<?php
    include("../config.php");
    include("functions.php");

    header("Content-Type: image/svg+xml");

    $samples=raw_getnumberofsamples();
    readfile("https://img.shields.io/badge/samples-".$samples."-green.svg");
