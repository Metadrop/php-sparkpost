<?php

require_once dirname(__FILE__).'/../vendor/autoload.php';

//pull in API key config
$optionsFile = file_get_contents(dirname(__FILE__).'/example-options.json');
$options = json_decode($optionsFile, true);
