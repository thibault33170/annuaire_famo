<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Famo.' . $_EXTKEY,
	'Pi1',
	'ContactDisplay'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Famo.' . $_EXTKEY,
	'Pi2',
	'SearchContact'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Famo.' . $_EXTKEY,
	'Pi3',
	'OrganizationDisplay'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi3';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi3.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Annuaire - Famo');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairefamo_domain_model_contact', 'EXT:annuaire_famo/Resources/Private/Language/locallang_csh_tx_annuairefamo_domain_model_contact.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairefamo_domain_model_contact');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairefamo_domain_model_organization', 'EXT:annuaire_famo/Resources/Private/Language/locallang_csh_tx_annuairefamo_domain_model_organization.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairefamo_domain_model_organization');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairefamo_domain_model_department', 'EXT:annuaire_famo/Resources/Private/Language/locallang_csh_tx_annuairefamo_domain_model_department.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairefamo_domain_model_department');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_annuairefamo_domain_model_position', 'EXT:annuaire_famo/Resources/Private/Language/locallang_csh_tx_annuairefamo_domain_model_position.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_annuairefamo_domain_model_position');
