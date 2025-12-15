<?php

use Psr\Http\Message\ServerRequestInterface;

if (!defined('TYPO3')) {
	die('Access denied.');
}

(function() {
    if(true === isset($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tgm_copyright']['copyrightRequired'])
        && true === (bool) $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tgm_copyright']['copyrightRequired']
        && (
            !(($GLOBALS['TYPO3_REQUEST'] ?? null) instanceof ServerRequestInterface)
                || false === \TYPO3\CMS\Core\Http\ApplicationType::fromRequest($GLOBALS['TYPO3_REQUEST'])->isFrontend()
        )
    )
     {
        try {
            $pageRenderer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
            $pageRenderer->loadJavaScriptModule('@paulbeck/tgmcopyright/copyrightmandatory');
        } catch (Exception $exc) {
        }
    }
})();