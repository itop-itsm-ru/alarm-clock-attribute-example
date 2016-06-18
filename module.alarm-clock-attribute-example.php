<?php


SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'alarm-clock-attribute-example/1.0.0',
	array(
		// Identification
		//
		'label' => 'An example of using the Alarm Clock attribute module',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-service-mgmt-provider/2.2.0',
			'alarm-clock-attribute/0.1.2'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.alarm-clock-attribute-example.php',
		),
		'data.struct' => array(
			//'data.struct.itop-service-mgmt.xml',
		),
		'data.sample' => array(
		),

		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',

		// Default settings
		//
		'settings' => array(
		),
	)
);
