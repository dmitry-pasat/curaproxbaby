<?php 

// define lang array
// $available_lang = ['de', 'en', 'fr'];
$available_lang = ['de'];
$prepared_lang = [];
$languages = array_merge($available_lang, $prepared_lang);
$lang = '';

// set lang
if (isset($_GET['l'])) {
	// get l param
	$lang = $_GET['l'];
} else {
	// check browser lang
	$b_languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

	foreach($b_languages as $b_lang) {
		$b_lang_code = substr($b_lang, 0, 2);
		if(in_array($b_lang_code, $available_lang)) 		{
			// Set the page locale to the first supported language found
			if (!in_array($b_lang_code, $prepared_lang))
				$lang = $b_lang_code;
			break;
		}
	}
}
// set default de
if ($lang == '' || !in_array($lang, $languages)) {
	$lang = 'de';
}

// shop link
// default .com Shop
$shopUrl = 'https://shop.curaprox.com/'.$lang.'/7-baby';
if ($ccode == 'DE' || $ccode == 'AT' || $ccode == 'LU' || $ccode == 'BE')
	$shopUrl = 'https://shop.curaprox.de/7-baby';
if ($ccode == 'FR')
	$shopUrl = 'https://shop.curaprox.fr/7-bebe-et-enfants';
if ($ccode == 'SK')
 	$shopUrl = 'http://www.zdravedasna.sk/produkt/1835';
if ($ccode == 'GB')
	$shopUrl = 'https://shop.curaprox.co.uk/11-baby';
if ($ccode == 'PL')
	$shopUrl = 'https://shop.curaprox.pl/7-dziecko';

// website link
$wwwUrlText = 'www.curaprox.com';
$wwwUrl = 'http://curaprox.com/ch-'.$lang;
if ($ccode == 'DE' || $ccode == 'AT' || $ccode == 'LU' || $ccode == 'BE')
	$wwwUrl = 'http://curaprox.com/de-de/';
if ($ccode == 'FR')
	$wwwUrl = 'http://curaprox.com/fr-fr/';
if ($ccode == 'SK' || $lang == 'sk') {
	$wwwUrl = 'http://curaprox.com/sk-sk';
}
if ($ccode == 'PL' || $lang == 'pl') {
	$wwwUrl = 'http://curaprox.com/pl-pl';
}
if ($ccode == 'BG')
	$wwwUrl = 'http://curaprox.com/gb-en';

// faq link
$faqUrlText = 'curaprox.com/faq';
$faqUrl = 'http://curaprox.com/ch-'.$lang.'/faq';
if ($ccode == 'SK' || $lang == 'sk') {
	$faqUrl = 'http://curaprox.com/sk-sk/faq';
}
if ($ccode == 'PL' || $lang == 'pl') {
	$faqUrl = 'http://curaprox.com/pl-pl/faq';
}
if ($ccode == 'NL') {
	$faqUrl = 'http://curaprox.com/nl-nl/faq';
}

// get translation
require_once('translations/'.$lang.'.php');

// lang nav
$lang_nav = '';
for ($i=0; $i < count($available_lang); $i++) {
	$lang_uppercase = strtoupper($available_lang[$i]);
	if (isset($lang_nav) && $lang != $available_lang[$i])
		$lang_nav .= '<li><a href="index.php?l='.$available_lang[$i].'">'.constant("TEXT_LANG_{$lang_uppercase}").'</a></li>';
}

?>