<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Abewoch.' . $_EXTKEY,
	'Houselist',
	'houselist'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'ABEWO house types');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_abewohousetypes_domain_model_house', 'EXT:abewohousetypes/Resources/Private/Language/locallang_csh_tx_abewohousetypes_domain_model_house.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_abewohousetypes_domain_model_house');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_abewohousetypes_domain_model_category', 'EXT:abewohousetypes/Resources/Private/Language/locallang_csh_tx_abewohousetypes_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_abewohousetypes_domain_model_category');
