<?php
CModule::IncludeModule("russianpostjoke");
global $DBType;

$arClasses=array(
    'cMainRPJ'=>'classes/general/cMainRPJ.php'
);

CModule::AddAutoloadClasses("russianpostjoke",$arClasses);
