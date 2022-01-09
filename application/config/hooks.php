<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

//post_controller_constructor Called immediately after your controller is instantiated, but prior to any method calls happening.
$hook['post_controller_constructor'] = array(
    'class'    => 'LanguageLoader',
    'function' => 'initialize',
    'filename' => 'LanguageLoader.php',
    'filepath' => 'hooks'
);

// compress output
$hook['display_override'][] = array(
    'class' => '',
    'function' => 'before_rendering',
    'filename' => 'before_rendering.php',
    'filepath' => 'hooks'
    );