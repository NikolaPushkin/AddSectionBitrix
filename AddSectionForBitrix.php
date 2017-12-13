<?php
   require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Создание нового раздела");
    CModule::IncludeModule("iblock");

$arrayName = array(
'Раздел №1'=>'section_1',
'Раздел №2'=>'section_2',
'Раздел №3'=>'section_3',
'Раздел №4'=>'section_4',



);
$bs = new CIBlockSection;
foreach ($arrayName as $key => $value) {
$arFields = Array(
   'ACTIVE' => 'Y',    
	'IBLOCK_ID' => 10, // задаем ID инфоблока в котором будем создавать новые разделы
	'IBLOCK_SECTION_ID' => 47, // задаем ID раздела, в котором необходимо создать подразделы.В случае если необходимо создавать разделы в корне данную строку можно закомментировать
    'NAME' => $key,
    'CODE' => $value,  
	'DESCRIPTION' => '<p>Внимание! Раздел находится на стадии разработки. В ближайшее время он будет наполнен.</p>',
    'DESCRIPTION_TYPE' => 'html',

  );

if ($bs->Add($arFields)) {
    echo 'Элемент'. $key.  ' успешно добавлен в инфоблок <br>';
} else {
    echo 'Ошибка добавления элемента в инфоблок: '.$el->LAST_ERROR;
}


}


 require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); 
