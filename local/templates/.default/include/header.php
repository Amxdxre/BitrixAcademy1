<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<div class="hd_header">
    <table>
        <tr>
            <td rowspan="2" class="hd_companyname">
                <h1><a href="">Мебельный магазин</a></h1>
            </td>
            <td rowspan="2" class="hd_txarea">
                        <span class="tel"><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => "/include/phone.php"
                                ],
                                false
                            );?></span>	<br/>
                <?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
            </td>
            <td style="width:232px">
                <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"custom_search", 
	[
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N",
		"COMPONENT_TEMPLATE" => "custom_search"
	],
	false
);?>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 11px;">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "custom_auth",
                    [
                        "COMPONENT_TEMPLATE" => ".default",
                        "FORGOT_PASSWORD_URL" => "/user/",
                        "PROFILE_URL" => "/user/profile.php",
                        "REGISTER_URL" => "/user/registration.php",
                        "SHOW_ERRORS" => "Y"
                    ],
                    false
                );?>
            </td>
        </tr>
    </table>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	[
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => [
		],
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_multi"
	],
	false
);?>
</div>
