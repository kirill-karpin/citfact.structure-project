<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"",
	Array(
	)
);?><br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>