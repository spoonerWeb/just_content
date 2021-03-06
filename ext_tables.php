<?php
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
defined('TYPO3_MODE') || die('Access denied!');

$boot = function($packageKey) {
    if (TYPO3_MODE === 'BE') {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'SpoonerWeb.' . $packageKey,
            'web',
            'Content',
            '',
            array(
                'Content' => 'index'
            ),
            array(
                'access' => 'user,group',
                'icon' => 'EXT:just_content/ext_icon.png',
                'labels' => 'LLL:EXT:' . $packageKey . '/Resources/Private/Language/locallang_mod.xlf',
            )
        );
    }
};

$boot($_EXTKEY);
unset($boot);
