# topo3_for_typo3
A TYPO3 Frontend Extension that includes a TOPO3 topology on the page.

## To use it:
* clone to typo3conf/ext/topo3_for_typo3
* Install in Extension Manager
* Include Static Config in Templates
* Change settings
* include the plugin in a page

You can either serve a local topo3.json data file and update that e.g. by cron
or fetch one from a remote server. In the latter case, the file will be cached
on the webserver.

For TOPO3 see https://github.com/mmunz/TOPO3
