Addons to Doctrine (DoctrineExtensions)
=======================================

What is does
------------

This extension brings the DoctrineExtensions library” PHP classes
“beberlei/doctrineextensions” to TYPO3.


What is the origin
------------------

See https://github.com/beberlei/DoctrineExtensions/tree/v1.5.0

All the library classes are available in the extension file
*Library/doctrine-extensions.phar* which is automatically included
upon activation in the extension manager by composer or autoloader.

Documentation
-------------

https://www.doctrine-project.org/projects/doctrine-orm/en/3.5/cookbook/dql-user-defined-functions.html

Installation
------------

Via composer or the TER.

Composer
~~~~~~~~

``composer req jambagecom/addons-doctrine``

TER
~~~

https://extensions.typo3.org/extension/addons_doctrine

phar-composer
^^^^^^^^^^^^^

Get it from here: https://github.com/clue/phar-composer

For developers
^^^^^^^^^^^^^^

In case TYPO3 does not run in composer mode, the library directory can
be rebuilt by - running ``composer run-script extension-create-libs``. -
See chapter contributors.

For contributors
^^^^^^^^^^^^^^^^

-  Adapt the composer.json file’s version of “beberlei/doctrineextensions”
   twice (e.g.&nbsp;1.5.0).
-  To build the TER package, you must delete the file
   *Libraries/doctrine-extensions.phar* and run the command
   ``composer run-script extension-release`` in the extension folder for
   generating the archive.
-  At the beginning you will get the question: *“No composer.json in
   current directory, do you want to use the one at
   /var/www/html/typo3conf/ext/base_excel? [Y,n]?”*. – Here you must
   answer with **n**.
-  Then everything will be downloaded and the resulting file
   *Library/doctrine-extensions.phar* will be generated.
