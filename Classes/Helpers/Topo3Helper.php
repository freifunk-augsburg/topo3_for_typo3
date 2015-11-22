<?php

namespace Comuno\Topo3ForTypo3\Helpers;

use TYPO3\CMS\Core\Resource\File;
use TYPO3\CMS\Core\Resource\Folder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Download topo3.json
 */
class Topo3Helper {

    /**
     * fetch topo3.json
     *
     * @param array $settings
     * @return string|false
     */
    public function getTopoData($settings) {
        $temporaryFileName = PATH_site . 'typo3temp/topo3.json';
        $cacheStillValid = FALSE;
        if (file_exists($temporaryFileName)) {
            // check if cache is still valid
            $filemtime = filemtime($temporaryFileName);
            if ($filemtime && (time() - $filemtime <= $settings['src']['cache'])){
                $cacheStillValid = TRUE;
            }
        }
        if ($cacheStillValid) {
            return 'typo3temp/topo3.json';
        } else {
            $topoData = GeneralUtility::getUrl($settings['src']['url']);
            //    );
            if ($topoData === FALSE) {
                return FALSE;
            } else {
                file_put_contents($temporaryFileName, $topoData);
                GeneralUtility::fixPermissions($temporaryFileName);
                return 'typo3temp/topo3.json';
            }
        }
    }

}
