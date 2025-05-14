<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetPageProperty("keywords", "Отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>

    <p>Заголовок - <?$APPLICATION->ShowTitle()?></p>
    <p>Заголовок - <?$APPLICATION->ShowProperty("test")?></p>
    <p>Заголовок - <?$APPLICATION->ShowProperty("title")?></p>
    <p>Заголовок - <?$APPLICATION->ShowProperty("keywords")?></p>
    <p>Заголовок - <?$APPLICATION->ShowProperty("description")?></p>

    <?php $APPLICATION->SetPageProperty("test", "Значение 2");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>