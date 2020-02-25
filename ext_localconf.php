<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'NewsList',
    [\GeorgRinger\News\Controller\NewsController::class => 'list,detail']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'NewsListOnly',
    [\GeorgRinger\News\Controller\NewsController::class => 'list']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'NewsDetail',
    [\GeorgRinger\News\Controller\NewsController::class => 'detail']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'SelectedList',
    [\GeorgRinger\News\Controller\NewsController::class => 'dateMenu']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'SearchForm',
    [\GeorgRinger\News\Controller\NewsController::class => 'searchForm'],
    [\GeorgRinger\News\Controller\NewsController::class => 'searchForm']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'SearchResult',
    [\GeorgRinger\News\Controller\NewsController::class => 'searchResult'],
    [\GeorgRinger\News\Controller\NewsController::class => 'searchResult']
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'SelectedList',
    [\GeorgRinger\News\Controller\NewsController::class => 'selectedList']
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'TagList',
    [\GeorgRinger\News\Controller\TagController::class => 'list']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'News',
    'CategoryList',
    [\GeorgRinger\News\Controller\CategoryController::class => 'list']
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:news_actions/Configuration/TsConfig/PageTsConfig.typoscript">
');
