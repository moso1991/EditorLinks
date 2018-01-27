<?php
/**
 * A special page holding special convenience links for sysops
 *
 * @author Yaron Koren
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

// credits
$GLOBALS['wgExtensionCredits']['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Editor Links',
	'version' => '0.2.3',
	'author' => 'Yaron Koren',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Editor_Links',
	'descriptionmsg' => 'editorlinks-desc',
	'license-name' => 'GPL-2.0+'
);

$GLOBALS['wgEditorLinksIP'] = __DIR__ . '/';
$GLOBALS['wgMessagesDirs']['EditorLinks'] = __DIR__ . '/i18n';
$GLOBALS['wgExtensionMessagesFiles']['EditorLinksAlias'] =
	$GLOBALS['wgEditorLinksIP'] . 'EditorLinks.alias.php';
$GLOBALS['wgSpecialPages']['EditorLinks'] = 'EditorLinks';
$GLOBALS['wgHooks']['PersonalUrls'][] = 'EditorLinks::addURLToUserLinks';
$GLOBALS['wgAvailableRights'][] = 'EditorLinks';
// by default, sysops see the link to this page
$GLOBALS['wgGroupPermissions']['sysop']['EditorLinks'] = true;
$GLOBALS['wgAutoloadClasses']['EditorLinks']
	= $GLOBALS['wgAutoloadClasses']['ALTree']
	= $GLOBALS['wgAutoloadClasses']['ALSection']
	= $GLOBALS['wgAutoloadClasses']['ALRow']
	= $GLOBALS['wgAutoloadClasses']['ALItem']
	= $GLOBALS['wgEditorLinksIP'] . 'EditorLinks_body.php';
