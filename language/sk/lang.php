<?php

/**
 *
 * PGreca Social extension for phpBB.
 * Slovak translation by Fonzi
 *
 * @copyright (c) 2018 pgreca <https:/pgreca.it>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
 
if(!defined('IN_PHPBB'))
{
	exit;
}
if(empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(	
	'ABOUT_HOUR'						=> array(
		1				=> 'hodinou',
		2				=> 'hodinami',
	),
	'ABOUT_ME'							=> 'O mne',
	'ABOUT_MONTH'						=> 'mesiacom',
	'ABOUT_MONTHS'						=> 'mesiacmi',
	'ACTIVITY'							=> 'Aktivita',
	'ACTIVITY_PAGE'						=> 'Nástenka',
	'AGO'								=> '',
	//'ALBUM_CREATE'						=> '',
	//'ALBUM_CREATE_EXPLAIN'						=> '',
	//'ALBUM_CREATE_TITLE'						=> '',
	//'ALBUM_CREATE_NOW'						=> '',
	'ALL'								=> 'Verejné',
	'APPROVE_PAGE'						=> 'Schválené',
	'ARE_YOU_SURE'						=> 'Naozaj chcete odstrániť tento komentár?',
	'ARE_YOU_SURE_PHOTO'				=> 'Naozaj chcete odstrániť túto fotku?',
	'ATTACH_PICTURE'					=> 'Pripojiť obrázok',
	'PG_SOCIAL_AVATAR'					=> 'Avatar',
	'COMMENT'							=> array(
		0				=> 'Bez komentárov',
		1				=> 'Komentár',
		2				=> 'Komentárov',
	),
	'COMMENT_THIS_ACTIVITY'				=> 'Napíšte komentár...',
	'CREATE'							=> 'Vytvoriť',
	'CREATED'							=> 'Vytvoril',
	'PG_SOCIAL_COVER'				=> 'Titulná fotka',
	'DAY'								=> array(
		1	=> 'deň',
		2	=> 'dní',
	),
	'DO_YOU_WANT_SHARE'					=> 'Chcete túto aktivitu zdieľať?',
	'EDIT'								=> 'Upraviť',
	'EDIT_PROFILE'						=> 'Upraviť profil',
	'FAVORITE_BOOK'						=> array(
		1				=> 'Obľúbená kniha',
		2				=> 'Obľúbené knihy',
	),
	'FAVORITE_GAME'						=> array(
		1				=> 'Obľúbená hra',
		2				=> 'Obľúbené hry',
	),
	'FAVORITE_MOVIE'					=> array(
		1				=> 'Obľúbený film',
		2				=> 'Obľúbené filmy',
	),
	'FAVORITE_MUSIC'					=> array(
		1				=> 'Obľúbená hudba/song/spevák/skuúina',
		2				=> 'Obľúbené hudby/songy/speváci/skupiny',
	),
	
	'FAVORITE_TVSHOW'					=> array(
		1				=> 'Obľúbený seriál',
		2				=> 'Obľúbené seriály',
	),
	'FRIEND'							=> array(
		1				=> 'Priateľ',
		2				=> 'Priatelia',
	),
	'FRIENDS_SUGGESTION'				=> 'Návrhy priateľov',
	'GALLER'							=> 'Galéria',
	'GENDER'							=> 'Pohlavie',
	'GENDER_FEMALE'						=> 'Žena',
	'GENDER_MALE'						=> 'Muž',
	'GENDER_UNKNOWN'					=> 'Neuvedené',
	'HAS_COMMENT_POST'					=> '%s komentoval <a href="%s">aktivitu</a> z %s',
	'HAS_COMMENT_HER_POST'				=> '%s komentooval <a href="%s">aktivitu</a>',
	'HAS_COMMENT_YOUR_POST'				=> '%s komentoval aktivitu',
	'HAS_LIKE_POST'						=> '%s sa páčila <a href="%s">aktivita</a> z %s',
	'HAS_LIKE_HER_POST'					=> '%s sa páčila <a href="%s">aktivita</a>',
	'HAS_LIKE_YOUR_POST'				=> '%s sa páčila vaša aktivita',
	//'HAS_PUBLISHED_PHOTO'				=> 'ha pubblicato una foto',
	//'HAS_PUBLISHED_PHOTO_ALBUM'			=> '',
	'HAS_REG'							=> '%s bol zaregistrovaný',
	'HAS_SHARED_STATUS'					=> 'zdieľa %s',
	'HAS_UPLOADED_AVATAR'				=> 'nahral nový profilový obrázok',
	'HAS_UPLOADED_COVER'				=> 'nahral nový titulný obrázok',
	'HAS_TAGGED_YOU'					=> '%s vás označil v aktivite',
	'HAS_WRITE_IN'						=> 'has written on the wall of',
	'HAS_WRITE_IN_YOUR'					=> '%s napísal na Vašu nástenku',
	'HAS_WRITED_ARTICLE'				=> 'napísal článok',
	'HAS_WRITED_POST_ON'				=> 'napísal príspevok %s',
	'HAS_WRITED_POST_ON_CANCEL'			=> 'Bol napísaný príspevok na tému',
	'HOBBY'								=> array(
		1				=> 'Koníček',
		2				=> 'Koníčky',
	),
	'HOBBIES_INTERESTS'					=> 'Koníčky a záujmy',
	'HOUR'								=> array(
		1				=> 'hodinou',
		2				=> 'hodinami',
	),
	'INFO'								=> 'Informácie',
	'YOU_SEE_ACTIVITY'					=> 'Hľadáte aktivitu %s',
	'LAST_PHOTO'						=> array(
		1				=> 'Posledná fotka',
		2				=> 'Posledné fotky',
	),
	'LESS'								=> 'less than',
	'LIKE'								=> array(
		1				=> 'Páči sa mi to',
		2				=> 'Páči sa mi to',
	),
	//'LIKE_ACTIVE'  						=> 'You like it',
	'LIKE_TO'							=> 'Like to',
	'MINUTE'							=> array(
		1				=> 'minútou',
		2				=> 'minútami',
	),	
	'NOTIFICATION_PG_SOCIAL'			=> 'Upozornenia',
	'NOTIFICATION_TYPE_SOCIAL_STATUS'	=> 'píše niečo na nástenku',
	'NOTIFICATION_TYPE_SOCIAL_COMMENTS'	=> 'komentoval váš komentár',
	'NOTIFICATION_TYPE_SOCIAL_LIKES'	=> 'páči sa mi tento príspevok',
	'NOTIFICATION_TYPE_SOCIAL_TAG'		=> 'označený v aktivite',
	'ONLY_YOU'							=> 'Iba ty',
	'OPTIONS'							=> 'Možnosti',
	'OTHER_SOCIALNETWORK'				=> 'Ostatné sociálne siete',
	'PAGE_CREATE'						=> 'Vytvoriť stránku',
	'PAGE_INSERT_NAME'					=> 'Názov novej stránky',
	'PAGE_USERNAME'						=> 'Názov stránky',
	'PAGE_MAY_LIKE'						=> 'Môže sa vám páčiť stránka',
	'PAGES'								=> 'Stránky',
	'PERSONAL_INFO'						=> 'Osobné informácie',
	//'PG_SOCIAL_CHAT_DISABLE'			=> 'Disable chat',
	//'PG_SOCIAL_CHAT_SOUND_DISABLE'				=> 'Disable sound when receive new messages on chat',
	'PG_SOCIAL_COMMENT_NEW_LOG'			=> '<strong>Komentovala aktivitu</strong><br />» %s',
	'PG_SOCIAL_COMMENT_REMOVE_LOG'		=> '<strong>Zmaže svoj komentár z aktivity</strong>',
	'PG_SOCIAL_FRIENDS'					=> 'Priatelia',
	'PG_SOCIAL_FRIENDS_ACCEPT_REQ'		=> 'Prijať žiadosť',
	'PG_SOCIAL_FRIENDS_ADD'				=> 'Pridať priateľa',
	'PG_SOCIAL_FRIENDS_CANCEL_REQ'		=> 'Zrušiť žiadosť',
	'PG_SOCIAL_FRIENDS_DECLINE_REQ'		=> 'Zamietnúť žiadosť',
	'PG_SOCIAL_FRIENDS_REMOVE'			=> 'Odstrániť priateľa',
	'PG_SOCIAL_STATUS_DELETE'			=> 'Odstrániť',
	'PG_SOCIAL_DISLIKE_NEW_LOG'			=> '<strong>Not likes more an activity</strong><br />» %s',
	'PG_SOCIAL_LIKE_NEW_LOG'			=> '<strong>Likes an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_NEW_LOG'			=> '<strong>Has published an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_SHARE_LOG'		=> '<strong>Has shared an activity</strong><br />» %s',
	'PG_SOCIAL_STATUS_REMOVE_LOG'		=> '<strong>Has deleted an activity</strong>',	
	'PG_SOCIAL_WRITE_A_MESSAGE'					=> 'Napíšte správu',
	'PG_SOCIAL_WRITE_SOMETHING'					=> 'Niečo napíšte',
	'PG_SOCIAL_VERSION'							=> 'Verzia',
	'PHOTO_DELETE'						=> 'Odstrániť túto fotku',
	'PHOTO'								=> array(
		1				=> 'Fotka',
		2				=> 'Fotky',
	),
	'PRIVACY_ALL'						=> 'Verejné',
	'PRIVACY_ONLY_FRIENDS'				=> 'Priatelia',
	'PRIVACY_ONLY_ME'					=> 'Iba ja',	
	'PRIVACY_VISIBLE_FOR'				=> 'Viditeľné pre',
	'PROFILE_AVATAR_UPDATE'				=> 'Aktualizovať profilovú fotku',
	'PROFILE_COVER_UPDATE'				=> 'Aktualizovať titulnú fotku',
	'PROFILE_UPDATE'					=> 'Aktualizovať profil',
	'PUBLIC'							=> 'Zdieľať',
	'QUOTE'								=> 'Citát',
	'RECENT_DISCUSSIONS'				=> 'Nedávna diskusia',
	'SOCIAL_STATU'						=> 'Status',
	'SOCIAL_STATUS_UNKNOW'				=> 'Neuvedené',
	'SOCIAL_STATUS_SINGLE'				=> 'Slobodný',
	'SOCIAL_STATUS_ENGAGED'				=> 'Zasnúbený',
	'SOCIAL_STATUS_MARRIED'				=> 'Ženatý',
	'SOCIAL_STATUS_COMPLICATED'			=> 'Je to komplikované',
	'SOCIAL_STATUS_RELATIONSHIP'		=> 'V otvorenom vzťahu',
	'SECONDS'							=> 'sekundami',
	'SHARE'								=> 'Zdieľať',
	'STATUS'							=> 'status',
	'PG_SOCIAL_SUPPORT_EXT_KOFI'		=> '',
	'PG_SOCIAL_WALL'					=> 'Nástenka',
	'WALL_TIME_AGO'						=> 'pred %1$u %2$s',
	'WALL_TIME_FROM_NOW'			  => 'pred %1$u %2$s',
	'WALL_TIME_PERIODS'				  => array(
		1	 		=> 'sekundami',
		2	 		=> 'minútou',
		'SECOND'	 => 'sekunda',
		'SECONDS'	 => 'sekúnd',
		'MINUTE'	 => 'minútou',
		'MINUTES'	 => 'minútami',
		'HOUR'		 => 'hodinou',
		'HOURS'		 => 'hodínami',
		'DAY'		 => 'dňom',
		'DAYS'		 => 'dňami',
		'WEEK'		 => 'týždňom',
		'WEEKS'		 => 'týždňami',
		'MONTH'		 => 'mesiacom',
		'MONTHS'	 => 'mesiacmi',
		'YEAR'		 => 'rokom',
		'YEARS'		 => 'rokmi',
		'DECADE'	 => 'desaťročie',
		'DECADES'	 => 'desaťročím',
	),
));