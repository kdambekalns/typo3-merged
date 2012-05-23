<?php
// configuration for TYPO3 core

$gitRoot = '/www/shared/TYPO3core/';
$htmlFile = '/home/ernst/TYPO3-Release/index.html';

$reviewLinkPattern = "https://review.typo3.org/#/q/tr:%s,n,z";

$issueMapping = array(
	'#M17868' => '#25258',
	'#M17924' => '#25305',
	'#M18051' => '#25406',
	'#M17916' => '#25301',
	'#24440' => '#23355',
	'#24410' => '#23355',
	'#23496' => '#23355',
	'#23860' => '#23355',
);

$projectsToCheck = array(
	'TYPO3 CMS Core' => array(
		'gitWebUrl' => 'http://git.typo3.org/TYPO3v4/Core.git',
		'releases' => array(
				# project, starting point, branch, working copy path
			#	array('4.2', 'refs/tags/TYPO3_4-2-0', 'origin/TYPO3_4-2', '/www/shared/TYPO3core/TYPO3_4-2/'),
			#	array('4.3', 'refs/tags/TYPO3_4-3-0', 'origin/TYPO3_4-3', '/www/shared/TYPO3core/TYPO3_4-3/'),
				array('4.4', 'refs/tags/TYPO3_4-4-0', 'origin/TYPO3_4-4', '/www/shared/TYPO3core/TYPO3_4-4/'),
				array('4.5', 'refs/tags/TYPO3_4-5-0', 'origin/TYPO3_4-5', '/www/shared/TYPO3core/TYPO3_4-5/'),
			#	array('4.5-BP', 'refs/tags/TYPO3_4-5-0', 'backports/TYPO3_4-5', '/www/shared/TYPO3core/TYPO3_4-5_backports/'),
				array('4.6', 'refs/tags/TYPO3_4-5-0', 'origin/TYPO3_4-6', '/www/shared/TYPO3core/TYPO3_4-6/'),
			#	array('4.6-BP', 'refs/tags/TYPO3_4-5-0', 'backports/TYPO3_4-6', '/www/shared/TYPO3core/TYPO3_4-6_backports/'),
				array('4.7', 'refs/tags/TYPO3_4-5-0', 'origin/TYPO3_4-7', '/www/shared/TYPO3core/TYPO3_4-7/'),
				array('6.0', 'refs/tags/TYPO3_4-5-0', 'origin/master', '/www/shared/TYPO3core/TYPO3_6-0/'),
		),
	),
);

?>