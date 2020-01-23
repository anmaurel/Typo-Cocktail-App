<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Amaurel.CocktailAm',
            'P1am',
            'Recettes am'
        );

        $pluginSignature = str_replace('_', '', 'cocktail_am') . '_p1am';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:cocktail_am/Configuration/FlexForms/flexform_p1am.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Amaurel.CocktailAm',
            'P2am',
            'Cocktail am'
        );

        $pluginSignature = str_replace('_', '', 'cocktail_am') . '_p2am';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:cocktail_am/Configuration/FlexForms/flexform_p2am.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cocktail_am', 'Configuration/TypoScript', 'cocktail am');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_tag', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_tag');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_recipe', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_recipe.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_recipe');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_step', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_step.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_step');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_review', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_review.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_review');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_cocktail', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_cocktail.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_cocktail');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_ustensil', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_ustensil.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_ustensil');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_quantity', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_quantity.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_quantity');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cocktailam_domain_model_ingredient', 'EXT:cocktail_am/Resources/Private/Language/locallang_csh_tx_cocktailam_domain_model_ingredient.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cocktailam_domain_model_ingredient');

    }
);
