<?php
/**
*
* phpBB Gallery. An extension for the phpBB Forum Software package.
* French translation by pokyto aka le.poke http://www.lestontonsfraggers.com (inspired by darky http://www.foruminfopc.fr/ and http://www.phpbb-fr.com/) & Galixte (http://www.galixte.com)
*
* @copyright (c) 2012 nickvergessen <http://www.flying-bits.org/> - 2018 Stanislav Atanasov <http://www.anavaro.com>
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_GALLERY_OVERVIEW'			=> 'Galerie phpBB',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'Voici quelques statistiques sur votre galerie.',

    // File dirs states
    'ACP_FILES_DIR_STATE'           => 'État du répertoire : <strong>./files/</strong>',
    'ACP_CORE_DIR_STATE'    		=> 'État du répertoire : <strong>./files/phpbbgallery/core/</strong>',
    'ACP_SOURCE_DIR_STATE'    		=> 'État du répertoire : <strong>./files/phpbbgallery/core/source/</strong>',
    'ACP_MEDIUM_DIR_STATE'    		=> 'État du répertoire : <strong>./files/phpbbgallery/core/meduim/</strong>',
    'ACP_MINI_DIR_STATE'    		=> 'État du répertoire : <strong>./files/phpbbgallery/core/mini/</strong>',

	'ADD_ALBUM_ON_TOP'				=> 'Ajouter l’album en haut',
	'ADD_PERMISSIONS'				=> 'Ajouter des permissions',
	'ALBUM_ADMIN'					=> 'Administration des albums',
	'ALBUM_ADMIN_EXPLAIN'			=> 'Dans la Galerie phpBB, il n’y a pas de catégories, tout est basé sur un système d’albums. Chaque album peut contenir un nombre illimité de sous-albums et vous pouvez déterminer pour chacun d’entre eux, s’ils doivent être affichés ou non. Vous pouvez individuellement ajouter, modifier, supprimer, verrouiller, déverrouiller des albums, mais aussi définir d’autres options. Si vos images ne sont plus synchronisées, vous pouvez resynchroniser leur album. <strong>Vous devez copier ou définir les permissions nécessaires, afin d’afficher les albums nouvellement créés.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Permissions de l’album',
	'ALBUM_CREATED'					=> 'Album créé avec succès.',
	'ALBUM_DELETE'					=> 'Supprimer l’album',
	'ALBUM_DELETE_EXPLAIN'			=> 'Le formulaire ci-dessous, vous permet de supprimer l’album et de définir le nouvel emplacement des images qu’il contient.',
	'ALBUM_DELETED'					=> 'Cet album a été supprimé avec succès.',
	'ALBUM_DESC'					=> 'Description',
	'ALBUM_DESC_EXPLAIN'			=> 'Toutes balises HTML saisies seront affichées telles quelles.',
	'ALBUM_DESC_TOO_LONG'			=> 'La description de l’album est trop longue, elle doit être inférieure à 4000 caractères.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Le formulaire ci-dessous vous permet de personnaliser cet album. Notez que les permissions de modération sont définies dans les permissions d’album de chaque utilisateur ou groupe d’utilisateurs.',
	'ALBUM_ID'						=> 'ID de l’album',
	'ALBUM_IMAGE'					=> 'Image de l’album',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Emplacement relatif au répertoire racine de phpBB, de l’image à associer à cet album.',
	'ALBUM_NAME_EMPTY'				=> 'Vous devez saisir un titre d’album.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Un album simple ne peut pas être transformé en album-concours.',
	'ALBUM_PARENT'					=> 'Album parent',
	'ALBUM_PARENT_INVALID'			=> 'L’album parent que vous avez sélectionné est invalide. Il s’agit, soit d’un album enfant de celui que vous modifiez, soit il n’existe pas.',
	'ALBUM_PASSWORD'				=> 'Mot de passe de l’album',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Indiquez un mot de passe pour cet album. Utilisez de préférence le système de permissions.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Confirmation du mot de passe de l’album',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Uniquement si un mot de passe a été saisi.',
	'ALBUM_RESYNCED'				=> 'L’album « %s » a été resynchronisé avec succès.',
	'ALBUM_SETTINGS'				=> 'Paramètres des albums',
	'ALBUM_STATUS'					=> 'Statut de l’album',
	'ALBUM_TYPE'					=> 'Type d’album',
	'ALBUM_TYPE_CAT'				=> 'Catégorie',
	'ALBUM_TYPE_CONTEST'			=> 'Concours',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'L’album a été mis à jour avec succès.',
	'ALBUM_WATERMARK'				=> 'Afficher le filigrane',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Si cette option est définie sur <samp>Non</samp>, le filigrane ne sera jamais affiché, indépendamment des permissions !',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Un album-concours ne peut pas être transformé en un album simple.',
	'ALBUMS'						=> 'Albums',

	'CACHE_DIR_SIZE'				=> 'Taille du répertoire « cache/ »',
	'CHANGE_AUTHOR_TO_GUEST'		=> 'Modifier l’auteur en invité',
	'CHECK'							=> 'Vérifier',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Aucune image sans auteur valide trouvée.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Aucun commentaire sans auteur valide trouvé.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Vous devez exécuter la vérification, pour rechercher des fichiers qui n’ont pas été insérés dans la base de données.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Aucun album personnel sans propriétaire valide trouvé.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Aucun album personnel trouvé.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Aucune entrée trouvée. Vous devez exécuter la vérification, pour en être sûr.',
	'COLS_PER_PAGE'					=> 'Number of columns on thumbnail page',
	'COMMENT'						=> 'Commentaire',
	'COMMENT_ID'					=> 'ID du commentaire',
	'COMMENT_MAX_LENGTH'			=> 'Longueur maximale des commentaires',
	'COMMENT_SYSTEM'				=> 'Activer le système de commentaires',
	'COMMENT_USER_CONTROL'			=> 'Les utilisateurs peuvent contrôler les commentaires',
	'COMMENT_USER_CONTROL_EXP'		=> 'Autoriser les utilisateurs à choisir, si les autres utilisateurs peuvent commenter leurs images.',
	'CONTEST_DATE_EXPLAIN'			=> 'Merci de saisir une date dans ce format AAAA-MM-JJ HH:MM.',
	'CONTEST_END'					=> 'Fin du concours',
	'CONTEST_END_BEFORE_RATING'		=> 'Le concours ne doit pas se terminer avant que les votes ne soient démarrés.',
	'CONTEST_END_BEFORE_START'		=> 'Le concours ne doit pas se terminer avant qu’il ne soit démarré.',
	'CONTEST_END_EXPLAIN'			=> 'Après la fin du concours, les utilisateurs ne peuvent plus noter les images.',
	'CONTEST_END_INVALID'			=> 'Fin de concours invalide (%s). Merci de saisir une date dans ce format AAAA-MM-JJ HH:MM.',
	'CONTEST_RATING'				=> 'Début des votes',
	'CONTEST_RATING_BEFORE_START'	=> 'Les votes ne doivent pas débuter avant le concours.',
	'CONTEST_RATING_EXPLAIN'		=> 'Après le « Début des votes », les utilisateurs ne peuvent plus charger d’images.',
	'CONTEST_RATING_INVALID'		=> 'Début des votes invalide (%s). Merci de saisir une date dans ce format AAAA-MM-JJ HH:MM.',
	'CONTEST_SETTINGS'				=> 'Paramètres du concours',
	'CONTEST_START'					=> 'Début du concours',
	'CONTEST_START_EXPLAIN'			=> 'Au début du concours, les utilisateurs sont autorisés à charger des images.',
	'CONTEST_START_INVALID'			=> 'Début du concours invalide (%s). Merci de saisir une date dans ce format AAAA-MM-JJ HH:MM.',
	'COPY_PERMISSIONS'				=> 'Copier les permissions depuis',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Une fois créé, l’album aura les mêmes permissions que celles sélectionnées ici. Si aucun album n’est choisi, le nouvel album ne sera pas visible tant que ses permissions n’auront pas été définies.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'L’album source dont vous voulez copier les permissions.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Les albums où les permissions seront appliquées.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Merci de bien noter que cette action va écraser toutes les permissions existantes des albums sélectionnés.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Si vous choisissez de copier les permissions, l’album aura les mêmes permissions que celles sélectionnées ici. Elles remplaceront toutes les permissions précédemment définies pour cet album, par les permissions de l’album sélectionné. Si aucun album n’est choisi les permissions actuelles seront conservées.',
	'COPY_PERMISSIONS_FROM'			=> 'Copier les permissions depuis',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Les permissions des albums sélectionnés ont été copiées avec succès.',
	'COPY_PERMISSIONS_TO'			=> 'Appliquer les permissions sur',
	'CREATE'						=> 'Créer',
	'CREATE_ALBUM'					=> 'Créer un nouvel album',
	'CREATE_USERS_PEGA'				=> 'Créer une galerie personnelle pour l’utilisateur',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Supprimer le contenu ou déplacer vers l’album',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Supprimer les sous-albums ou déplacer vers l’album',
	'DEFAULT_SORT_EXPLAIN'			=> 'Si vous sélectionnez <samp>Par défaut</samp>, le tri par défaut est pris en compte.',
	'DEFAULT_SORT_METHOD'			=> 'Tri par défaut',
	'DEFAULT_SORT_ORDER'			=> 'Ordre de tri par défaut',
	'DELETE_ALBUM_SUBS'				=> 'Merci de supprimer en premier les sous-albums.',
	'DELETE_ALL_IMAGES'				=> 'Supprimer les images',
	'DELETE_IMAGES'					=> 'Supprimer les images',
	'DELETE_PERMISSIONS'			=> 'Supprimer les permissions',
	'DELETE_SUBALBUMS'				=> 'Supprimer les sous-albums et leurs images',
	'DISP_BIRTHDAYS'				=> 'Afficher les anniversaires',
	'DISP_FAKE_THUMB'				=> 'Afficher les miniatures dans la liste des albums',
	'DISP_LOGIN'					=> 'Afficher les champs de connexion',
	'DISP_LOGIN_EXP'				=> 'invités uniquement',
	'DISP_NEXTPREV_THUMB'			=> 'Afficher la miniature de l’image suivante/précédente',
	'DISP_NEXTPREV_THUMB_EXPLAIN'	=> 'Si sur « Non », il n’y aura que le nom de l’image affiché comme lien.',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Afficher le lien vers l’album personnel dans le profil de l’utilisateur',
	'DISP_STATISTIC'				=> 'Afficher les statistiques de la galerie',
	'DISP_GALLERY_ICON'				=> 'Afficher le lien vers la galerie',
	'DISP_GALLERY_ICON_EXP'			=> 'Permet d’afficher un lien vers la galerie dans la barre de navigation du forum.',
	'DISP_TOTAL_IMAGES'				=> 'Afficher le « Total d’images » dans index.php',
	'DISP_USER_IMAGES_PROFILE'		=> 'Afficher les statistiques avec les images chargées dans le profil de l’utilisateur',
	'DISP_VIEWTOPIC_ICON'			=> 'Afficher l’icône des albums personnels dans viewtopic.php',
	'DISP_VIEWTOPIC_IMAGES'			=> 'Afficher le compteur d’images dans viewtopic.php',
	'DISP_VIEWTOPIC_LINK'			=> 'Lien dans le compteur d’images de l’utilisateur',
	'DISP_WHOISONLINE'				=> 'Afficher « Qui est en ligne ? »',
	'DISPLAY_IN_RRC'				=> 'Afficher les images de cet album dans les « Dernières Images/Images aléatoires »',
	'DONT_COPY_PERMISSIONS'			=> 'Ne pas copier les permissions',

	'EDIT_ALBUM'					=> 'Modifier l’album',

	'FAKE_THUMB_SIZE'				=> 'Taille de la miniature',
	'FAKE_THUMB_SIZE_EXP'			=> 'Si vous souhaitez conserver la taille originale, n’oubliez pas les 16 pixels de la ligne noire d’informations.',

	'GALLERY_ALBUMS_TITLE'			=> 'Contrôle des Albums de la Galerie',
	'GALLERY_CONFIG'				=> 'Configuration de la Galerie',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Vous pouvez modifier ici les paramètres généraux de la Galerie phpBB.',
	'GALLERY_CONFIG_UPDATED'		=> 'La configuration de la Galerie a été mise à jour avec succès.',
	'GALLERY_INDEX'					=> 'Index-Galerie',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Si vous utilisez la fonction de Cache des Miniatures, vous devez vider le cache des miniatures après avoir modifié les paramètres des miniatures dans la « Configuration de la Galerie ».',
	'GALLERY_RESYNC_ALBUMS_TO_CPF'	=> 'Resynchroniser les albums personnels en champs de profils personnalisés',
	'GALLERY_RESYNC_ALBUMS_TO_CPF_EXPAIN'	=> 'Permet de resynchroniser tous les albums personnels principaux en tant que contacts basés sur les champs de profils personnalisés.<br>Information : Si un trop grand nombre d’albums personnels principaux sont présents cette opération peut mettre un certain temps avant d’aboutir !',
	'GALLERY_RESYNC_ALBUMS_TO_CPF_CONFIRM'	=> 'Confirmer la resynchronisation de tous les albums personnels principaux comme contacts basés sur les champs de profils personnalisés ?',
	'GALLERY_STATS'					=> 'Statistiques de la Galerie',
	'GALLERY_VERSION'				=> 'Version de la Galerie phpBB',
	'GD_VERSION'					=> 'Optimiser pour la version GD',
	'GENERAL_ALBUM_SETTINGS'		=> 'Paramètres généraux de l’album',
	'GIF_ALLOWED'					=> 'Autoriser à envoyer des fichiers GIF',
	'GUPLOAD_DIR_SIZE'				=> 'Taille du répertoire « upload/ »',

	'HACKING_ATTEMPT'				=> 'Tentative de piratage !',
	'HANDLE_IMAGES'					=> 'Que faire avec les images ?',
	'HANDLE_SUBS'					=> 'Que faire avec les sous-albums ?',
	'HOTLINK_ALLOWED'				=> 'Liste blanche des liens',
	'HOTLINK_ALLOWED_EXP'			=> 'Les liens vers des images provenants de ces domaines sont toujours autorisés. Les domaines doivent être séparés par des virgules (sans espaces). Exemple : « lestontonsfraggers.com,phpbb.com »',
	'HOTLINK_PREVENT'				=> 'Autoriser les liens vers des images de tous les sites',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Longueur maximale de la description',
	'IMAGE_ID'						=> 'ID de l’image',
	'IMAGE_SETTINGS'				=> 'Paramètres des images',
	'IMAGES_PER_DAY'				=> 'Images par jour',
	'INDEX_SETTINGS'				=> 'Paramètres de gallery/index.php',
	'INFO_LINE'						=> 'Afficher la taille du fichier sur la miniature',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Hériter des permissions d’un autre album',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Hériter des permissions d’un autre paramètre',

	'JPG_ALLOWED'					=> 'Autoriser à envoyer des fichiers JPG',
	'JPG_QUALITY'					=> 'Qualité des JPG',
	'JPG_QUALITY_EXP'				=> 'Lorsque vous redimensionnez ou que vous faites pivoter une image, la taille du fichier peut augmenter. Avec cette option, vous pouvez réduire la qualité d’une image et donc économiser de l’espace disque.',

	'LIST_INDEX'					=> 'Lister le sous-album dans la légende de l’album parent',
	'LIST_INDEX_EXPLAIN'			=> 'Affiche cet album sur l’index et dans la légende de son album parent, si l’option « Lister les sous-albums dans la légende » est activée.',
	'LIST_SUBALBUMS'				=> 'Lister les sous-albums dans la légende',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Affiche les sous-albums de cet album sur l’index et dans la légende de son album parent, si l’option « Lister le sous-album dans la légende de l’album parent » est activée.',
	'LOCKED'						=> 'Verrouillé',
	'LOOK_UP_ALBUM'					=> 'Sélectionner un album',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Vous êtes en mesure de sélectionner plusieurs albums.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Gérer les entrées problématiques',
	'MANAGE_CRASHED_IMAGES'			=> 'Gérer les images problématiques',
	'MANAGE_PERSONALS'				=> 'Gérer les albums personnels',
	'MAX_IMAGES_PER_ALBUM'			=> 'Nombre maximum d’images pour chaque album',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Illimité est -1',
	'MEDIUM_CACHE'					=> 'Cache des images redimensionnées pour la page des images',
	'MEDIUM_DIR_SIZE'				=> 'Taille du répertoire « medium/ »',
	'MISSING_ALBUM_NAME'			=> 'Vous devez saisir un titre d’album.',
	'MISSING_AUTHOR'				=> 'Images sans auteur valide',
	'MISSING_AUTHOR_C'				=> 'Commentaires sans auteur valide',
	'MISSING_ENTRY'					=> 'Fichiers sans entrées dans la base de données',
	'MISSING_OWNER'					=> 'Albums personnels sans propriétaire valide',
	'MISSING_OWNER_EXP'				=> 'Les sous-albums, images et commentaires seront aussi supprimés.',
	'MISSING_SOURCE'				=> 'Images sans fichiers',
	'MOVE_IMAGES_TO'				=> 'Déplacer les images vers',
	'MOVE_SUBALBUMS_TO'				=> 'Déplacer les sous-albums vers',

	'NEW_ALBUM_CREATED'				=> 'Le nouvel album a été créé avec succès.',
	'NO_ALBUM_SELECTED'				=> 'Vous devez sélectionner au moins un album.',
	'NO_DESTINATION_ALBUM'			=> 'Vous n’avez pas spécifié d’album pour déplacer le contenu.',
	'NO_PERMISSIONS_SELECTED'		=> 'Vous devez sélectionner au moins un album ou un système de permissions spécifique.',
	'NO_VICTIM_SELECTED'			=> 'Vous devez sélectionner au moins un utilisateur ou un groupe d’utilisateurs.',
	'NO_INHERIT'					=> 'Ne pas copier les permissions',
	'NO_PARENT_ALBUM'				=> 'Aucun parent',
	'NO_SUBALBUMS'					=> 'Aucun album attaché',
	'NUMBER_ALBUMS'					=> 'Nombre d’albums',
	'NUMBER_IMAGES'					=> 'Nombre d’images',
	'NUMBER_PERSONALS'				=> 'Nombre d’albums personnels',

	'OWN_PERSONAL_ALBUMS'			=> 'Propriétaires des albums personnels',
	'OWN_PERSONAL_ALBUMS_EXPLAIN'	=> 'Ces permissions sont utilisées, lorsque l’utilisateur A consulte l’un de ses propres albums personnels. <strong>Si vos utilisateurs ne peuvent pas créer un album personnel, vous devrez modifier ces permissions.</strong>',
	'PERSONAL_ALBUMS_EXPLAIN'		=> 'Ces permissions sont utilisées, lorsque l’utilisateur A se rend dans l’album personnel de l’utilisateur B. <strong>Si vos modérateurs ne peuvent pas modérer les images dans les albums personnels, vous devrez modifier ces permissions.</strong>',

	'PERMISSION'					=> 'Permissions',
	'PERMISSION_NEVER'				=> 'Jamais',
	'PERMISSION_NO'					=> 'Non',
	'PERMISSION_SETTING'			=> 'Paramètres',
	'PERMISSION_YES'				=> 'Oui',
	'PERMISSION_A_COUNT'			=> 'Nombre de sous-albums personnels possibles',
	'PERMISSION_A_LIST'				=> 'Peut voir l’album',
	'PERMISSION_A_RESTRICT'			=> 'Peut restreindre l’accès',
	'PERMISSION_A_UNLIMITED'		=> 'Nombre illimité de sous-albums personnels',
	'PERMISSION_C'					=> 'Commentaires',
	'PERMISSION_C_DELETE'			=> 'Peut supprimer ses commentaires',
	'PERMISSION_C_EDIT'				=> 'Peut modifier ses commentaires',
	'PERMISSION_C_POST'				=> 'Peut commenter les images',
	'PERMISSION_C_READ'				=> 'Peut lire les commentaires',
	'PERMISSION_I'					=> 'Images',
	'PERMISSION_I_APPROVE'			=> 'Peut envoyer une image sans approbation',
	'PERMISSION_I_COUNT'			=> 'Nombre d’images chargeables',
	'PERMISSION_I_DELETE'			=> 'Peut supprimer ses images',
	'PERMISSION_I_EDIT'				=> 'Peut modifier ses images',
	'PERMISSION_I_LOCK'				=> 'Peut verrouiller des images',
	'PERMISSION_I_RATE'				=> 'Peut noter des images',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Les invités et les auteurs des images ne peuvent <samp>JAMAIS</samp> noter les/leurs images.',
	'PERMISSION_I_REPORT'			=> 'Peut rapporter des images',
	'PERMISSION_I_UNLIMITED'		=> 'Peut envoyer sans limite des images',
	'PERMISSION_I_UPLOAD'			=> 'Peut envoyer des images',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Cette permission est également utilisée, pour déterminer si l’utilisateur peut déplacer les images d’un album, lorsqu’il a des permissions de modérateur dans d’autres forums.',
	'PERMISSION_I_VIEW'				=> 'Peut voir les images',
	'PERMISSION_I_WATERMARK'		=> 'Peut voir les images sans filigrane',
	'PERMISSION_M'					=> 'Modération',
	'PERMISSION_MISC'				=> 'Autres', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Peut modérer les commentaires',
	'PERMISSION_M_DELETE'			=> 'Peut supprimer les images',
	'PERMISSION_M_EDIT'				=> 'Peut modifier les images',
	'PERMISSION_M_MOVE'				=> 'Peut déplacer les images',
	'PERMISSION_M_REPORT'			=> 'Peut gérer les rapports',
	'PERMISSION_M_STATUS'			=> 'Peut valider et verrouiller les images',
	'PERMISSION_EMPTY'				=> 'Vous n’avez pas défini toutes les permissions.',
	'PERMISSIONS'					=> 'Permissions',
	'PERMISSIONS_COPY'				=> 'Copier les permissions d’un album',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Vous pouvez copier ici les permissions d’un album pour un ou plusieurs autres albums.',
	'PERMISSIONS_EXPLAIN'			=> 'Vous pouvez modifier ici l’accès des albums aux utilisateurs et/ou groupes d’utilisateurs.',
	'PERMISSIONS_STORED'			=> 'Les permissions ont été enregistrées avec succès.',
	'PERSONAL_ALBUM_INDEX'			=> 'Afficher les albums personnels sur l’index comme un album',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Si vous mettez « Non », il y aura le lien juste en-dessous.',
	'PEGA_CREATED'					=> 'Création de la galerie personnelle pour %s.',
	'PEGA_ALREADY_EXISTS'			=> '%s dispose déjà d’une galerie personnelle.',
	'PGALLERIES_PER_PAGE'			=> 'Nombre de galeries personnelles par page',
	'ITEMS_PER_PAGE'				=> 'Objets par page',
	'ITEMS_PER_PAGE_EXP'			=> 'Combien d’images/albums par page',
	'RANDOM_ON_INDEX'				=> 'Afficher les images aléatoires sur l’accueil ?',
	'RANDOM_ON_INDEX_EXP'			=> 'Afficher des images aléatoires sur la page d’index de la galerie ?',
	'RANDOM_ON_INDEX_COUNT'			=> 'Nombre d’images aléatoires',
	'RECENT_ON_INDEX'				=> 'Afficher les images récentes ?',
	'RECENT_ON_INDEX_EXP'			=> 'Afficher les images récentes sont sur l’accueil ?',
	'RECENT_ON_INDEX_COUNT'			=> 'Nombre d’images récentes',
	'PHPBB_INTEGRATION'				=> 'Intégration à phpBB',
	'PNG_ALLOWED'					=> 'Autoriser à charger des fichiers PNG',
	'PURGED_CACHE'					=> 'Vider le cache',

	'RATE_SCALE'					=> 'Notes sur',
	'RATE_SYSTEM'					=> 'Activer le système de notation',
	'REDIRECT_ACL'					=> 'Maintenant, vous pouvez %sdéfinir les permissions%s de cet album.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Vous devez supprimer les images de l’album, avant de le convertir en catégorie.',
	'RESET_RATING'					=> 'Réinitialiser les notes d’un album',
	'RESET_RATING_COMPLETED'		=> 'Les notes ont été supprimées avec succès.',
	'RESET_RATING_CONFIRM'			=> 'Voulez-vous vraiment supprimer toutes les notes des images de cet album « %s » ?',
	'RESET_RATING_EXPLAIN'			=> 'Cette option supprime toutes les notes des images de l’album spécifié.',
	'RESIZE_IMAGES'					=> 'Redimensionner les grandes images',
	'RESYNC_IMAGECOUNTS'			=> 'Resynchroniser les compteurs d’images',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Êtes-vous sûr de vouloir resynchroniser les compteurs d’images ?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Seules les images existantes seront prises en considération.',
	'RESYNC_LAST_IMAGES'			=> 'Rafraîchir la « Dernière Image »',
	'RESYNC_PERSONALS'				=> 'Resynchroniser les albums personnels',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Êtes-vous sûr de vouloir resynchroniser les albums personnels ?',
	'RESYNCED_IMAGECOUNTS'			=> 'Compteurs d’images resynchronisés.',
	'RESYNCED_LAST_IMAGES'			=> '« Dernière Image » rafraîchie.',
	'RESYNCED_PERSONALS'			=> 'Albums personnels resynchronisés.',
	'ROTATE_IMAGES'					=> 'Autoriser la rotation des images',
	'ROTATE_IMAGES_EXP'				=> 'Cette fonctionnalité ne peut pas être utilisée pour le moment, car la fonction « imagerotate » n’est pas incluse dans votre version GD.',
	'ROWS_PER_PAGE'					=> 'Nombre de lignes sur la page des miniatures',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Titre de l’album',
	'RRC_DISPLAY_COMMENTS'			=> 'Commentaires',
	'RRC_DISPLAY_IMAGENAME'			=> 'Titre de l’image',
	'RRC_DISPLAY_IMAGETIME'			=> 'Date du chargement',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Images vues',
	'RRC_DISPLAY_IP'				=> 'IP de l’utilisateur',
	'RRC_DISPLAY_NONE'				=> 'Aucun',
	'RRC_DISPLAY_OPTIONS'			=> 'Quelles valeurs doivent être affichées sous les miniatures ?',
	'RRC_DISPLAY_USERNAME'			=> 'Nom d’utilisateur',
	'RRC_DISPLAY_RATINGS'			=> 'Notes',
	'RRC_GINDEX'					=> 'Fonctions Dernières Images/Commentaires & Images aléatoires',
	'RRC_GINDEX_COLUMNS'			=> 'Colonnes',
	'RRC_GINDEX_COMMENTS'			=> 'Réduire les commentaires',
	'RRC_GINDEX_CONTESTS'			=> 'Nombre de concours',
	'RRC_GINDEX_CROWS'				=> 'Nombre de commentaires',
	'RRC_GINDEX_MODE'				=> 'Mode',
	'RRC_GINDEX_MODE_EXP'			=> 'Le système « Images aléatoires » peut mettre un certain temps à se charger, surtout sur les grandes base de données !',
	'RRC_GINDEX_PGALLERIES'			=> 'Afficher les images des albums personnels',
	'RRC_GINDEX_ROWS'				=> 'Lignes',
	'RRC_MODE_COMMENTS'				=> 'Commentaires',
	'RRC_MODE_NONE'					=> 'Aucun',
	'RRC_MODE_RANDOM'				=> 'Images aléatoires',
	'RRC_MODE_RECENT'				=> 'Dernières images',
	'RRC_PROFILE_COLUMNS'			=> 'Colonnes',
	'RRC_PROFILE_MODE'				=> 'Fonctions dans le profil « Dernières images/Images aléatoires »',
	'RRC_PROFILE_MODE_EXP'			=> 'Le système « Images aléatoires » peut mettre un certain temps à se charger, surtout sur les grandes base de données !',
	'RRC_PROFILE_ROWS'				=> 'Lignes',
	'RRC_PROFILE_ITEMS'				=> 'Objets dans le profil de l’utilisateur',

	'RSZ_HEIGHT'					=> 'Hauteur maximale sur la visualisation d’images',
	'RSZ_WIDTH'						=> 'Largeur maximale sur la visualisation d’images',

	'SEARCH_SETTINGS'				=> 'Paramètres de recherche',
	'SELECT_ALBUM'					=> 'Sélectionner un album',
	'SELECT_ALBUMS'					=> 'Sélectionner les albums',
	'SELECT_GROUPS'					=> 'Sélectionner des groupes d’utilisateurs',
	'SELECT_PERM_SYS'				=> 'Sélectionner un système de permissions',
	'SELECT_PERMISSIONS'			=> 'Sélectionner des permissions',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'Le(s) album(s) sélectionné(s) n’existe(nt) pas.',
	'SELECTED_ALBUMS'				=> 'Albums sélectionnés',
	'SELECTED_GROUPS'				=> 'Groupes d’utilisateurs sélectionnés',
	'SELECTED_PERM_SYS'				=> 'Système de permission sélectionné',
	'SET_PERMISSIONS'				=> '<br />Définir les <a href="%s">permissions</a> maintenant.',
	'SORRY_NO_STATISTIC'			=> 'Désolé, la valeur de cette statistique n’est pas encore disponible.',
	'SYNC_IN_PROGRESS'				=> 'Synchronisation de l’album',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> '%1$d/%2$d image(s) synchronisée(s) actuellement.',

	'THUMBNAIL_CACHE'				=> 'Cache des miniatures',
	'THUMBNAIL_HEIGHT'				=> 'Hauteur des miniatures',
	'THUMBNAIL_QUALITY'				=> 'Qualité des miniatures',
	'THUMBNAIL_QUALITY_EXP'			=> 'La valeur doit être comprise entre 1 et 100.',
	'THUMBNAIL_SETTINGS'			=> 'Paramètres des miniatures',
	'THUMBNAIL_WIDTH'				=> 'Largeurs des miniatures',

	'UC_IMAGE_NAME'					=> 'Nom de l’image',
	'UC_IMAGE_ICON'					=> 'Icône de la dernière image',
	'UC_IMAGEPAGE'					=> 'Image sur la page de l’image',
	'UC_IMAGEPAGE_EXP'				=> 'C’est la page avec les détails et commentaires de l’image.',
	'UC_LINK_CONFIG'				=> 'Configuration des liens',
	'UC_LINK_HIGHSLIDE'				=> 'Ouvrir avec le plugin Highslide',
	'UC_LINK_IMAGE'					=> 'Ouvrir l’image',
	'UC_LINK_IMAGE_PAGE'			=> 'Ouvrir la page de l’image (avec les détails et les commentaires)',
	'UC_LINK_LYTEBOX'				=> 'Ouvrir avec le plugin Lightbox',
	'UC_LINK_NEXT'					=> 'Image suivante',
	'UC_LINK_NEWTAB'				=> 'Ouvrir dans un nouvel onglet',
	'UC_LINK_NONE'					=> 'Aucun lien',
	'UC_LINK_SHADOWBOX'				=> 'Ouvrir avec le plugin Shadowbox',
	'UC_THUMBNAIL'					=> 'Miniature',
	'UC_THUMBNAIL_EXP'				=> 'Également utilisé pour le BBCode.',
	'UNLOCKED'						=> 'Déverrouillé',
	'UPDATE_BBCODE'					=> 'Mise à jour du BBCode',
	'UPLOAD_IMAGES'					=> 'Charger plusieurs images',

	'VIEW_IMAGE_URL'				=> 'Afficher le lien de l’image sur la page de l’image',

	'WATERMARK'						=> 'Filigrane',
	'WATERMARK_HEIGHT'				=> 'Hauteur minimale pour le filigrane',
	'WATERMARK_HEIGHT_EXP'			=> 'Afin d’éviter que les petites images soient recouvertes par le filigrane, vous pouvez saisir ici une hauteur minimale de l’image. Si l’image est plus petite que la valeur définie ici, le filigrane ne sera pas affiché.',
	'WATERMARK_IMAGES'				=> 'Activer le filigrane',
	'WATERMARK_OPTIONS'				=> 'Paramètres du filigrane',
	'WATERMARK_POSITION'			=> 'Position du filigrane',
	'WATERMARK_POSITION_BOTTOM'		=> 'En bas',
	'WATERMARK_POSITION_CENTER'		=> 'Au centre',
	'WATERMARK_POSITION_LEFT'		=> 'À gauche',
	'WATERMARK_POSITION_MIDDLE'		=> 'Au milieu',
	'WATERMARK_POSITION_RIGHT'		=> 'À droite',
	'WATERMARK_POSITION_TOP'		=> 'En haut',
	'WATERMARK_SOURCE'		 		=> 'Fichier source du filigrane',
	'WATERMARK_SOURCE_EXP'		 	=> 'Relatif à votre racine phpBB',
	'WATERMARK_WIDTH'				=> 'Largeur minimale pour le filigrane',
	'WATERMARK_WIDTH_EXP'			=> 'Afin d’éviter que les petites images soient recouvertes par le filigrane, vous pouvez saisir ici une largeur minimale de l’image. Si l’image est plus petite que la valeur définie ici, le filigrane ne sera pas affiché.',

	'ZIP_ALLOWED'					=> 'Autoriser le chargement des archives ZIP',

	'NO_WRITE_ACCESS'				=> 'Pas d’accès en écriture',
	'WRITE_ACCESS'					=> 'OK',
	'DIR_CREATED'					=> 'Répertoire créé',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Annonce de la dernière version',
	'CURRENT_VERSION'		=> 'Version actuellement installée',
	'DOWNLOAD_LATEST'		=> 'Télécharger la dernière version',
	'LATEST_VERSION'		=> 'Dernière version publiée',
	'NO_INFO'				=> 'Le serveur de vérification de la version n’a pu être contacté.',
	'NOT_UP_TO_DATE'		=> '%s n’est pas à jour.',
	'RELEASE_ANNOUNCEMENT'	=> 'Annonce',
	'UP_TO_DATE'			=> '%s est à jour.',
	'VERSION_CHECK'			=> 'Vérification de la version de l’extension',
));
