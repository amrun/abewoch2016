<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'abewoch: template, conf and so on for the website');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey($_EXTKEY, 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey($_EXTKEY, 'Content');
