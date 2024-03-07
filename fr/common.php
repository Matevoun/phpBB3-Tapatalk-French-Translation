<?php
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(

	// Éléments UMIL
	'ACP_MOBIQUO_TITLE'				=> 'Tapatalk',
	'ACP_MOBIQUO_TITLE_EXPLAIN'		=> 'Un plugin Tapatalk pour votre forum',
	'MOBIQUO_TABLE_DELETED'			=> 'La table Tapatalk a été supprimée avec succès',
	'MOBIQUO_TABLE_CREATED'			=> 'La table Tapatalk a été créée avec succès',
	'MOBIQUO_TABLE_UPDATED'			=> 'La table Tapatalk a été mise à jour avec succès',
	'MOBIQUO_NOTHING_TO_UPDATE'		=> 'Rien à faire... poursuite',
	'ACP_MOBIQUO'                   => 'Paramètres Tapatalk',
    'ACP_MOBIQUO_SETTINGS'          => 'Paramètres Tapatalk',
	'ACP_MOBIQUO_SETTINGS_EXPLAIN'  => 'Les paramètres généraux par défaut de Tapatalk peuvent être modifiés ici.',
	'ACP_MOBIQUO_MOD_VER'           => 'Version du MOD',
	'LOG_CONFIG_MOBIQUO'            => 'Mettre à jour les paramètres de Tapatalk',
	'acl_a_mobiquo'                 => array('lang' => 'Peut gérer les paramètres Tapatalk', 'cat' => 'divers'),

	'TP_PUSHENABLED'                => 'notifications push activées',
	'TP_PUSHENABLED_EXPLAIN' 		=> 'Si les notifications push sont activées, vous pourrez envoyer des notifications aux utilisateurs',
	'MOBIQUO_HIDE_FORUM_ID' 		=> 'Forums cachés',
	'MOBIQUO_HIDE_FORUM_ID_EXPLAIN' => 'Cachez les forums que vous ne souhaitez pas lister dans l’application Tapatalk.',
	'MOBIQUO_NAME' 					=> 'Répertoire du plugin Tapatalk',
	'MOBIQUO_NAME_EXPLAIN'			=> 'Ne changez jamais cela si vous n\'avez pas renommé le répertoire du plugin Tapatalk. Et la valeur par défaut est \'mobiquo\'. Si vous avez renommé le répertoire du plugin Tapatalk, vous devez également mettre à jour le même paramètre pour ce forum dans la zone du propriétaire du forum Tapatalk.(http://tapatalk.com/landing.php)',
	'TAPATALK_PUSH_KEY' 			=> 'Clé API Tapatalk',
    'TAPATALK_PUSH_KEY_EXPLAIN' 	=> 'Auparavant connue sous le nom de Clé Push. Cette clé est maintenant nécessaire pour une connexion sécurisée entre votre communauté et le serveur Tapatalk. Des fonctionnalités telles que les notifications push et le Single Sign-On nécessitent cette clé pour fonctionner.',

	'ACP_TAPATALK_REBRANDING'          => 'Options Tapatalk BYO',
	'ACP_TAPATALK_REBRANDING_EXPLAIN'  => 'Tapatalk - Construisez le vôtre - Options',
	'TAPATALK_FORUM_READ_ONLY'         => 'Désactiver Nouveau Sujet',
	'TAPATALK_FORUM_READ_ONLY_EXPLAIN' => 'Empêcher les utilisateurs de Tapatalk de créer un nouveau sujet dans les sous-forums sélectionnés. Cette fonctionnalité est utile si certains forums nécessitent des champs de sujet supplémentaires ou des permissions que Tapatalk ne supporte pas.',

	'TAPATALK_ANDROID_URL'          => 'ID du produit Android',
	'TAPATALK_KINDLE_URL'           => 'URL du produit Kindle Fire',
	'TAPATALK_ANDROID_URL_EXPLAIN'          => 'Entrez votre ID d’application BYO de Google Play, à utiliser sur un appareil Android. Ex. : "com.quoord.tapatalkpro.activity".',
	'TAPATALK_KINDLE_URL_EXPLAIN'           => 'Entrez l’URL de votre application BYO de l’Amazon App Store, à utiliser sur un appareil Kindle Fire.',
	
	'TAPATALK_ALLOW_APP_ADS'               => 'Écran de bienvenue mobile',
	'TAPATALK_ALLOW_APP_ADS_EXPLAIN'       => 'Tapatalk affichera un écran de bienvenue unique aux utilisateurs mobiles pour télécharger l’application gratuite, avec un bouton pour obtenir l’application gratuite.',
	
	'TAPATALK_CUSTOM_REPLACE'               => 'Remplacement du contenu du fil de discussion (Avancé)',
	'TAPATALK_CUSTOM_REPLACE_EXPLAIN'       => 'Capacité à faire correspondre et remplacer le contenu d’un fil de discussion en utilisant la fonction PHP preg_replace (http://www.php.net/manual/fr/function.preg-replace.php). Ex. : "\'pattern\',\'replacement\'" . Vous pouvez définir plus d’une règle de remplacement par ligne.',
	
	
	'TAPATALK_APP_BANNER_MSG'               => 'Message de la bannière de l\'application BYO',
	'TAPATALK_APP_IOS_ID'                   => 'ID de l\'application BYO iOS',
	'TAPATALK_APP_BANNER_MSG_EXPLAIN'       => 'Ex. : "Suivez {your_forum_name} avec {app_name} pour [os_platform]". Ne changez pas la balise [os_platform] car elle est affichée dynamiquement en fonction de la plateforme de l\'appareil de l\'utilisateur.',
	'TAPATALK_APP_IOS_ID_EXPLAIN'           => 'Entrez votre ID de produit BYO dans l’Apple App Store, à utiliser sur un appareil iOS.',
	
	'ACP_MOBIQUO_REGISTER_SETTINGS'  => 'Tapatalk - Inscription In App',   
	'ACP_MOBIQUO_REGISTER_SETTINGS_EXPLAIN'  => 'Paramètres d’inscription In App Tapatalk',  
	'TAPATALK_REGISTER_GROUP' => 'Affectation de groupe d\'utilisateurs', 
	'TAPATALK_REGISTER_GROUP_EXPLAIN' => 'Vous pouvez assigner les utilisateurs inscrits via Tapatalk à des groupes d’utilisateurs spécifiques. Si vous ne les assignez pas à un groupe spécifique, ils seront assignés à un groupe par défaut.', 
	'TAPATALK_REGISTER_STATUS' => 'Options d\'inscription',
	'TAPATALK_REGISTER_STATUS_EXPLAIN' => 'Inscription native et connexion sociale (Recommandé) - Les utilisateurs de Facebook peuvent s’inscrire sur votre forum en utilisant leurs identifiants Facebook, et ceux qui ne sont pas connectés à Facebook peuvent s’inscrire via un formulaire in-app.<br/>
Inscription native uniquement - Pas de SSO disponible pour les utilisateurs de Facebook. Tous les utilisateurs doivent s’inscrire via un formulaire in-app.<br/>
Redirection vers l’URL d’inscription externe - Tous les utilisateurs s’inscrivant sur votre forum seront redirigés vers un navigateur web en dehors de l’application pour continuer l’inscription. ',
	

	'TAPATALK_REGISTER_STATUS_SSO' => 'Inscription native et connexion sociale (Recommandé)',
	'TAPATALK_REGISTER_STATUS_NATIVE' => 'Inscription native uniquement',
	'TAPATALK_REGISTER_STATUS_URL' => 'Redirection vers l\'URL d\'inscription externe',

    'ACP_TAPATALK_DEEPLINK' => 'Lien profond de l’application mobile (Application de marque BYO et Tapatalk)',
    'ACP_TAPATALK_DEEPLINK_EXPLAIN' => '',
    'TAPATALK_ALLOW_APP_BANNER' => 'Bannière d’application intelligente',
	'TAPATALK_ALLOW_APP_BANNER_EXPLAIN' => '',
    'TAPATALK_GOOGLE_INDEXING' => 'Indexation d’application Google',
	'TAPATALK_GOOGLE_INDEXING_EXPLAIN' => 'Lien profond du fil de discussion à partir du résultat de recherche Google.',
    'TAPATALK_FACEBOOK_INDEXING' => 'Facebook',
	'TAPATALK_FACEBOOK_INDEXING_EXPLAIN' => 'Lien profond du fil de discussion à partir d’un lien dans l’application Facebook.',
    'TAPATALK_TWITTER_INDEXING' => 'Twitter',
	'TAPATALK_TWITTER_INDEXING_EXPLAIN' => 'Lien profond du fil de discussion à partir d’un lien dans l’application Twitter.',


	'TAPATALK_SPAM_STATUS' => 'Prévention du spam',
	'TAPATALK_SPAM_STATUS_EXPLAIN' => 'En activant l’intégration StopForumSpam, l’inscription de nouveaux utilisateurs via l’application Tapatalk et/ou depuis le web sera filtrée avec la base de données StopForumSpam pour prévenir les spammeurs déjà listés.',
	'TAPATALK_SPAM_STATUS_0' => 'Désactiver',
	'TAPATALK_SPAM_STATUS_1' => 'Activer StopForumSpam dans l’inscription in-app Tapatalk',
	'TAPATALK_SPAM_STATUS_2' => 'Activer StopForumSpam dans l’inscription web',
	'TAPATALK_SPAM_STATUS_3' => 'Activer les deux',
	'LOG_CONFIG_REBRANDING' => 'Mettre à jour les paramètres de rebranding Tapatalk',
	'LOG_CONFIG_REGISTER' => 'Mettre à jour les paramètres d’inscription Tapatalk',
	'TAPATALK_AD_FILTER' => 'Désactiver les publicités pour le groupe',
	'TAPATALK_AD_FILTER_EXPLAIN' =>  'Cette option empêchera Tapatalk d’afficher des publicités. Les utilisateurs dans les groupes sélectionnés ne verront pas de publicités lorsqu’ils utilisent l’application Tapatalk.',
	'TAPATALK_AUTO_APPROVE' => 'Approuver automatiquement les membres vérifiés de Tapatalk',
	'TAPATALK_AUTO_APPROVE_EXPLAIN' => 'Cette option approuve automatiquement les membres vérifiés de Tapatalk sans nécessité de modération ou d’autres étapes supplémentaires.',
    'TAPATALK_ALLOW_TWITTERFACEBOOK' => 'Lien profond Facebook et Twitter',
    'TAPATALK_ALLOW_TWITTERFACEBOOK_EXPLAIN' => 'Permet à vos membres d\'ouvrir le même fil de discussion dans Tapatalk à partir de votre publication Facebook / tweet Twitter',
    'TAPATALK_SSO' => 'Inscription In-App',
    'TAPATALK_SSO_EXPLAIN' => 'Les utilisateurs de Tapatalk vérifiés connectés depuis Facebook, Google ou une adresse email vérifiée peuvent s’inscrire nativement sur votre forum via l’application. La COPPA et les champs personnalisés supplémentaires sont également pris en charge, bien que nous recommandions fortement de minimiser les champs personnalisés pour simplifier l’inscription sur mobile.'
	)
);
