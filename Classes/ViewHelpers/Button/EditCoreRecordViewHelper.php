<?php

namespace LST\BackendModule\ViewHelpers\Button;

/***
 *
 * This file is part of the "Backend Module" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Christian Fries <christian.fries@lst.team>
 *
 ***/

use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Displays a 'Edit record' button with default icon to edit record
 */
class EditCoreRecordViewHelper extends AbstractViewHelper
{
    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize arguments.
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('record', 'int', 'Uid of the record to edit.', true);
        $this->registerArgument('table', 'string', 'The table name of the record to edit.', true);
        $this->registerArgument('returnUrl', 'string', 'The return url.', true);
    }

    /**
     * @return string
     * @throws \TYPO3\CMS\Backend\Routing\Exception\RouteNotFoundException
     */
    public function render()
    {
        $record = $this->arguments['record'];
        $table = $this->arguments['table'];
        $returnUrl = $this->arguments['returnUrl'];
        $parameters = [
            rawurldecode('edit[' . $table . '][' . $record . ']') => 'edit',
            'returnUrl' => rawurldecode($returnUrl)
        ];

        /** @var IconFactory $iconFactory */
        $iconFactory = GeneralUtility::makeInstance(IconFactory::class);
        $icon = $iconFactory->getIcon('actions-document-open', Icon::SIZE_SMALL)->render();

        $uriBuilder = GeneralUtility::makeInstance(UriBuilder::class);
        $url = $uriBuilder->buildUriFromRoute('record_edit', $parameters);

        $title = htmlspecialchars(LocalizationUtility::translate('LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit'));

        return '<a class="btn btn-default" href="' . htmlspecialchars($url) . '" title="' . $title . '">' . $icon . '</a>';
    }
}
