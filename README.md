typo3-merged
============

TYPO3 Merged Issues Checker.

This is a pretty ugly script which "simply" checks the git logs for various
TYPO3 branches, parses information like "Resolves:" and "Branches:" lines
and generates a HTML file with an overview of which fix has been backported
and which is still open.

See it in action here:

	http://www.typo3-anbieter.de/typo3-merges/
	http://bit.ly/flow3-merged-changes


Initial setup
-------------

The following steps will get you up and running to generate a list of changes
in the TYPO3-Core. You can also set up this script to check other projects, see
examples in the different configuration files (e.g. `typo3-extbase.php` )

	cd <path/to/your/target/directory>
	git clone git://github.com/baschny/typo3-merged.git .

Then  clone the TYPO3-Core once for each branch (add those listed in `typo3-core.php`).
For speed improvements, we're keeping a full clone for each branch at
`/www/shared/TYPO3core` - if you want it to be at another place, change the path in
`typo3-core.php`.

	mkdir /www/shared/TYPO3core
	cd /www/shared/TYPO3core/
	git clone git://git.typo3.org/TYPO3v4/Core.git TYPO3_6-0
	git clone git://git.typo3.org/TYPO3v4/Core.git TYPO3_4-7
	git clone git://git.typo3.org/TYPO3v4/Core.git TYPO3_4-6
	git clone git://git.typo3.org/TYPO3v4/Core.git TYPO3_4-5
	git clone git://git.typo3.org/TYPO3v4/Core.git TYPO3_4-4

Then run the script `check-changes.php` with one single parameter that points to the
TYPO3-Core config file. See below:

Usage
-----

You need to prepare git clones and a matching configuration, then run the
check-changes.php script with the configuration file as first parameter.

	./check-changes.php typo3-core.php

This will generate you a core.html file that contains the report.
