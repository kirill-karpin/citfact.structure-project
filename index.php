<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>
<?$APPLICATION->IncludeComponent("citfact:form", ".default", array(
	"ID" => "2",
	"TYPE" => "IBLOCK",
	"EVENT_NAME" => "FEEDBACK",
	"EVENT_TEMPLATE" => "",
	"EVENT_TYPE" => "",
	"BUILDER" => "Citfact\\Form\\Builder\\IBlockBuilder",
	"STORAGE" => "Citfact\\Form\\Storage\\IBlockStorage",
	"VALIDATOR" => "Citfact\\Form\\Validator\\IBlockValidator",
	"AJAX" => "N",
	"USE_CAPTCHA" => "N",
	"REDIRECT_PATH" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>