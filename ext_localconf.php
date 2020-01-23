<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Amaurel.CocktailAm',
            'P1am',
            [
                'Recipe' => 'list, show, search, highlight, random',
                'Review' => 'new, create'
            ],
            // non-cacheable actions
            [
                'Recipe' => 'search, random',
                'Review' => 'create'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Amaurel.CocktailAm',
            'P2am',
            [
                'Cocktail' => 'show, list, search, random, highlight'
            ],
            // non-cacheable actions
            [
                'Cocktail' => 'search, random'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    p1am {
                        iconIdentifier = cocktail_am-plugin-p1am
                        title = LLL:EXT:cocktail_am/Resources/Private/Language/locallang_db.xlf:tx_cocktail_am_p1am.name
                        description = LLL:EXT:cocktail_am/Resources/Private/Language/locallang_db.xlf:tx_cocktail_am_p1am.description
                        tt_content_defValues {
                            CType = list
                            list_type = cocktailam_p1am
                        }
                    }
                    p2am {
                        iconIdentifier = cocktail_am-plugin-p2am
                        title = LLL:EXT:cocktail_am/Resources/Private/Language/locallang_db.xlf:tx_cocktail_am_p2am.name
                        description = LLL:EXT:cocktail_am/Resources/Private/Language/locallang_db.xlf:tx_cocktail_am_p2am.description
                        tt_content_defValues {
                            CType = list
                            list_type = cocktailam_p2am
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'cocktail_am-plugin-p1am',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cocktail_am/Resources/Public/Icons/user_plugin_p1am.svg']
			);
		
			$iconRegistry->registerIcon(
				'cocktail_am-plugin-p2am',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cocktail_am/Resources/Public/Icons/user_plugin_p2am.svg']
			);
		
    }
);
