<?php
include 'ZhConversion.php';
define('MOODLE_INTERNAL', true);

$sourceLang = 'zh_cn';
$targetLang = 'zh_tw';
$fileContent = '<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component \'access\', language \'zh_tw\', branch \'MOODLE_23_STABLE\'
 *
 * @package   access
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined(\'MOODLE_INTERNAL\') || die();

';


foreach(glob("{$sourceLang}/*.php") AS $file) {
	$finfo = pathinfo($file);
	$targetContent = str_replace('access', $finfo['filename'], $fileContent);
	$string = array();
	$targetFile = str_replace($sourceLang, $targetLang, $file);
	include $file;
	$sourceStrings = $string;
	if(file_exists($targetFile)) {
		$string = array();
		include $targetFile;
		$targetStrings = $string;
	} else {
		$targetStrings = array();
	}
	foreach($sourceStrings AS $key => $val) {
		$targetContent .= '$string[\'' . $key . '\'] = \'';
		if(isset($targetStrings[$key])) {
			$translated = strtr($targetStrings[$key], $zh2TW);
		} else {
			$translated = strtr($val, $zh2Hant);
			$translated = strtr($translated, $zh2TW);
		}
		$targetContent .= str_replace('\'', '\\\'', $translated);
		$targetContent .= '\';' . "\n";
	}
	file_put_contents($targetFile, $targetContent);
}
