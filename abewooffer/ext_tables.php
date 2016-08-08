<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Abewoch.' . $_EXTKEY,
	'Offer',
	'offer'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'ABEWO Offer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_abewooffer_domain_model_offer', 'EXT:abewooffer/Resources/Private/Language/locallang_csh_tx_abewooffer_domain_model_offer.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_abewooffer_domain_model_offer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_abewooffer_domain_model_locality', 'EXT:abewooffer/Resources/Private/Language/locallang_csh_tx_abewooffer_domain_model_locality.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_abewooffer_domain_model_locality');
