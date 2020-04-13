<?php
defined('TYPO3_MODE') or die();

// Add the "news" plugin group
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'list_type',
    'news',
    'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pi1_title'
);

$actions = [
    'NewsList' => 'news_list',
    'NewsListOnly' => 'news_listOnly',
    'NewsDetail' => 'news_detail',
    'DateMenu' => 'news_datemenu',
    'SearchForm' => 'news_searchform',
    'SearchResult' => 'news_searchresult',
    'SelectedList' => 'news_selectedlist',
    'TagList' => 'tag_list',
    'CategoryList' => 'category_list',
];
foreach ($actions as $identifier => $item) {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'News',
        $identifier,
        'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.mode.' . $item,
        null,
        'news'
    );

    $listType = 'news_' . strtolower($identifier);
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$listType] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$listType] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($listType,
        'FILE:EXT:news_actions/Configuration/FlexForms/Split/' . $identifier . '.xml');
}



