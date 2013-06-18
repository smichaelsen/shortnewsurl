<?php

##################################################################
# Extension Manager/Repository config file for ext: "shortnewsurl"
##################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Short News URLs',
	'description' => 'Extends EXT:news to make shorter URLs possible.',
	'category' => 'frontend',
	'author' => 'Sebastian Michaelsen',
	'author_email' => 'sebastian.michaelsen@t3seo.de',
	'author_company' => 'KF Interactive',
	'state' => 'beta',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.7',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'news' => '2.1',
			'realurl' => '1.12.6',
		),
	),
);

?>