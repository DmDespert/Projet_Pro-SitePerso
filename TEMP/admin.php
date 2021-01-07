<?php

// Intégration de la librairie Smarty (moteur de template)
require 'php/class_mysql_dimsigner.php';

$db		= new dimsigner();

$db->create_login('karine', 'karine');
