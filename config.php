<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire.
 * This config.php file was generated by the ProcessExportProfile module. 
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 2.x
 * Copyright (C) 2014 by Ryan Cramer
 * Licensed under GNU/GPL v2, see LICENSE.TXT
 *
 * http://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = true; 

$config->sessionFingerprint = true; 
$config->prependTemplateFile = '_init.php';
$config->appendTemplateFile = '_out.php';
$config->imageSizerOptions = array(
	'upscaling' => true,
	'cropping' => true, 
	'quality' => 90,
	);


/*** INSTALLER CONFIG ********************************************************************/


