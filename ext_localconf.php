<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add BackendLayouts BackendLayouts for the BackendLayout DataProvider
if (!$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['disablePageTsBackendLayouts']) {
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/Mod/web_layout.txt">');
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bootstrap_package']['disablePageTsBackendLayouts'] = 1;
} else {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['bootstrap_package']['disablePageTsBackendLayouts'] = 0;
}
?>
