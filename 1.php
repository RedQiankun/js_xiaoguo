<?php
header('Content-Type:application/json;charset=utf8');

$files=$_FILES['files'];
$tmp=$files['tmp_name'];
$ends=dirname(__FILE__);
$ends.='\uploads\ajax.js';
$request=move_uploaded_file($tmp,$ends);
echo $ends;