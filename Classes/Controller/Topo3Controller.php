<?php

namespace C1\Topo3ForTypo3\Controller;

use C1\Topo3ForTypo3\Helpers\Topo3Helper;

/**
 * Base controller
 *
 * @package TYPO3
 * @subpackage tx_topo3_for_typo3
 */
class Topo3Controller extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * action show
     *
     * @return void
     */
    public function showAction() {
        if (substr($this->settings['src']['url'], 0, 4) === 'http') {
            $topo3Helper = new Topo3Helper();
            $result = $topo3Helper->getTopoData($this->settings);
            if ($result) {
                $this->view->assign('dataSrc', $result);
            } else {
                $this->view->assign('dataSrc', $result);
                $this->view->assign('error', "Error: Could not load remote data.");
            }
        } else {
            $this->view->assign('dataSrc', $GLOBALS['TSFE']->absRefPrefix . '/' . $this->settings['src']['url']);
        }
    }

}
