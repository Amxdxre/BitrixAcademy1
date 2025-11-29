<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<? echo LANGUAGE_ID; ?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="/local/templates/.default/template_styles.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/favicon.ico">
    <script type="text/javascript" src="/local/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/functions.js"></script>

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
    <? include_once ($_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/include/header.php')?>
    </div>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "nav",
        [
            "COMPONENT_TEMPLATE" => ".default",
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1"
        ],
        false
    );?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?$APPLICATION->ShowTitle(false)?><?$APPLICATION->ShowViewContent('CATALOG_VOTE_STARS');?></p>
                        <span class="main_date"><?$APPLICATION->ShowViewContent('NEWS_ACTIVE_DATE');?></span>
                    </div>
                    <!-- workarea -->