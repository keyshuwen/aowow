<?php

if (!defined('AOWOW_REVISION'))
    die('illegal access');

/*
    some translations have yet to be taken from or improved by the use of:
    <path>\World of Warcraft\Data\frFR\patch-frFR-3.MPQ\Interface\FrameXML\GlobalStrings.lua
    like: ITEM_MOD_*, POWER_TYPE_*, ITEM_BIND_*, PVP_RANK_*
*/

$lang = array(
    // page variables
    'timeUnits' => array(
        'sg'            => ["année",  "mois", "semaine",  "jour",  "heure",  "minute",  "seconde",  "milliseconde"],
        'pl'            => ["années", "mois", "semaines", "jours", "heures", "minutes", "secondes", "millisecondes"],
        'ab'            => ["an",     "mo",   "sem",      "jour",  "h",      "min",     "s",        "ms"]
    ),
    'main' => array(
        'name'          => "nom",
        'link'          => "Lien",
        'signIn'        => "Se connecter / S'inscrire",
        'jsError'       => "S'il vous plait, assurez vous d'avoir le javascript autorisé.",
        'language'      => "Langue",
        'feedback'      => "Feedback",
        'numSQL'        => "Nombre de requêtes SQL",
        'timeSQL'       => "Temps d'exécution des requêtes SQL",
        'noJScript'     => "<b>Ce site requiert JavaScript pour fonctionner.</b><br />Veuillez <a href=\"https://www.google.com/support/adsense/bin/answer.py?answer=12654\" target=\"_blank\">activer JavaScript</a> dans votre navigateur.",
        'userProfiles'  => "Vos personnages",      // translate.google :x
        'pageNotFound'  => "Ce %s n'existe pas.",
        'gender'        => "Genre",
        'sex'           => [null, "Homme", "Femme"],
        'players'       => "Joueurs",
        'quickFacts'    => "En bref",
        'screenshots'   => "Captures d'écran",
        'videos'        => "Vidéos",
        'side'          => "Coté",
        'related'       => "Informations connexes",
        'contribute'    => "Contribuer",
        // 'replyingTo'    => "En réponse au commentaire de",
        'submit'        => "Soumettre",
        'cancel'        => "Annuler",
        'rewards'       => "Récompenses",
        'gains'         => "Gains",
        'login'         => "[Login]",
        'forum'         => "Forum",
        'n_a'           => "n/d",
        'siteRep'       => "Réputation",
        'yourRepHistory'=> "Votre historique de réputation",
        'aboutUs'       => "À propos de Aowow",
        'and'           => " et ",
        'or'            => " ou ",
        'back'          => "Redro",
        'reputationTip' => "Points de réputation",
        'byUserTimeAgo' => 'Par <a href="'.HOST_URL.'/?user=%s">%1$s</a> il y a %s',
        'help'          => "Aide",

        // filter
        'extSearch'     => "Recherche avancée",
        'addFilter'     => "Ajouter un autre filtre",
        'match'         => "Critère",
        'allFilter'     => "Tous les filtres",
        'oneFilter'     => "Au moins un",
        'applyFilter'   => "Appliquer le filtre",
        'resetForm'     => "Rétablir",
        'refineSearch'  => "Astuce : Affinez votre recherche en utilisant une <a href=\"javascript:;\" id=\"fi_subcat\">sous-catégorie</a>.",
        'clear'         => "effacer",
        'exactMatch'    => "Concordance exacte",
        '_reqLevel'     => "Niveau requis",

        // infobox
        'unavailable'   => "Non disponible aux joueurs",
        'disabled'      => "Désactivé",
        'disabledHint'  => "Ne peux pas être atteint ou complété",
        'serverside'    => "Côté serveur",
        'serversideHint'=> "Ces informations ne sont pas contenues dans le client et ont été obtenues via sniff ou ont été devinées.",

        // red buttons
        'links'         => "Liens",
        'compare'       => "Comparer",
        'view3D'        => "Voir en 3D",
        'findUpgrades'  => "Trouver des améliorations...",

        // misc Tools
        'errPageTitle'  => "Page non trouvée",
        'nfPageTitle'   => "Erreur",
        'subscribe'     => "S'abonner",
        'mostComments'  => ["Hier", "Derniers %d jours"],
        'utilities'     => array(
            "Derniers ajouts",                      "Derniers articles",                    "Derniers commentaires",                "Dernières captures d'écran",           null,
            "Commentaire sans note",                11 => "Derniers vidéos",                12 => "Le plus de commentaires",        13 => "Captures d'écrans manquantes"
        ),

        // article & infobox
        'englishOnly'   => "Cette page n'est disponible qu'en <b>anglais</b> pour le moment.",

        // calculators
        'preset'        => "Prédéterminée",
        'addWeight'     => "Ajouter un autre facteur",
        'createWS'      => "Créer une échelle de valeurs",
        'jcGemsOnly'    => "Inclure les gemmes de <span%s>joaillier</span>",
        'cappedHint'    => 'Conseil: <a href="javascript:;" onclick="fi_presetDetails();">Enlever</a> un facteur pour les statistiques au maximum tel que le score de touche.',
        'groupBy'       => "Groupé par",
        'gb'            => array(
            ["Aucun", "none"],         ["Emplacement", "slot"],       ["Niveau", "level"],     ["Source", "source"]
        ),
        'compareTool'   => "Outil de comparaison d'objets",
        'talentCalc'    => "Calculateur de Talents",
        'petCalc'       => "Calculateur de familiers",
        'chooseClass'   => "Choisissez une classe",
        'chooseFamily'  => "Choisissez un familier",

        // search
        'search'        => "Recherche",
        'searchButton'  => "Rechercher",
        'foundResult'   => "Résultats de recherche pour",
        'noResult'      => "Aucun résultat pour malordawsne",
        'tryAgain'      => "Veuillez essayer d'autres mots ou vérifiez l'orthographe des termes de recherche.",
        'ignoredTerms'  => "Les mots suivants ont été ignorés dans votre recherches : %s",

        // formating
        'colon'         => ' : ',
        'dateFmtShort'  => "Y-m-d",
        'dateFmtLong'   => "Y-m-d à H:i",

        // error
        'intError'      => "[An internal error occured.]",
        'intError2'     => "[An internal error occured. (%s)]",
        'genericError'  => "Une erreur est survenue; Actualisez la page et essayez à nouveau. Si l'erreur persiste, envoyez un email à <a href='#contact'>feedback</a>", # LANG.genericerror
        'bannedRating'  => "Vous avez été banni du score des commentaires.", # LANG.tooltip_banned_rating
        'tooManyVotes'  => "Vous avez voté trop souvent aujourd'hui! Revenez demain.", # LANG.tooltip_too_many_votes
        'alreadyReport' => "Vous avez déjà rapporté ceci.", # LANG.ct_resp_error7
        'textTooShort'  => "[Your message is too short.]",
        'cannotComment' => "[You have been banned from writing comments.]",
        'textLength'    => "[Your comment has %d characters and must have at least %d and at most %d characters.]",

        'moreTitles'    => array(
            'reputation'    => "Réputation du site",
            'whats-new'     => "Quoi de neuf?",
            'searchbox'     => "Boîte de recherche",
            'tooltips'      => "Info-bulles",
            'faq'           => "[Frequently Asked Questions]",
            'aboutus'       => "[What is AoWoW?]",
            'searchplugins' => "Plug-ins de recherche",
            'privileges'    => "Privilèges",
            'top-users'     => "Meilleurs Utilisateurs",
            'help'          => array(
                'commenting-and-you' => "Le guide du commentaire",          'modelviewer'       => "Visionneuse 3D",            'screenshots-tips-tricks' => "Captures d'écran : Trucs et astuces",
                'stat-weighting'     => "Échelles de valeurs",              'talent-calculator' => "Calculateur de talents",    'item-comparison'         => "Comparaison d'objets",
                'profiler'           => "Profiler",                         'markup-guide'      => "Markup Guide"
            )
        )
    ),
    'profiler' => array(
        'realm'         => "Royaume",
        'region'        => "Région",
        'viewCharacter' => "Voir Personnage",
        '_cpHint'       => "Le <b>Profiler de Personnage</b> vous permets de modifier votre personnage, trouver des améliorations d'équipement, vérifier votre score d'équipement et plus!",
        '_cpHelp'       => "Pour débuter, suivez simplement les étapes ci-dessous. Si vous voulez plus d'information, lisez notre <a href=\"?help=profiler\">page d'aide</a> détaillée.",
        '_cpFooter'     => "Si vous voulez une recherche plus raffinée, essayez nos options de <a href=\"?profiles\">recherche avancée</a>. Vous pouvez aussi créer un <a href=\"?profile&amp;new\">nouveau profile personnalisé</a>.",
        'firstUseTitle' => "%s de %s",
        'complexFilter' => "[Complex filter selected! Search results are limited to cached Characters.]",
        'customProfile' => " ([Custom Profile])",
        'resync'        => "Resynchronisation",
        'guildRoster'   => "Liste des membres pour la guilde de  &lt;%s&gt",
        'arenaRoster'   => "[Arena Team Roster for &lt;%s&gt]",     // string probably lost
        'atCaptain'     => "Capitaine d'équipe",

        'profiler'      => "Profiler de Personnage",
        'arenaTeams'    => "Équipes d'Aréna",
        'guilds'        => "Guildes",

        'notFound'      => array(
            'guild'     => "[This Guild doesn't exist or is not yet in the database.]",
            'arenateam' => "[This Arena Team doesn't exist or is not yet in the database.]",
            'profile'   => "[This character doesn't exist or is not yet in the database.]"
        ),
        'dummyNPCs'     => array(
            100001 => "Bataille des canonnières",
            200001 => "Bêtes du Norfendre", 200002 => "Champions de faction", 200003 => "Les jumelles val'kyrs",
            300001 => "Les Quatre Cavaliers",
            400001 => "Mande-foudre Brundir"
        ),
    ),
    'screenshot' => array(
        'submission'    => "Envoi d'une capture d'écran",
        'selectAll'     => "Sélectionner tout",
        'cropHint'      => "Vous pouvez recadrer votre capture d'écran.",
        'displayOn'     => "[Displayed on:[br]%s - [%s=%d]]",
        'caption'       => "[Caption]",
        'charLimit'     => "Optionnel, jusqu'à 200 caractères",
        'thanks'        => array(
            'contrib' => "Merci beaucoup de votre contribution!",
            'goBack'  => '<a href="?%s=%d">ici</a> pour retourner à la page d\'où vous venez.',
            'note'    => "Note : Votre capture d'écran devra être approuvée avant d'apparaître sur le site. Cela peut prendre jusqu'à 72 heures."
        ),
        'error'         => array(
            'unkFormat'   => "Format d'image inconnu.",
            'tooSmall'    => "Votre capture est bien trop petite. (&lt; ".CFG_SCREENSHOT_MIN_SIZE."x".CFG_SCREENSHOT_MIN_SIZE.").",
            'selectSS'    => "Veuillez sélectionner la capture d'écran à envoyer.",
            'notAllowed'  => "Vous n'êtes pas autorisés à exporter des captures d'écran.",
        )
    ),
    'game' => array(
        'achievement'   => "haut fait",
        'achievements'  => "Hauts faits",
        'areatrigger'   => "areatrigger",
        'areatriggers'  => "Areatrigger",
        'class'         => "classe",
        'classes'       => "Classes",
        'currency'      => "monnaies",
        'currencies'    => "Monnaies",
        'difficulty'    => "Difficulté",
        'dispelType'    => "Type de dissipation",
        'duration'      => "Durée",
        'emote'         => "emote",
        'emotes'        => "Emotes",
        'enchantment'   => "enchantement",
        'enchantments'  => "Enchantements",
        'object'        => "entité",
        'objects'       => "Entités",
        'glyphType'     => "Type de glyphe",
        'race'          => "race",
        'races'         => "Races",
        'title'         => "titre",
        'titles'        => "Titres",
        'eventShort'    => "Évènement",
        'event'         => "Évènement mondial",
        'events'        => "Évènements mondiaux",
        'faction'       => "faction",
        'factions'      => "Factions",
        'cooldown'      => "%s de recharge",
        'icon'          => "icône",
        'icons'         => "Icônes",
        'item'          => "objet",
        'items'         => "Objets",
        'itemset'       => "ensemble d'objets",
        'itemsets'      => "Ensembles d'objets",
        'mechanic'      => "Mécanique",
        'mechAbbr'      => "Mécan.",
        'meetingStone'  => "Pierre de rencontre",
        'npc'           => "PNJ",
        'npcs'          => "PNJs",
        'pet'           => "Familier",
        'pets'          => "Familiers de chasseur",
        'profile'       => "",
        'profiles'      => "Profils",
        'quest'         => "quête",
        'quests'        => "Quêtes",
        'requires'      => "%s requis",
        'requires2'     => "Requiert",
        'reqLevel'      => "Niveau %s requis",
        'reqSkillLevel' => "Niveau de compétence requis",
        'level'         => "Niveau",
        'school'        => "École",
        'skill'         => "compétence",
        'skills'        => "Compétences",
        'sound'         => "son",
        'sounds'        => "Sons",
        'spell'         => "sort",
        'spells'        => "Sorts",
        'type'          => "Type",
        'valueDelim'    => " - ",
        'zone'          => "zone",
        'zones'         => "Zones",

        'pvp'           => "JcJ",
        'honorPoints'   => "Points d'honneur",
        'arenaPoints'   => "Points d'arène",
        'heroClass'     => "Classe de héros",
        'resource'      => "Ressource",
        'resources'     => "Ressources",
        'role'          => "Role",
        'roles'         => "Roles",
        'specs'         => "Specialisations",
        '_roles'        => ["Soigneur", "DPS mêlée", "DPS à distance", "Tank"],

        'phases'        => "Phases",
        'mode'          => "Mode",
        'modes'         => [-1 => "Tout", "Standard / Normal 10", "Héroïque / Normal 25", "10 héroïque", "25 héroïque"],
        'expansions'    => ["Classique", "The Burning Crusade", "Wrath of the Lich King"],
        'stats'         => ["Force", "Agilité", "Endurance", "Intelligence", "Esprit"],
        'sources'       => array(
            "Inconnu",                      "Fabriqué",                     "Butin",                        "JcJ",                          "Quête",                        "Vendeur",
            "Maître",                       "Découverte",                   "Échange d'un code",            "Talent",                       "Débutant",                     "Événement",
            "Haut fait",                    null,                           "Marché Noir",                  "Désenchanté",                  "Pêché",                        "Cueilli",
            "Moulu",                        "Miné",                         "Prospecté",                    "Subtilisé (pickpocket)",       "Ferraillé",                    "Dépecé",
            "Boutique en jeu"
        ),
        'languages'     => array(
             1 => "Orc",                     2 => "Darnassien",              3 => "Taurahe",                 6 => "Nain",                    7 => "Commun",                  8 => "Démoniaque",
             9 => "Titan",                  10 => "Thalassien",             11 => "Draconique",             12 => "Kalimag",                13 => "Gnome",                  14 => "Troll",
            33 => "Bas-parler",             35 => "Draeneï",                36 => "Zombie",                 37 => "Binaire gnome",          38 => "Binaire gobelin"
        ),
        'gl'            => [null, "Majeur", "Mineur"],
        'si'            => [1 => "Alliance", -1 => "Alliance seulement", 2 => "Horde", -2 => "Horde seulement", 3 => "Les deux"],
        'resistances'   => [null, 'Résistance au Sacré', 'Résistance au Feu', 'Résistance à la Nature', 'Résistance au Givre', 'Résistance à l\'Ombre', 'Résistance aux Arcanes'],
        'dt'            => [null, "Magie", "Malédiction", "Maladie", "Poison", "Camouflage", "Invisibilité", null, null, "Enrager"],
        'sc'            => ["Physique", "Sacré", "Feu", "Nature", "Givre", "Ombre", "Arcane"],
        'cl'            => [null, "Guerrier", "Paladin", "Chasseur", "Voleur", "Prêtre", "DeathChevalier de la mort", "Chaman", "Mage", "Démoniste", null, "Druide"],
        'ra'            => [-2 => "Horde", -1 => "Alliance", null, "Humain", "Orc", "Nain", "Elfe de la nuit", "Mort-vivant", "Tauren", "Gnome", "Troll", null, "Elfe de sang", "Draeneï"],
        'rep'           => ["Détesté", "Hostile", "Inamical", "Neutre", "Amical", "Honoré", "Révéré", "Exalté"],
        'st'            => array(
            "Défaut",                       "Forme de félin",               "Arbre de vie",                 "Forme de voyage",              "Forme aquatique",              "Forme d'ours",
            "Ambiant",                      "Goule",                        "Forme d'ours redoutable",      "Goule de Steve",               "Squelette de Tharon'ja",       "Sombrelune - épreuve de force",
            "Joueur BLB",                   "Danse de l'ombre",             "Créature - Ours",              "Créature - Félin",             "Loup fantôme",                 "Posture de combat",
            "Posture défensive",            "Posture berserker",            "Test",                         "Zombie",                       "Métamorphe",                   null,
            null,                           "Mort-vivant",                  "Frénésie",                     "Forme de vol rapide",          "Forme d'Ombre",                "Forme de vol",
            "Camouflage",                   "Forme de sélénien",            "Esprit de rédemption"
        ),
        'me'            => array(
            null,                           "Charmé",                       "Désorienté",                   "Désarmé",                      "Distrait",                     "En fuite",
            "Maladroit",                    "Immobilisé",                   "Pacifié",                      "Réduit au silence",            "Endormi",                      "Pris au piège",
            "Étourdi",                      "Gelé",                         "Stupéfié",                     "Sanguinolent",                 "Soins",                        "Métamorphosé",
            "Banni",                        "Protégé",                      "Entravé",                      "Monté",                        "Séduit",                       "Repoussé",
            "Horrifié",                     "Invulnérable",                 "Interrompu",                   "Hébété",                       "Découverte",                   "Invulnérable",
            "Assommé",                      "Enragé"
        ),
        'ct'            => array(
            "Non classés",                  "Bête",                         "Draconien",                    "Démon",                        "Élémentaire",                  "Géant",
            "Mort-vivant",                  "Humanoïde",                    "Bestiole",                     "Mécanique",                    "Non spécifié",                 "Totem",
            "Familier pacifique",           "Nuage de gaz"
        ),
        'fa'            => array(
             1 => "Loup",                    2 => "Félin",                   3 => "Araignée",                4 => "Ours",                    5 => "Sanglier",                6 => "Crocilisque",
             7 => "Charognard",              8 => "Crabe",                   9 => "Gorille",                11 => "Raptor",                 12 => "Haut-trotteur",          20 => "Scorpide",
            21 => "Tortue",                 24 => "Chauve-souris",          25 => "Hyène",                  26 => "Oiseau de proie",        27 => "Serpent des vents",      30 => "Faucon-dragon",
            31 => "Ravageur",               32 => "Traqueur dim.",          33 => "Sporoptère",             34 => "Raie du Néant",          35 => "Serpent",                37 => "Phalène",
            38 => "Chimère",                39 => "Diablosaure",            41 => "Silithide",              42 => "Ver",                    43 => "Rhinocéros",             44 => "Guêpe",
            45 => "Chien du Magma",         46 => "Esprit de bête"
        ),
        'pvpRank'       => array(
            null,                                                           "Private / Scout",                                              "Corporal / Grunt",
            "Sergeant / Sergeant",                                          "Master Sergeant / Senior Sergeant",                            "Sergeant Major / First Sergeant",
            "Knight / Stone Guard",                                         "Knight-Lieutenant / Blood Guard",                              "Knight-Captain / Legionnare",
            "Knight-Champion / Centurion",                                  "Lieutenant Commander / Champion",                              "Commander / Lieutenant General",
            "Marshal / General",                                            "Field Marshal / Warlord",                                      "Grand Marshal / High Warlord"
        ),
    ),
    'account' => array(
        'title'         => "Compte Aowow",
        'email'         => "Courriel",
        'continue'      => "Poursuivre",
        'groups'        => array(
            -1 => "None",                   "Testeur",                      "Administrateur",               "Éditeur",                      "Modérateur",                   "Bureaucrate",
            "Développeur",                  "VIP",                          "Bloggeur",                     "Premium",                      "Traducteur",                   "Agent de ventes",
            "Gestionnaire de capture d'écran","Gestionnaire de vidéos",     "Partenaire API",               "En attente"
        ),
        // signIn
        'doSignIn'      => "Connexion à votre compte Aowow",
        'signIn'        => "Connexion",
        'user'          => "Nom d'utilisateur",
        'pass'          => "Mot de passe",
        'rememberMe'    => "Rester connecté",
        'forgot'        => "Oublié",
        'forgotUser'    => "Nom d'utilisateur",
        'forgotPass'    => "Mot de passe",
        'accCreate'     => 'Vous n\'avez pas encore de compte ? <a href="/account=signup">Créez-en un maintenant !</a>',

        // recovery
        'recoverUser'   => "Demande de nom d'utilisateur",
        'recoverPass'   => "Changement de mot de passe : Étape %s de 2",
        'newPass'       => "Nouveau mot de passe",

        // creation
        'register'      => "Enregistrement : Étape %s de 2",
        'passConfirm'   => "Confirmez",

        // dashboard
        'ipAddress'     => "Addresse IP",
        'lastIP'        => "Dernière IP utilisée",
        'myAccount'     => "Mon compte",
        'editAccount'   => "Utilisez les formulaires ci-dessous pour mettre à jour vos informations.",
        'viewPubDesc'   => 'Voyez vos informations publiques dans votre <a href="?user=%s">Profile  Page</a>',

        // bans
        'accBanned'     => "Ce compte a été fermé.",
        'bannedBy'      => "Banni par",
        'ends'          => "Termine le",
        'permanent'     => "Ce bannissement est permanent",
        'reason'        => "Raison",
        'noReason'      => "Aucune raison donnée.",

        // form-text
        'emailInvalid'  => "Cette adresse courriel est invalide.", // message_emailnotvalid
        'emailNotFound' => "L'address email que vous avez entrée n'est pas associée à un compte.<br><br>Si vous avez oublié l'address email avec laquelle vous avez enregistré votre compte".CFG_CONTACT_EMAIL." pour obtenir de l'aide.",
        'createAccSent' => "Un email a été envoyé à <b>%s</b>. Suivez les instructions pour créer votre compte.",
        'recovUserSent' => "Un email a été envoyé à <b>%s</b>. Suivez les instructions pour récupérer votre nom d'utilisateur.",
        'recovPassSent' => "Un email a été envoyé à <b>%s</b>. Suivez les instructions pour réinitialiser votre mot de passe.",
        'accActivated'  => 'Votre compte a été activé.<br>Vous pouvez maintenant <a href="?account=signin&token=%s">vous connecter</a>',
        'userNotFound'  => "Le nom d'utilisateur que vous avez saisi n'éxiste pas.",
        'wrongPass'     => "Ce mot de passe est invalide.",
        // 'accInactive'   => "Ce compte n'a pas encore été activé.",
        'loginExceeded' => "Le nombre maximum de connections depuis cette IP a été dépassé. Essayez de nouevau dans %s.",
        'signupExceeded'=> "Le nombre maximum d'inscriptions depuis cette IP a été dépassé. Essayez de nouveau dans %s.",
        'errNameLength' => "Votre nom d'utilisateur doit faire au moins 4 caractères de long.", // message_usernamemin
        'errNameChars'  => "Votre nom d'utilisateur doit contenir seulement des lettres et des chiffres.", // message_usernamenotvalid
        'errPassLength' => "Votre mot de passe doit faire au moins 6 caractères de long.", // message_passwordmin
        'passMismatch'  => "Les mots de passe que vous avez saisis ne correspondent pas.",
        'nameInUse'     => "Ce nom d'utilisateur est déjà utilisé.",
        'mailInUse'     => "Cette addresse email est déjà liée à un compte.",
        'isRecovering'  => "Ce compte est déjà en train d'être récupéré. Suivez les instruction dans l'email reçu ou attendez %s pour que le token expire.",
        'passCheckFail' => "Les mots de passe ne correspondent pas.", // message_passwordsdonotmatch
        'newPassDiff'   => "Votre nouveau mot de passe doit être différent de l'ancien." // message_newpassdifferent
    ),
    'user' => array(
        'notFound'      => "Utilisateur \"%s\" non trouvé!",
        'removed'       => "(Supprimé)",
        'joinDate'      => "Inscription",
        'lastLogin'     => "Dernière visite",
        'userGroups'    => "Role",
        'consecVisits'  => "Visites consécutives",
        'publicDesc'    => "Description publique",
        'profileTitle'  => "Profil de %s",
        'contributions' => "Contributions",
        'uploads'       => "Envois de données",
        'comments'      => "Commentaires",
        'screenshots'   => "Captures d'écran",
        'videos'        => "Vidéos",
        'posts'         => "Messages sur le forum"
    ),
    'mail' => array(
        'tokenExpires'  => "This token expires in %s.",
        'accConfirm'    => ["Activation de compte",             "Bienvenue sur ".CFG_NAME_SHORT."!\r\n\r\nCliquez sur le lien ci-dessous pour activer votre compte.\r\n\r\n".HOST_URL."?account=signup&token=%s\r\n\r\nSi vous n'avez pas demandé cet email, ignorez le."],
        'recoverUser'   => ["Récupération d'utilisateur",       "Suivez ce lien pour vous connecter.\r\n\r\n".HOST_URL."?account=signin&token=%s\r\n\r\nSi vous n'avez pas demandé cet email, ignorez le."],
        'resetPass'     => ["Réinitialisation du mot de passe", "Suivez ce lien pour réinitialiser votre mot de passe.\r\n\r\n".HOST_URL."?account=forgotpassword&token=%s\r\n\r\nSi vous n'avez pas fait de demande de réinitialisation, ignorez cet email."]
    ),
    'emote' => array(
        'notFound'      => "[This Emote doesn't exist.]",
        'self'          => "Vers vous-même",
        'target'        => "Vers les autres avec une cible",
        'noTarget'      => "Vers les autres sans cible",
        'isAnimated'    => "Utilise une animation",
        'aliases'       => "Alias",
        'noText'        => "Cette émote n'a pas de texte.",
    ),
    'enchantment' => array(
        'details'       => "En détail",
        'activation'    => "Activation",
        'notFound'      => "Cet enchantement n'existe pas.",
        'types'         => array(
            1 => "Sort proc",               3 => "Sort équipé",             7 => "Sort utilisé",            8 => "Châsse prismatique",
            5 => "Statistiques",            2 => "Dégâts d'arme",           6 => "DPS",                     4 => "Défense"
        )
    ),
    'areatrigger' => array(
        'notFound'      => "This areatrigger doesn't exist.",
        'foundIn'       => "This areatrigger can be found in",
        'types'         => ['Unused', 'Tavern', 'Teleporter', 'Quest Objective', 'Smart Trigger', 'Script']
    ),
    'gameObject' => array(
        'notFound'      => "Cette entité n'existe pas.",
        'cat'           => [0 => "Autre", 9 => "Livres", 3 => "Conteneurs", -5 => "Coffres", 25 => "Bancs de poissons", -3 => "Herbes", -4 => "Filons de minerai", -2 => "Quêtes", -6 => "Outils"],
        'type'          => [              9 => "Livre",  3 => "Conteneur",  -5 => "Coffre",  25 => "",                  -3 => "Herbe",  -4 => "Filon de minerai",  -2 => "Quête",  -6 => ""],
        'unkPosition'   => "L'emplacement de cette entité est inconnu.",
        'npcLootPH'     => 'Le <b>%s</b> contient les récompenses du combat contre <a href="?npc=%d">%s</a>. Il apparaît après sa mort.',
        'key'           => "Clé",
        'focus'         => "Focus de sort",
        'focusDesc'     => "Les sorts nécessitant ce focus peuvent être lancés près de cet entité.",
        'trap'          => "Piège",
        'triggeredBy'   => "Déclenché par",
        'capturePoint'  => "Point de capture",
        'foundIn'       => "Cette entité se trouve dans",
        'restock'       => "Se remplit toutes les %s.]"
    ),
    'npc' => array(
        'notFound'      => "Ce PNJ n'existe pas.",
        'classification'=> "Classification",
        'petFamily'     => "Familier",
        'react'         => "Réaction",
        'worth'         => "Vaut",
        'unkPosition'   => "L'emplacement de ce PNJ est inconnu.",
        'difficultyPH'  => "Ce PNJ est un espace réservé pour un autre mode de difficulté.",
        'seat'          => "Siège",
        'accessory'     => "Passager",
        'accessoryFor'  => "Ce PNJ est un passager pour un véhicule.",
        'quotes'        => "Citations",
        'gainsDesc'     => "Après avoir tué ce PNJ vous allez obtenir",
        'repWith'       => "points de réputation avec",
        'stopsAt'       => "arrête à %s",
        'vehicle'       => "Véhicule",
        'stats'         => "Statistiques",
        'melee'         => "de mêlée",
        'ranged'        => "à distance",
        'armor'         => "Armure",
        'foundIn'       => "Ce PNJ se trouve dans",
        'tameable'      => "Domptable (%s)",
        'waypoint'      => "Point de route",
        'wait'          => "Période d'attente",
        'respawnIn'     => "Rentrée en",
        'rank'          => [0 => "Standard", 1 => "Élite", 4 => "Rare", 2 => "Élite rare", 3 =>"Boss"],
        'textRanges'    => [null, "[sent to area]", "[sent to zone]", "[sent to map]", "[sent to world]"],
        'textTypes'     => [null, "crie", "dit", "chuchote"],
        'modes'         => array(
            1 => ["Normal", "Héroïque"],
            2 => ["10-joueurs Normal", "25-joueurs Normal", "10-joueurs Héroïque", "25-joueurs Héroïque"]
        ),
        'cat'           => array(
            "Non classés",              "Bêtes",                    "Draconien",                "Démons",                   "Élémentaires",             "Géants",                   "Mort-vivant",              "Humanoïdes",
            "Bestioles",                "Mécaniques",               "Non spécifié",             "Totems",                   "Familier pacifique",       "Nuages de gaz"
        )
    ),
    'event' => array(
        'notFound'      => "Cet évènement mondial n'existe pas.",
        'start'         => "Début",
        'end'           => "Fin",
        'interval'      => "Intervalle",
        'inProgress'    => "L'évènement est présentement en cours",
        'category'      => ["Non classés", "Vacances", "Récurrent", "Joueur ctr. Joueur"]
    ),
    'achievement' => array(
        'notFound'      => "Ce haut fait n'existe pas.",
        'criteria'      => "Critères",
        'points'        => "Points",
        'series'        => "Série",
        'outOf'         => "sur",
        'criteriaType'  => "Criterium Type-Id : ",
        'itemReward'    => "Vous recevrez",
        'titleReward'   => "Vous devriez recevoir le titre \"<a href=\"?title=%d\">%s</a>\"",
        'slain'         => "tué",
        'reqNumCrt'     => "Nécessite",
        'rfAvailable'   => "Disponibles sur les royaumes : ",
        '_transfer'     => 'Cet haut fait sera converti en <a href="?achievement=%d" class="q%d icontiny tinyspecial" style="background-image: url('.STATIC_URL.'/images/wow/icons/tiny/%s.gif)">%s</a> si vous transférez en <span class="icon-%s">%s</span>.',
    ),
    'chrClass' => array(
        'notFound'      => "Cette classe n'existe pas."
    ),
    'race' => array(
        'notFound'      => "Cette race n'existe pas.",
        'racialLeader'  => "Leader racial",
        'startZone'     => "Zone initiales",
    ),
    'maps' => array(
        'maps'          => "Cartes",
        'linkToThisMap' => "Lien vers cette carte",
        'clear'         => "Effacer",
        'EasternKingdoms' => "Royaumes de l'Est",
        'Kalimdor'      => "Kalimdor",
        'Outland'       => "Outreterre",
        'Northrend'     => "Norfendre",
        'Instances'     => "Instances",
        'Dungeons'      => "Donjons",
        'Raids'         => "Raids",
        'More'          => "Plus",
        'Battlegrounds' => "Champs de bataille",
        'Miscellaneous' => "Divers",
        'Azeroth'       => "Azeroth",
        'CosmicMap'     => "Carte cosmique",
    ),
    'privileges' => array(
        'main'          => "Sur AoWoW, vous pouvez accumuler de la <a href=\"?reputation\">réputation</a>. Le principal moyen d'en accumuler est d'avoir un score élevé pour vos commentaires.<br><br>Ainsi, la réputation est une vision sommaire de vos contributions à la communauté.<br><br>En amassant de la réputation, vous gagnez le respect de la communauté et vous obtiendrez certains privilèges. Vous pouvez en trouver la liste complète ci-dessous.",
        'privilege'     => "Privilège",
        'privileges'    => "Privilèges",
        'requiredRep'   => "Réputation Requise",
        'reqPoints'     => "Ce privilège requiert <b>%s</b> points de réputation.",
        '_privileges'   => array(
            null,                                   "Poster des commentaires",                      "Poster des liens externes",                        null,
            "Pas de CAPTCHA",                       "Les votes des commentaires ont plus de valeur",null,                                               null,
            null,                                   "Plus de votes par jour",                       "Emettre des votes positifs pour les commentaires", "Donner des votes négatifs aux commentaires",
            "Envoyer des réponses aux commentaires","Bordure : Bonne",                              "Bordure : Rare",                                   "Bordure : Épique",
            "Bordure : Légendaire",                 "AoWoW Premium"
        )
    ),
    'zone' => array(
        'notFound'      => "Cette zone n'existe pas.",
        'attunement'    => ["Accès", "Accès Héroïque"],
        'key'           => ["Clef", "Clef Héroïque"],
        'location'      => "Localisation",
        'raidFaction'   => "Faction de raid",
        'boss'          => "Boss final",
        'reqLevels'     => "Niveaux requis : [tooltip=instancereqlevel_tip]%d[/tooltip], [tooltip=lfgreqlevel_tip]%d[/tooltip]",
        'zonePartOf'    => "Cette zone fait partie de la zone [zone=%d].",
        'autoRez'       => "Résurrection automatique",
        'city'          => "Ville",
        'territory'     => "Territoire",
        'instanceType'  => "Type d'instance",
        'hcAvailable'   => "Mode héroïque disponible&nbsp;(%d)",
        'numPlayers'    => "Nombre de joueurs",
        'noMap'         => "Il n'y a aucune carte disponible pour cette zone.",
        'instanceTypes' => ["Zone",     "Transit", "Donjon",   "Raid",       "Champ de bataille", "Donjon",    "Arène", "Raid", "Raid"],
        'territories'   => ["Alliance", "Horde",   "Contesté", "Sanctuaire", "JcJ",               "JcJ Global"],
        'cat'           => array(
            "Royaumes de l'est",        "Kalimdor",                 "Donjons",                  "Raids",                    "Inutilisées",              null,
            "Champs de bataille",       null,                       "Outreterre",               "Arènes",                   "Norfendre"
        )
    ),
    'quest' => array(
        'notFound'      => "Cette quête n'existe pas.",
        '_transfer'     => 'Cette quête sera converti en <a href="?quest=%d" class="q1">%s</a> si vous transférez en <span class="icon-%s">%s</span>.',
        'questLevel'    => "Niveau %s",
        'requirements'  => "Conditions",
        'reqMoney'      => "Argent requis",
        'money'         => "Argent",
        'additionalReq' => "Conditions additionnelles requises pour obtenir cette quête",
        'reqRepWith'    => 'Votre reputation avec <a href="?faction=%d">%s</a> doît être %s %s',
        'reqRepMin'     => "d'au moins",
        'reqRepMax'     => "moins que",
        'progress'      => "Progrès",
        'provided'      => "Fourni",
        'providedItem'  => "Objet fourni",
        'completion'    => "Achèvement",
        'description'   => "Description",
        'playerSlain'   => "Joueurs tués",
        'profession'    => "Métier",
        'timer'         => "Temps",
        'loremaster'    => "Maitre des traditions",
        'suggestedPl'   => "Joueurs suggérés",
        'keepsPvpFlag'  => "Vous garde en mode JvJ",
        'daily'         => "Journalière",
        'weekly'        => "Chaque semaine",
        'monthly'       => "Mensuel",
        'sharable'      => "Partageable",
        'notSharable'   => "Non partageable",
        'repeatable'    => "Répétable",
        'reqQ'          => "Requiert",
        'reqQDesc'      => "Pour avoir cette quête, vous devez avoir completé ces quêtes",
        'reqOneQ'       => "Requiert",
        'reqOneQDesc'   => "Pour avoir accès à cette quête vous devez accomplir une des quêtes suivantes",
        'opensQ'        => "Donne accès aux quêtes",
        'opensQDesc'    => "Terminer cette quête est requis pour commencer ces quetês",
        'closesQ'       => "Empêche l'accès aux quêtes",
        'closesQDesc'   => "Terminer cette quête ferme l'accès aux quêtes",
        'enablesQ'      => "Autorise",
        'enablesQDesc'  => "Quand cette quête est active, vous pouvez obtenir cette quete",
        'enabledByQ'    => "Autorisée par",
        'enabledByQDesc'=> "Vous pouvez faire cette quête seulement quand cette quête est active",
        'gainsDesc'     => "Lors de l'achèvement de cette quête vous gagnerez",
        'theTitle'      => '"%s"',                          // empty on purpose!
        'mailDelivery'  => "Vous recevrez cette lettre%s%s",
        'mailBy'        => ' de <a href="?npc=%d">%s</a>',
        'mailIn'        => " après %s",
        'unavailable'   => "Cette quête est marquée comme obsolète et ne peut être obtenue ou accomplie.",
        'experience'    => "points d'expérience",
        'expConvert'    => "(ou %s si completé au niveau %d)",
        'expConvert2'   => "%s si completé au niveau %d",
        'chooseItems'   => "Vous pourrez choisir une de ces récompenses",
        'receiveItems'  => "Vous recevrez",
        'receiveAlso'   => "Vous recevrez également",
        'spellCast'     => "Vous allez être la cible du sort suivant",
        'spellLearn'    => "Vous apprendrez",
        'bonusTalents'  => "%d |4point:points; de talent",
        'spellDisplayed'=> ' (<a href="?spell=%d">%s</a> affichés)',
        'attachment'    => "[Attachment]",
        'questInfo'     => array(
             0 => "Standard",            1 => "Groupe",             21 => "Vie",                41 => "JcJ",                62 => "Raid",               81 => "Donjon",             82 => "Évènement mondial",
            83 => "Légendaire",         84 => "Escorte",            85 => "Héroïque",           88 => "Raid (10)",          89 => "Raid (25)"
        ),
        'cat'           => array(
            0 => array( "Royaumes de l'est",
                    1 => "Dun Morogh",                       3 => "Terres ingrates",                  4 => "Terres foudroyées",                8 => "Marais des Chagrins",              9 => "Vallée de Comté-du-nord",
                   10 => "Bois de la Pénombre",             11 => "Les Paluns",                      12 => "Forêt d'Elwynn",                  25 => "Mont Rochenoire",                 28 => "Maleterres de l'ouest",
                   33 => "Vallée de Strangleronce",         36 => "Montagnes d'Alterac",             38 => "Loch Modan",                      40 => "Marche de l'Ouest",               41 => "Défilé de Deuillevent",
                   44 => "Les Carmines",                    45 => "Hautes-terres d'Arathi",          46 => "Steppes ardentes",                47 => "Les Hinterlands",                 51 => "Gorge des Vents brûlants",
                   85 => "Clairières de Tirisfal",         130 => "Forêt des Pins argentés",        132 => "Vallée des Frigères",            139 => "Maleterres de l'est",            154 => "Le Glas",
                  267 => "Contreforts de Hautebrande",    1497 => "Fossoyeuse",                    1519 => "Hurlevent",                     1537 => "Forgefer",                      2257 => "Tram des profondeurs",
                 3430 => "Bois des Chants éternels",      3431 => "Île de Haut-soleil",            3433 => "Les Terres fantômes",           3487 => "Lune-d'argent",                 4080 => "Île de Quel'Danas",
                 4298 => "L'enclave Écarlate"
            ),
            1 => array( "Kalimdor",
                   14 => "Durotar",                         15 => "Marécage d'Âprefange",            16 => "Azshara",                         17 => "Les Tarides",                    141 => "Teldrassil",
                  148 => "Sombrivage",                     188 => "Sombrevallon",                   215 => "Mulgore",                        220 => "Mesa de Nuage rouge",            331 => "Orneval",
                  357 => "Féralas",                        361 => "Gangrebois",                     363 => "Vallée des épreuves",            400 => "Mille pointes",                  405 => "Désolace",
                  406 => "Les Serres-Rocheuses",           440 => "Tanaris",                        490 => "Cratère d'Un'Goro",              493 => "Reflet-de-Lune",                 618 => "Berceau-de-l'Hiver",
                 1377 => "Silithus",                      1637 => "Orgrimmar",                     1638 => "Les Pitons du Tonnerre",        1657 => "Darnassus",                     1769 => "Repaire des Grumegueules",
                 3524 => "Île de Brume-azur",             3525 => "Île de Brume-sang",             3526 => "Val d'Ammen",                   3557 => "L'Exodar",
            ),
            2 => array( "Donjons",
                  206 => "Donjon d'Utgarde",               209 => "Donjon d'Ombrecroc",             491 => "Kraal de Tranchebauge",          717 => "La Prison",                      718 => "Cavernes des lamentations",
                  719 => "Profondeurs de Brassenoire",     721 => "Gnomeregan",                     722 => "Souilles de Tranchebauge",       796 => "Monastère écarlate",            1176 => "Zul'Farrak",
                 1196 => "Cime d'Utgarde",                1337 => "Uldaman",                       1417 => "Temple englouti",               1581 => "Les Mortemines",                1583 => "Pic Rochenoire",
                 1584 => "Profondeurs de Rochenoire",     1941 => "Grottes du temps",              2017 => "Stratholme",                    2057 => "Scholomance",                   2100 => "Maraudon",
                 2366 => "Le Noir Marécage",              2367 => "Contreforts de Hautebrande d'antan",2437 => "Gouffre de Ragefeu",        2557 => "Hache-tripes",                  3535 => "Citadelle des Flammes infernale",
                 3562 => "Remparts des Flammes infernales",3688 => "Auchindoun",                   3713 => "La Fournaise du sang",          3714 => "Les Salles brisées",            3715 => "Le Caveau de la vapeur",
                 3716 => "La Basse-tourbière",            3717 => "Les enclos aux esclaves",       3789 => "Labyrinthe des ombres",         3790 => "Cryptes Auchenaï",              3791 => "Les salles des Sethekk",
                 3792 => "Tombes-mana",                   3842 => "Donjon de la Tempête",          3847 => "La Botanica",                   3848 => "L'Arcatraz",                    3849 => "Le Méchanar",
                 3905 => "Réservoir de Glissecroc",       4100 => "L'Épuration de Stratholme",     4131 => "Terrasse des Magistères",       4196 => "Donjon de Drak'Tharon",         4228 => "L'Oculus",
                 4264 => "Les salles de Pierre",          4265 => "Le Nexus",                      4272 => "Les salles de Foudre",          4277 => "Azjol-Nérub",                   4415 => "Le fort Pourpre",
                 4416 => "Gundrak",                       4494 => "Ahn'kahet : l'Ancien royaume",  4522 => "Citadelle de la Couronne de glace",4723 => "L'épreuve du champion",      4809 => "La Forge des âmes",
                 4813 => "Fosse de Saron",                4820 => "Salles des Reflets"
            ),
            3 => array( "Raids",
                 1977 => "Zul'Gurub",                     2159 => "Repaire d'Onyxia",              2677 => "Repaire de l'Aile noire",       2717 => "Cœur du Magma",                 3428 => "Ahn'Qiraj",
                 3429 => "Ruines d'Ahn'Qiraj",            3456 => "Naxxramas",                     3457 => "Karazhan",                      3606 => "Sommet d'Hyjal",                3607 => "Caverne du sanctuaire du Serpent",
                 3805 => "Zul'Aman",                      3836 => "Le repaire de Magtheridon",     3845 => "Donjon de la Tempête",          3923 => "Repaire de Gruul",              3959 => "Temple noir",
                 4075 => "Plateau du Puits de soleil",    4273 => "Ulduar",                        4493 => "Le sanctum Obsidien",           4500 => "L'Œil de l'éternité",           4603 => "Caveau d'Archavon",
                 4722 => "L'épreuve du croisé",           4812 => "Citadelle de la Couronne de glace", 4987 => "Le sanctum Rubis"
            ),
            4 => array( "Classes",
                  -61 => "Démoniste",                      -81 => "Guerrier",                       -82 => "Chaman",                        -141 => "Paladin",                       -161 => "Mage",
                 -162 => "Voleur",                        -261 => "Chasseur",                      -262 => "Prêtre",                        -263 => "Druide",                        -372 => "Chevalier de la mort"
            ),
            5 => array( "Métiers",
                  -24 => "Herboristerie",                 -101 => "Pêcheur",                       -121 => "Forgeron",                      -181 => "Alchimiste",                    -182 => "Travailleur du cuir",
                 -201 => "Ingénieur",                     -264 => "Tailleur",                      -304 => "Cuisinier",                     -324 => "Secourisme",                    -371 => "Calligraphie",
                 -373 => "Joaillerie"
            ),
            6 => array( "Champs de bataille",
                 2597 => "Vallée d'Alterac",              3277 => "Goulet des Chanteguerres",      3358 => "Bassin d'Arathi",               3820 => "L'Œil du cyclone",              4384 => "Rivage des Anciens",
                 4710 => "Île des Conquérants",            -25 => "Champs de bataille"
            ),
            7 => array( "Divers",
                   -1 => "Épique",                        -241 => "Tournoi",                       -344 => "Légendaire",                    -365 => "Guerre d'Ahn'Qiraj",            -367 => "Réputation",
                 -368 => "Invasion",                     -1010 => "Chercheur de donjons"
            ),
            8 => array( "Outreterre",
                 3483 => "Péninsule des Flammes infernale", 3518 => "Nagrand",                     3519 => "Forêt de Terokkar",             3520 => "Vallée d'Ombrelune",            3521 => "Marécage de Zangar",
                 3522 => "Les Tranchantes",               3523 => "Raz-de-Néant",                  3679 => "Skettis",                       3703 => "Shattrath"
            ),
            9 => array( "Évènements mondiaux",
                  -22 => "Saisonnier",                     -41 => "REUSE - vieil Uldaman",         -364 => "Foire de Sombrelune",           -366 => "Fête lunaire",                  -369 => "Solstice d'été",
                 -370 => "Fête des Brasseurs",            -374 => "Jardin des nobles",             -375 => "Bienfaits du pèlerin",          -376 => "De l'amour dans l'air",        -1001 => "Voile d'hiver",
                -1002 => "Semaine des enfants",          -1003 => "Sanssaint",                    -1005 => "Fête des moissons"

            ),
            10 => array( "Norfendre",
                   65 => "Désolation des dragons",          66 => "Zul'Drak",                        67 => "Les pics Foudroyés",             210 => "La Couronne de glace",           394 => "Les Grisonnes",
                  495 => "Fjord Hurlant",                 3537 => "Toundra Boréenne",              3711 => "Bassin de Sholazar",            4024 => "Frimarra",                      4197 => "Joug-d'hiver",
                 4395 => "Dalaran",                       4742 => "Accostage de Hrothgar"
            ),
           -2 => "Non classés"
        )
    ),
    'icon'  => array(
        'notFound'      => "Cette icône n'existe pas."
    ),
    'title' => array(
        'notFound'      => "Ce titre n'existe pas.",
        '_transfer'     => 'Ce titre sera converti en <a href="?title=%d" class="q1">%s</a> si vous transférez en <span class="icon-%s">%s</span>.',
        'cat'           => array(
            "Général",      "Joueur ctr. Joueur",    "Réputation",       "Donjons & raids",     "Quêtes",       "Métiers",      "Évènements mondiaux"
        )
    ),
    'skill' => array(
        'notFound'      => "Cette compétence n'existe pas.",
        'cat'           => array(
            -6 => "Compagnons",         -5 => "Montures",           -4 => "Traits raciaux",     5 => "Caractéristiques",    6 => "Compétences d'armes", 7 => "Compétences de classe", 8 => "Armures utilisables",
             9 => "Compétences secondaires", 10 => "Langues",       11 => "Métiers"
        )
    ),
    'currency' => array(
        'notFound'      => "Cette monnaie n'existe pas.",
        'cap'           => "Maximum total",
        'cat'           => array(
            1 => "Divers", 2 => "JcJ", 4 => "Classique", 21 => "Wrath of the Lich King", 22 => "Raid", 23 => "Burning Crusade", 41 => "Test", 3 => "Inutilisées"
        )
    ),
    'sound' => array(
        'notFound'      => "Ce son n'existe pas.",
        'foundIn'       => "Ce son se trouve dans",
        'goToPlaylist'  => "Aller à votre playlist",
        'music'         => "Musique",
        'intro'         => "Musique d'introduction",
        'ambience'      => "Ambiance",
        'cat'           => array(
            null,              "Spells",            "User Interface", "Footsteps",   "Weapons Impacts", null,      "Weapons Misses", null,            null,         "Pick Up/Put Down",
            "NPC Combat",      null,                "Errors",         "Nature",      "Objects",         null,      "Death",          "NPC Greetings", null,         "Armor",
            "Footstep Splash", "Water (Character)", "Water",          "Tradeskills", "Misc Ambience",   "Doodads", "Spell Fizzle",   "NPC Loops",     "Zone Music", "Emotes",
            "Narration Music", "Narration",         50 => "Zone Ambience", 52 => "Emitters", 53 => "Vehicles", 1000 => "Ma playlist"
        )
    ),
    'pet'      => array(
        'notFound'      => "Cette famille de familiers n'existe pas.",
        'exotic'        => "Exotique",
        'cat'           => ["Férocité", "Tenacité", "Ruse"],
        'food'          => ["Viande", "Poisson", "Fromage", "Pain", "Champignon", "Fruit", "Viande crue", "Poisson cru"]
    ),
    'faction' => array(
        'notFound'      => "Cette faction n'existe pas.",
        'spillover'     => "Partage de réputations",
        'spilloverDesc' => "Gagner de la réputation avec cette faction fourni une réputation proportionnelle avec les factions ci-dessous.",
        'maxStanding'   => "Niveau maximum",
        'quartermaster' => "Intendant",
        'customRewRate' => "Taux de récompense personnalisé",
        '_transfer'     => 'La réputation de cette faction sera convertie en <a href="?faction=%d" class="q1">%s</a> si vous transférez vers <span class="icon-%s">%s</span>.',
        'cat'           => array(
            1118 => ["Classique", 469 => "Alliance", 169 => "Cartel Gentepression", 67 => "Horde", 891 => "Forces de l'Alliance", 892 => "Forces de la Horde"],
            980  => ["The Burning Crusade", 936 => "Shattrath"],
            1097 => ["Wrath of the Lich King", 1052 => "Expédition de la Horde", 1117 => "Bassin de Sholazar", 1037 => "Avant-garde de l'Alliance"],
            0    => "Autre"
        )
    ),
    'itemset' => array(
        'notFound'      => "Cet ensemble d'objets n'existe pas.",
        '_desc'         => "<b>%s</b> est le <b>%s</b>. Il contient %s pièces.",
        '_descTagless'  => "<b>%s</b> est un ensemble d'objet qui contient %s pièces.",
        '_setBonuses'   => "Bonus de l'ensemble",
        '_conveyBonus'  => "Plus d'objets de cet ensemble sont équipés, plus votre personnage aura des bonus de caractéristiques.",
        '_pieces'       => "pièces",
        '_unavailable'  => "Cet objet n'est plus disponible aux joueurs.",
        '_tag'          => "Étiquette",
        'summary'       => "Résumé",
        'notes'         => array(
            null,                                   "Ensemble de donjon 1",                 "Ensemble de donjon 2",                         "Ensemble de raid palier 1",
            "Ensemble de raid palier 2",            "Ensemble de raid palier 3",            "Ensemble JcJ niveau 60 supérieur",             "Ensemble JcJ niveau 60 supérieur (désuet)",
            "Ensemble JcJ niveau 60 épique",        "Ensemble des ruines d'Ahn'Qiraj",      "Ensemble d'Ahn'Qiraj",                         "Ensemble de Zul'Gurub",
            "Ensemble de raid palier 4",            "Ensemble de raid palier 5",            "Ensemble de donjon 3",                         "Ensemble du bassin d'Arathi",
            "Ensemble JcJ niveau 70 supérieur",     "Ensemble d'arène saison 1",            "Ensemble de raid palier 6",                    "Ensemble d'arène saison 2",
            "Ensemble d'arène saison 3",            "Ensemble JcJ niveau 70 supérieur 2",   "Ensemble d'arène saison 4",                    "Ensemble de raid palier 7",
            "Ensemble d'arène saison 5",            "Ensemble de raid palier 8",            "Ensemble d'arène saison 6",                    "Ensemble de raid palier 9",
            "Ensemble d'arène saison 7",            "Ensemble de raid palier 10",           "Set d'Arena de la Saison 8"
        ),
        'types'         => array(
            null,               "Tissu",                "Cuir",                 "Mailles",                  "Plaques",                  "Dague",                    "Anneau",
            "Arme de pugilat",  "Hache à une main",     "Masse à une main",     "Épée à une main",          "Bijou",                    "Amulette"
        )
    ),
    'spell' => array(
        'notFound'      => "Ce sort n'existe pas.",
        '_spellDetails' => "Détails sur le sort",
        '_cost'         => "Coût",
        '_range'        => "Portée",
        '_castTime'     => "Incantation",
        '_cooldown'     => "Recharge",
        '_distUnit'     => "mètres",
        '_forms'        => "Formes",
        '_aura'         => "Aura",
        '_effect'       => "Effet",
        '_none'         => "Aucun",
        '_gcd'          => "GCD",
        '_globCD'       => "Temps d'attente universel",
        '_gcdCategory'  => "Catégorie GCD",
        '_value'        => "Valeur",
        '_radius'       => "Rayon",
        '_interval'     => "Intervalle",
        '_inSlot'       => "dans l'emplacement",
        '_collapseAll'  => "Replier Tout",
        '_expandAll'    => "Déplier Tout",
        '_transfer'     => 'Cet sort sera converti en <a href="?spell=%d" class="q%d icontiny tinyspecial" style="background-image: url('.STATIC_URL.'/images/wow/icons/tiny/%s.gif)">%s</a> si vous transférez en <span class="icon-%s">%s</span>.',
        'discovered'    => "Appris via une découverte",
        'ppm'           => "%s déclenchements par minute",
        'procChance'    => "Chance",
        'starter'       => "Sortilège initiaux",
        'trainingCost'  => "Coût d'entraînement",
        'remaining'     => "%s restantes",
        'untilCanceled' => "jusqu’à annulation",
        'castIn'        => "%s s d'incantation",
        'instantPhys'   => "Incantation immédiate",
        'instantMagic'  => "Instantanée",
        'channeled'     => "Canalisée",
        'range'         => "%s m de portée",
        'meleeRange'    => "Allonge",
        'unlimRange'    => "Portée illimitée",
        'reagents'      => "Composants",
        'tools'         => "Outils",
        'home'          => "%lt;Auberge&gt;",
        'pctCostOf'     => "de la %s de base",
        'costPerSec'    => ", plus %s par seconde",
        'costPerLevel'  => ", plus %s par niveau",
        'stackGroup'    => "[Stack Group]",
        'linkedWith'    => "[Linked with]",
        '_scaling'      => "[Scaling]",
        'scaling'       => array(
            'directSP' => "+%.2f%% de la puissance des sorts directe",        'directAP' => "+%.2f%% de la puissance d'attaque directe",
            'dotSP'    => "+%.2f%% de la puissance des sorts par tick",       'dotAP'    => "+%.2f%% de la puissance d'attaque par tick"
        ),
        'powerRunes'    => ["Sang", "Impie", "Givre", "Mort"],
        'powerTypes'    => array(
            // conventional
              -2 => "vie",                 0 => "mana",                1 => "rage",                2 => "focus",               3 => "énergie",             4 => "Satisfaction",
               5 => "Runes",               6 => "puissance runique",
            // powerDisplay
              -1 => "Munitions",         -41 => "Pyrite",            -61 => "Pression vapeur",  -101 => "Chaleur",          -121 => "Limon",            -141 => "Puissance de sang",
            -142 => "Courroux"
        ),
        'relItems'      => array(
            'base'    => "<small>Montre %s reliés à <b>%s</b></small>",
            'link'    => " ou ",
            'recipes' => "les <a href=\"?items=9.%s\">recettes</a>",
            'crafted' => "les <a href=\"?items&filter=cr=86;crs=%s;crv=0\">objets fabriqués</a>"
        ),
        'cat'           => array(
              7 => "Techniques",
            -13 => "Glyphes",
            -11 => ["Compétences", 8 => "Armure", 10 => "Langues", 6 => "Armes"],
             -4 => "Traits raciaux",
             -2 => "Talents",
             -6 => "Compagnons",
             -5 => ["Montures", 1=> "Montures Terrestres", 2 => "Montures volantes", 3 => "Divers"],
             -3 => array(
                "Habilité de familier",     782 => "Goule",             270 => "Générique",             203 => "Araignée",                  213 => "Charognard",            653 => "Chauve-souris",         787 => "Chien du Magma",
                780 => "Chimère",           214 => "Crabe",             212 => "Crocilisque",           781 => "Diablosaure",               788 => "Esprit de bête",        763 => "Faucon-dragon",         209 => "Félin",
                215 => "Gorille",           785 => "Guêpe",             218 => "Haut-trotteur",         654 => "Hyène",                     208 => "Loup",                  655 => "Oiseau de proie",       210 => "Ours",
                775 => "Phalène",           764 => "Raie du Néant",     217 => "Raptor",                767 => "Ravageur",                  786 => "Rhinocéros",            211 => "Sanglier",              236 => "Scorpide",
                768 => "Serpent",           656 => "Serpent des vents", 783 => "Silithide",             765 => "Sporoptère",                251 => "Tortue",                766 => "Traqueur dim.",         784 => "Ver",
                761 => "Gangregarde",       189 => "Chasseur corrompu", 188 => "Diablotin",             205 => "Succube",                   204 => "Marcheur du Vide"
            ),
             -7 => ["Talents de familiers", 411 => "Ruse", 410 => "Férocité", 409 => "Tenacité"],
             11 => array(
                "Métiers",
                171 => "Alchimie",
                164 => ["Forge", 9788 => "Fabricant d'armures", 9787 => "Fabricant d'armes", 17041 => "Maître fabricant de haches", 17040 => "Maître fabricant de marteaux", 17039 => "Maître fabricant d'épées"],
                333 => "Enchantement",
                202 => ["Ingénierie", 20219 => "Ingénieur gnome", 20222 => "Ingénieur goblin"],
                182 => "Herboristerie",
                773 => "Calligraphie",
                755 => "Joaillerie",
                165 => ["Travail du cuir", 10656 => "Travail du cuir d'écailles de dragon", 10658 => "Travail du cuir élémentaire", 10660 => "Travail du cuir tribal"],
                186 => "Minage",
                393 => "Dépeçage",
                197 => ["Couture", 26798 => "Couture d'étoffe lunaire", 26801 => "Couture de tisse-ombre", 26797 => "Couture du feu-sorcier"],
            ),
              9 => ["Compétences secondaires", 185 => "Cuisine", 129 => "Secourisme", 356 => "Pêche", 762 => "Monte"],
             -9 => "Habilité de MJ",
             -8 => "Habilité de PNJ",
              0 => "Non classés"
        ),
        'armorSubClass' => array(
            "Divers",                               "Armures en tissu",                     "Armures en cuir",                      "Armures en mailles",                   "Armures en plaques",
            null,                                   "Boucliers",                            "Librams",                              "Idoles",                               "Totems",
            "Cachets"
        ),
        'weaponSubClass' => array(
            13 => "Armes de pugilat",               15 => "Dagues",                          7 => "Epées à une main",                0 => "Haches à une main",               4 => "Masses à une main",
             6 => "Armes d'hast",                   10 => "Bâtons",                          8 => "Epées à deux mains",              1 => "Haches à deux mains",             5 => "Masses à deux mains",
            18 => "Arbalètes",                       2 => "Arcs",                            3 => "Armes à feu",                    16 => "Armes de jet",                   19 => "Baguettes",
            20 => "Cannes à pêche",                 14 => "Divers"
        ),
        'subClassMasks'      => array(
            0x02A5F3 => "Arme de mêlée",            0x0060 => "Bouclier",                   0x04000C => "Arme à distance",          0xA091 => "Arme de mêlée à une main"
        ),
        'traitShort'    => array(
            'atkpwr'    => "PA",                    'rgdatkpwr' => "PAD",                   'splpwr'    => "PS",                    'arcsplpwr' => "PArc",                  'firsplpwr' => "PFeu",
            'frosplpwr' => "PGiv",                  'holsplpwr' => "PSac",                  'natsplpwr' => "PNat",                  'shasplpwr' => "POmb",                  'splheal'   => "Soins",
            'str'       => "For",                   'agi'       => "Agi",                   'sta'       => "End",                   'int'       => "Int",                   'spi'       => "Esp"
        ),
        'spellModOp'    => array(
            "DAMAGE",                               "DURATION",                             "THREAT",                               "EFFECT1",                              "CHARGES",
            "RANGE",                                "RADIUS",                               "CRITICAL_CHANCE",                      "ALL_EFFECTS",                          "NOT_LOSE_CASTING_TIME",
            "CASTING_TIME",                         "COOLDOWN",                             "EFFECT2",                              "IGNORE_ARMOR",                         "COST",
            "CRIT_DAMAGE_BONUS",                    "RESIST_MISS_CHANCE",                   "JUMP_TARGETS",                         "CHANCE_OF_SUCCESS",                    "ACTIVATION_TIME",
            "DAMAGE_MULTIPLIER",                    "GLOBAL_COOLDOWN",                      "DOT",                                  "EFFECT3",                              "BONUS_MULTIPLIER",
            null,                                   "PROC_PER_MINUTE",                      "VALUE_MULTIPLIER",                     "RESIST_DISPEL_CHANCE",                 "CRIT_DAMAGE_BONUS_2",
            "SPELL_COST_REFUND_ON_FAIL"
        ),
        'combatRating'  => array(
            "WEAPON_SKILL",                         "DEFENSE_SKILL",                        "DODGE",                                "PARRY",                                "BLOCK",
            "HIT_MELEE",                            "HIT_RANGED",                           "HIT_SPELL",                            "CRIT_MELEE",                           "CRIT_RANGED",
            "CRIT_SPELL",                           "HIT_TAKEN_MELEE",                      "HIT_TAKEN_RANGED",                     "HIT_TAKEN_SPELL",                      "CRIT_TAKEN_MELEE",
            "CRIT_TAKEN_RANGED",                    "CRIT_TAKEN_SPELL",                     "HASTE_MELEE",                          "HASTE_RANGED",                         "HASTE_SPELL",
            "WEAPON_SKILL_MAINHAND",                "WEAPON_SKILL_OFFHAND",                 "WEAPON_SKILL_RANGED",                  "EXPERTISE",                            "ARMOR_PENETRATION"
        ),
        'lockType'      => array(
            null,                                   "Crochetage",                           "Herboristerie",                        "Minage",                               "Désarmement de piège",
            "Ouverture",                            "Trésor (DND)",                         "Gemmes elfiques calcifiées (DND)",     "Fermeture",                            "Pose de piège",
            "Ouverture rapide",                     "Fermeture rapide",                     "Ouverture (bricolage)",                "Ouverture (à genoux)",                 "Ouverture (en attaquant)",
            "Gahz'ridienne (DND)",                  "Explosif",                             "Ouverture JcJ",                        "Fermeture JcJ",                        "Pêche",
            "Calligraphie",                         "Ouverture à partir d'un véhicule",
        ),
        'stealthType'   => ["GENERAL", "TRAP"],
        'invisibilityType' => ["GENERAL", 3 => "TRAP", 6 => "DRUNK"],
        'unkEffect'     => 'Unknown Effect',
        'effects'       => array(
/*0-5    */ 'None',                     'Instakill',                'School Damage',            'Dummy',                    'Portal Teleport',          'Teleport Units',
/*6+     */ 'Apply Aura',               'Environmental Damage',     'Drain Power',              'Drain Health',             'Heal',                     'Bind',
/*12+    */ 'Portal',                   'Ritual Base',              'Ritual Specialize',        'Ritual Activate Portal',   'Complete Quest',           'Weapon Damage - No School',
/*18+    */ 'Resurrect with % Health',  'Add Extra Attacks',        'Can Dodge',                'Can Evade',                'Can Parry',                'Can Block',
/*24+    */ 'Create Item',              'Can Use Weapon',           'Know Defense Skill',       'Persistent Area Aura',     'Summon',                   'Leap',
/*30+    */ 'Give Power',               'Weapon Damage - %',        'Trigger Missile',          'Open Lock',                'Transform Item',           'Apply Area Aura - Party',
/*36+    */ 'Learn Spell',              'Know Spell Defense',       'Dispel',                   'Learn Language',           'Dual Wield',               'Jump to Target',
/*42+    */ 'Jump Behind Target',       'Teleport Target to Caster','Learn Skill Step',         'Give Honor',               'Spawn',                    'Trade Skill',
/*48+    */ 'Stealth',                  'Detect Stealthed',         'Summon Object',            'Force Critical Hit',       'Guarantee Hit',            'Enchant Item Permanent',
/*54+    */ 'Enchant Item Temporary',   'Tame Creature',            'Summon Pet',               'Learn Spell - Pet',        'Weapon Damage - Flat',     'Open Item & Fast Loot',
/*60+    */ 'Proficiency',              'Send Script Event',        'Burn Power',               'Modify Threat - Flat',     'Trigger Spell',            'Apply Area Aura - Raid',
/*66+    */ 'Create Mana Gem',          'Heal to Full',             'Interrupt Cast',           'Distract',                 'Distract Move',            'Pickpocket',
/*72+    */ 'Far Sight',                'Forget Talents',           'Apply Glyph',              'Heal Mechanical',          'Summon Object - Temporary','Script Effect',
/*78+    */ 'Attack',                   'Abort All Pending Attacks','Add Combo Points',         'Create House',             'Bind Sight',               'Duel',
/*84+    */ 'Stuck',                    'Summon Player',            'Activate Object',          'Siege Damage',             'Repair Building',          'Siege Building Action',
/*90+    */ 'Kill Credit',              'Threat All',               'Enchant Held Item',        'Force Deselect',           'Self Resurrect',           'Skinning',
/*96+    */ 'Charge',                   'Cast Button',              'Knock Back',               'Disenchant',               'Inebriate',                'Feed Pet',
/*102+   */ 'Dismiss Pet',              'Give Reputation',          'Summon Object (Trap)',     'Summon Object (Battle S.)','Summon Object (#3)',       'Summon Object (#4)',
/*108+   */ 'Dispel Mechanic',          'Summon Dead Pet',          'Destroy All Totems',       'Durability Damage - Flat', 'Summon Demon',             'Resurrect with Flat Health',
/*114+   */ 'Taunt',                    'Durability Damage - %',    'Skin Player Corpse (PvP)', 'AoE Resurrect with % Health','Learn Skill',            'Apply Area Aura - Pet',
/*120+   */ 'Teleport to Graveyard',    'Normalized Weapon Damage', null,                       'Take Flight Path',         'Pull Towards',             'Modify Threat - %',
/*126+   */ 'Spell Steal ',             'Prospect',                 'Apply Area Aura - Friend', 'Apply Area Aura - Enemy',  'Redirect Done Threat %',   'Play Sound',
/*132+   */ 'Play Music',               'Unlearn Specialization',   'Kill Credit2',             'Call Pet',                 'Heal for % of Total Health','Give % of Total Power',
/*138+   */ 'Leap Back',                'Abandon Quest',            'Force Cast',               'Force Spell Cast with Value','Trigger Spell with Value','Apply Area Aura - Pet Owner',
/*144+   */ 'Knockback to Dest.',       'Pull Towards Dest.',       'Activate Rune',            'Fail Quest',               null,                       'Charge to Dest',
/*150+   */ 'Start Quest',              'Trigger Spell 2',          'Summon - Refer-A-Friend',  'Create Tamed Pet',         'Discover Flight Path',     'Dual Wield 2H Weapons',
/*156+   */ 'Add Socket to Item',       'Create Tradeskill Item',   'Milling',                  'Rename Pet',               null,                       'Change Talent Spec. Count',
/*162-167*/ 'Activate Talent Spec.',    null,                       'Remove Aura',              null,                       null,                       'Update Player Phase'
        ),
        'unkAura'       => 'Unknown Aura',
        'auras'         => array(
/*0-   */   'None',                                 'Bind Sight',                           'Possess',                              'Periodic Damage - Flat',               'Dummy',
/*5+   */   'Confuse',                              'Charm',                                'Fear',                                 'Periodic Heal',                        'Mod Attack Speed',
            'Mod Threat',                           'Taunt',                                'Stun',                                 'Mod Damage Done - Flat',               'Mod Damage Taken - Flat',
            'Damage Shield',                        'Stealth',                              'Mod Stealth Detection Level',          'Invisibility',                         'Mod Invisibility Detection Level',
            'Regenerate Health - %',                'Regenerate Power - %',                 'Mod Resistance - Flat',                'Periodically Trigger Spell',           'Periodically Give Power',
/*25+  */   'Pacify',                               'Root',                                 'Silence',                              'Reflect Spells',                       'Mod Stat - Flat',
            'Mod Skill - Temporary',                'Increase Run Speed %',                 'Mod Mounted Speed %',                  'Decrease Run Speed %',                 'Mod Maximum Health - Flat',
            'Mod Maximum Power - Flat',             'Shapeshift',                           'Spell Effect Immunity',                'Spell Aura Immunity',                  'Spell School Immunity',
            'Damage Immunity',                      'Dispel Type Immunity',                 'Proc Trigger Spell',                   'Proc Trigger Damage',                  'Track Creatures',
            'Track Resources',                      'Ignore All Gear',                      'Mod Parry %',                          null,                                   'Mod Dodge %',
/*50+  */   'Mod Critical Healing Amount %',        'Mod Block %',                          'Mod Physical Crit Chance',             'Periodically Drain Health',            'Mod Physical Hit Chance',
            'Mod Spell Hit Chance',                 'Transform',                            'Mod Spell Crit Chance',                'Increase Swim Speed %',                'Mod Damage Done Versus Creature',
            'Pacify & Silence',                     'Mod Size %',                           'Periodically Transfer Health',         'Periodic Transfer Power',              'Periodic Drain Power',
            'Mod Spell Haste % (not stacking)',     'Feign Death',                          'Disarm',                               'Stalked',                              'Mod Absorb School Damage',
            'Extra Attacks',                        'Mod Spell School Crit Chance',         'Mod Spell School Power Cost - %',      'Mod Spell School Power Cost - Flat',   'Reflect Spells School From School',
/*75+  */   'Force Language',                       'Far Sight',                            'Mechanic Immunity',                    'Mounted',                              'Mod Damage Done - %',
            'Mod Stat - %',                         'Split Damage - %',                     'Underwater Breathing',                 'Mod Base Resistance - Flat',           'Mod Health Regeneration - Flat',
            'Mod Power Regeneration - Flat',        'Create Item on Death',                 'Mod Damage Taken - %',                 'Mod Health Regeneration - %',          'Periodic Damage - %',
            'Mod Resist Chance',                    'Mod Aggro Range',                      'Prevent Fleeing',                      'Unattackable',                         'Interrupt Power Decay',
            'Ghost',                                'Spell Magnet',                         'Absorb Damage - Mana Shield',          'Mod Skill Value',                      'Mod Attack Power - Flat',
/*100+ */   'Always Show Debuffs',                  'Mod Resistance - %',                   'Mod Melee Attack Power vs Creature',   'Mod Total Threat - Temporary',         'Water Walking',
            'Feather Fall',                         'Levitate / Hover',                     'Add Modifier - Flat',                  'Add Modifier - %',                     'Proc Spell on Target',
            'Mod Power Regeneration - %',           'Intercept % of Attacks Against Target','Override Class Script',                'Mod Ranged Damage Taken - Flat',       'Mod Ranged Damage Taken - %',
            'Mod Healing Taken - Flat',             'Allow % of Health Regen During Combat','Mod Mechanic Resistance',              'Mod Healing Taken - %',                'Share Pet Tracking',
            'Untrackable',                          'Beast Lore',                           'Mod Offhand Damage Done %',            'Mod Target Resistance - Flat',         'Mod Ranged Attack Power - Flat',
/*125+ */   'Mod Melee Damage Taken - Flat',        'Mod Melee Damage Taken - %',           'Mod Attacker Ranged Attack Power',     'Possess Pet',                          'Increase Run Speed % - Stacking',
            'Incerase Mounted Speed % - Stacking',  'Mod Ranged Attack Power vs Creature',  'Mod Maximum Power - %',                'Mod Maximum Health - %',               'Allow % of Mana Regen During Combat',
            'Mod Healing Done - Flat',              'Mod Healing Done - %',                 'Mod Stat - %',                         'Mod Melee Haste %',                    'Force Reputation',
            'Mod Ranged Haste %',                   'Mod Ranged Ammo Haste %',              'Mod Base Resistance - %',              'Mod Resistance - Flat (not stacking)', 'Safe Fall',
            'Increase Pet Talent Points',           'Allow Exotic Pets Taming',             'Mechanic Immunity Mask',               'Retain Combo Points',                  'Reduce Pushback Time %',
/*150+ */   'Mod Shield Block Value - %',           'Track Stealthed',                      'Mod Player Aggro Range',               'Split Damage - Flat',                  'Mod Stealth Level',
            'Mod Underwater Breathing %',           'Mod All Reputation Gained by %',       'Done Pet Damage Multiplier',           'Mod Shield Block Value - Flat',        'No PvP Credit',
            'Mod AoE Avoidance',                    'Mod Health Regen During Combat',       'Mana Burn',                            'Mod Melee Critical Damage %',          null,
            'Mod Attacker Melee Attack Power',      'Mod Melee Attack Power - %',           'Mod Ranged Attack Power - %',          'Mod Damage Done vs Creature',          'Mod Crit Chance vs Creature',
            'Change Object Visibility for Player',  'Mod Run Speed (not stacking)',         'Mod Mounted Speed (not stacking)',     null,                                   'Mod Spell Power by % of Stat',
/*175+ */   'Mod Healing Power by % of Stat',       'Spirit of Redemption',                 'AoE Charm',                            'Mod Debuff Resistance - %',            'Mod Attacker Spell Crit Chance',
            'Mod Spell Power vs Creature',          null,                                   'Mod Resistance by % of Stat',          'Mod Threat % of Critical Hits',        'Mod Attacker Melee Hit Chance',
            'Mod Attacker Ranged Hit Chance',       'Mod Attacker Spell Hit Chance',        'Mod Attacker Melee Crit Chance',       'Mod Attacker Ranged Crit Chance',      'Mod Rating',
            'Mod Reputation Gained %',              'Limit Movement Speed',                 'Mod Attack Speed %',                   'Mod Haste % (gain)',                   'Mod Target School Absorb %',
            'Mod Target School Absorb for Ability', 'Mod Cooldowns',                        'Mod Attacker Crit Chance',             null,                                   'Mod Spell Hit Chance',
/*200+ */   'Mod Kill Experience Gained %',         'Can Fly',                              'Ignore Combat Result',                 'Mod Attacker Melee Crit Damage %',     'Mod Attacker Ranged Crit Damage %',
            'Mod Attacker Spell Crit Damage %',     'Mod Vehicle Flight Speed %',           'Mod Mounted Flight Speed %',           'Mod Flight Speed %',                   'Mod Mounted Flight Speed % (always)',
            'Mod Vehicle Speed % (always)',         'Mod Flight Speed % (not stacking)',    'Mod Ranged Attack Power by % of Stat', 'Mod Rage Generated from Damage Dealt', 'Tamed Pet Passive',
            'Arena Preparation',                    'Mod Spell Haste %',                    'Killing Spree',                        'Mod Ranged Haste %',                   'Mod Mana Regeneration by % of Stat',
            'Mod Combat Rating by % of Stat',       'Ignore Threat',                        null,                                   'Raid Proc from Charge',                null,
/*225+ */   'Raid Proc from Charge with Value',     'Periodic Dummy',                       'Periodically Trigger Spell with Value','Detect Stealth',                       'Mod AoE Damage Taken %',
            'Mod Maximum Health - Flat (no stacking)','Proc Trigger Spell with Value',      'Mod Mechanic Duration %',              'Change other Humanoid Display',        'Mod Mechanic Duration % (not stacking)',
            'Mod Dispel Resistance %',              'Control Vehicle',                      'Mod Spell Power by % of Attack Power', 'Mod Healing Power by % of Attack Power','Mod Size % (not stacking)',
            'Mod Expertise',                        'Force Move Forward',                   'Mod Spell & Healing Power by % of Int','Faction Override',                     'Comprehend Language',
            'Mod Aura Duration by Dispel Type',   'Mod Aura Duration by Dispel Type (not stacking)', 'Clone Caster',                'Mod Combat Result Chance',             'Convert Rune',
/*250+ */   'Mod Maximum Health - Flat (stacking)', 'Mod Enemy Dodge Chance',               'Mod Haste % (loss)',                   'Mod Critical Block Chance',            'Disarm Offhand',
            'Mod Mechanic Damage Taken %',          'No Reagent Cost',                      'Mod Target Resistance by Spell Class', 'Mod Spell Visual',                     'Mod Periodic Healing Taken %',
            'Screen Effect',                        'Phase',                                'Ability Ignore Aurastate',             'Allow Only Ability',                   null,
            null,                                   null,                                   'Cancel Aura Buffer at % of Caster Health','Mod Attack Power by % of Stat',     'Ignore Target Resistance',
            'Ignore Target Resistance for Ability', 'Mod Damage Taken % from Caster',       'Ignore Swing Timer Reset',             'X-Ray',                                'Ability Consume No Ammo',
/*275+ */   'Mod Ability Ignore Shapeshift',        'Mod Mechanic Damage Done %',           'Mod Max Affected Targets',             'Disarm Ranged Weapon',                 'Spawn Effect',
            'Mod Armor Penetration %',              'Mod Honor Gain %',                     'Mod Base Health %',                    'Mod Healing Taken % from Caster',      'Linked Aura',
            'Mod Attack Power by School Resistance','Allow Periodic Ability to Crit',       'Mod Spell Deflect Chance',             'Ignore Hit Direction',                 null,
            'Mod Crit Chance',                      'Mod Quest Experience Gained %',        'Open Stable',                          'Override Spells',                      'Prevent Power Regeneration',
            null,                                   'Set Vehicle Id',                       'Spirit Burst',                         'Strangulate',                          null,
/*300+ */   'Share Damage %',                       'Mod Absorb School Healing',            null,                                   'Mod Damage Done vs Aurastate - %',     'Fake Inebriate',
            'Mod Minimum Speed %',                  null,                                   'Heal Absorb Test',                     'Mod Critical Strike Chance for Caster',null,
            'Mod Pet AoE Damage Avoidance',         null,                                   null,                                   null,                                   'Prevent Ressurection',
/* -316*/   'Underwater Walking',                   'Periodic Haste'
        )
    ),
    'item' => array(
        'notFound'      => "Cet objet n'existe pas.",
        'armor'         => "Armure : %s",
        'block'         => "Bloquer : %s",
        'charges'       => "%d |4charge:charges;",
        'locked'        => "Verrouillé",
        'ratingString'  => "%s&nbsp;@&nbsp;L%s",
        'heroic'        => "Héroïque",
        'startQuest'    => "Cet objet permet de lancer une quête",
        'bagSlotString' => '%2$s %1$d |4emplacement:emplacements;',
        'fap'           => "puissance d'attaque en combat farouche",
        'durability'    => "Durabilité %d / %d",
        'realTime'      => "temps réel",
        'conjured'      => "Objet invoqué",
        'sellPrice'     => "Prix de Vente",
        'itemLevel'     => "Niveau d'objet %d",
        'randEnchant'   => "&lt;Enchantement aléatoire&gt",
        'readClick'     => "&lt;Clique Droit pour Lire&gt",
        'openClick'     => "&lt;Clic Droit pour Ouvrir&gt",
        'setBonus'      => "(%d) Ensemble : %s",
        'setName'       => "%s (%d/%d)",
        'partyLoot'     => "Butin de groupe",
        'smartLoot'     => "Butin intelligent",
        'indestructible'=> "Ne peut être détruit",
        'deprecated'    => "Désuet",
        'useInShape'    => "Utilisable lorsque transformé",
        'useInArena'    => "Utilisable en Aréna",
        'refundable'    => "Remboursable",
        'noNeedRoll'    => "Ne peut pas faire un jet de Besoin",
        'atKeyring'     => "Va dans le trousseau de clés",
        'worth'         => "Vaut",
        'consumable'    => "Consommable",
        'nonConsumable' => "Non-consommable",
        'accountWide'   => "Portant sur le compte",
        'millable'      => "Pilable",
        'noEquipCD'     => "Aucun temps de recharge lorsqu'équipé",
        'prospectable'  => "Prospectable",
        'disenchantable'=> "Desencantable",
        'cantDisenchant'=> "Ne peut pas être désenchanté",
        'repairCost'    => "Cout de réparation",
        'tool'          => "Outil",
        'cost'          => "Coût",
        'content'       => "Contenu",
        '_transfer'     => 'Cet objet sera converti en <a href="?item=%d" class="q%d icontiny tinyspecial" style="background-image: url('.STATIC_URL.'/images/wow/icons/tiny/%s.gif)">%s</a> si vous transférez en <span class="icon-%s">%s</span>.',
        '_unavailable'  => "Cet objet n'est pas disponible pour les joueurs.",
        '_rndEnchants'  => "Enchantements aléatoires",
        '_chance'       => "(%s%% de chance)",
        'slot'          => "Emplacement",
        '_quality'      => "Qualité",
        'usableBy'      => "Utilisable par",
        'buyout'        => "Vente immédiate",
        'each'          => "chacun",
        'tabOther'      => "Autre",
        'reqMinLevel'   => "Niveau %d requis",
        'reqLevelRange' => "Niveau %d à %d (%s) requis",
        'unique'        => ["Unique",          "Unique (%d)", "Unique: %s (%d)"         ],   // ITEM_UNIQUE, ITEM_UNIQUE_MULTIPLE, ITEM_LIMIT_CATEGORY
        'uniqueEquipped'=> ["Unique - Equipé", null,          "Unique - Equipé: %s (%d)"],   // ITEM_UNIQUE_EQUIPPABLE, null, ITEM_LIMIT_CATEGORY_MULTIPLE
        'speed'         => "Vitesse",
        'dps'           => "(%.1f dégâts par seconde)",
        'damage'        => array(                           // *DAMAGE_TEMPLATE*
                            //  basic,                      basic /w school,                                add basic,                              add basic /w school
            'single'    => ["%d Dégâts",                    "%d points de dégâts (%s)",                     "+ %d points de dégâts",                "+ %d points de dégâts (%s)"             ],
            'range'     => ["Dégâts : %d - %d",             "%d - %d points de dégâts (%s)",                "+ %d - %d points de dégâts",           "+%d - %d points de dégâts (%s)"         ],
            'ammo'      => ["Ajoute %g dégâts par seconde", "Ajoute %g points de dégâts (%s) par seconde",  "+ %g points de dégâts par seconde",    "+ %g points de dégâts (%s) par seconde" ]
        ),
        'gems'          => "Gemmes",
        'socketBonus'   => "Bonus de châsse: %s",
        'socket'        => array(
            "Méta-châsse",          "Châsse rouge",     "Châsse jaune",         "Châsse bleue",           -1 => "Châsse prismatique"
        ),
        'gemColors'     => array(                           // *_GEM
            "Méta",                 "rouge(s)",         "jaune(s)",             "bleue(s)"
        ),
        'gemConditions' => array(                           // ENCHANT_CONDITION_*
            2 => "moins de %d |4gemme:gemmes; %s",
            3 => "plus de gemmes %s que |2 %s",
            5 => "au moins %d |4gemme:gemmes; %s"
        ),
        'reqRating'     => array(                           // ITEM_REQ_ARENA_RATING*
            "Nécessite une cote d'arène personnelle et en équipe de %d",
            "Nécessite une cote d'arène personnelle et en équipe de %d|nen arène de 3c3 ou 5c5.",
            "Nécessite une cote d'arène personnelle et en équipe de %d|nen arène de 5c5."
        ),
        'quality'       => array(
            "Médiocre",             "Classique",        "Bonne",                "Rare",
            "Épique",               "Légendaire",       "Artefact",             "Héritage"
        ),
        'trigger'       => array(
            "Utilise : ",           "Équipé : ",        "Chances quand vous touchez : ", "",                    "",
            "",                     ""
        ),
        'bonding'       => array(
            "Lié au compte",                            "Lié quand ramassé",                                    "Lié quand équipé",
            "Lié quand utilisé",                        "Objet de quête",                                       "Objet de quête"
        ),
        "bagFamily"     => array(
            "Sac",                  "Carquois",         "Giberne",              "Sac d'âmes",                   "Sac de travailleur du cuir",
            "Sac de calligraphie",  "Sac d'herbes",     "Sac d'enchanteur",     "Sac d'ingénieur",              null, /*Clé*/
            "Sac de gemmes",        "Sac de mineur"
        ),
        'inventoryType' => array(
            null,                   "Tête",             "Cou",                  "Épaules",                      "Chemise",
            "Torse",                "Taille",           "Jambes",               "Pieds",                        "Poignets",
            "Mains",                "Doigt",            "Bijou",                "À une main",                   "Main gauche", /*Shield*/
            "À distance",           "Dos",              "Deux mains",           "Sac",                          "Tabard",
            null, /*Robe*/          "Main droite",      "Main gauche",          "Tenu en main gauche",          "Projectile",
            "Armes de jet",         null, /*Ranged2*/   "Carquois",             "Relique"
        ),
        'armorSubClass' => array(
            "Divers",               "Armures en tissu", "Armures en cuir",      "Armures en mailles",           "Armures en plaques",
            null,                   "Bouclier",         "Libram",               "Idole",                        "Totem",
            "Cachet"
        ),
        'weaponSubClass' => array(
            "Hache",                "Hache",            "Arc",                  "Arme à feu",                   "Masse",
            "Masse",                "Armes d'hast",     "Épée",                 "Épée",                         null,
            "Bâton",                null,               null,                   "Arme de pugilat",              "Divers",
            "Dague",                "Armes de jet",     null,                   "Arbalète",                     "Baguette",
            "Canne à pêche"
        ),
        'projectileSubClass' => array(
            null,                   null,               "Flèche",               "Balle",                         null
        ),
        'elixirType'    => [null, "De bataille", "De gardien"],
        'cat'           => array(
             2 => "Armes",                                  // self::$spell['weaponSubClass']
             4 => array("Armure", array(
                 1 => "Armures en tissu",            2 => "Armures en cuir",         3 => "Armures en mailles",      4 => "Armures en plaques",      6 => "Boucliers",               7 => "Librams",
                 8 => "Idoles",                      9 => "Totems",                 10 => "Cachets",                -6 => "Capes",                  -5 => "Accessoires pour main gauche", -8 => "Chemises",
                -7 => "Tabards",                    -3 => "Amulettes",              -2 => "Anneaux",                -4 => "Bijoux",                  0 => "Divers (Armure)",
            )),
             1 => array("Conteneurs", array(
                 0 => "Sacs",                        3 => "Sacs d'enchanteur",       4 => "Sacs d'ingénieur",        5 => "Sacs de gemmes",          2 => "Sacs d'herbes",           8 => "Sacs de calligraphie",
                 7 => "Sacs de travailleur du cuir", 6 => "Sacs de mineur",          1 => "Sacs d'âmes"
            )),
             0 => array("Consommables", array(
                -3 => "Améliorations d'objet temporaires",                           6 => "Améliorations d'objet permanentes",                       2 => ["Élixirs", [1 => "Élixirs de bataille", 2 => "Élixirs du gardien"]],
                 1 => "Potions",                     4 => "Parchemins",              7 => "Bandages",                0 => "Consommables",            3 => "Flacons",                 5 => "Nourriture et boissons",
                 8 => "Autre (Consommables)"
            )),
            16 => array("Glyphes", array(
                 7 => "Glyphes de chaman",           3 => "Glyphes de chasseur",     6 => "Glyphes de chevalier de la mort",                         9 => "Glyphes de démoniste",   11 => "Glyphes de druide",
                 1 => "Glyphes de guerrier",         8 => "Glyphes de mage",         2 => "Glyphes de paladin",      5 => "Glyphes de prêtre",       4 => "Glyphes de voleur"
            )),
             7 => array("Artisanat", array(
                14 => "Enchantements d'armure",      5 => "Tissu",                   3 => "Appareils",              10 => "Élémentaire",            12 => "Enchantement",            2 => "Explosifs",
                 9 => "Herbes",                      4 => "Joaillerie",              6 => "Cuir",                   13 => "Matériaux",               8 => "Viande",                  7 => "Métal et pierre",
                 1 => "Éléments",                   15 => "Enchantements d'arme",   11 => "Autre (Artisanat)"
             )),
             6 => ["Projectiles", [                  2 => "Flèches",                 3 => "Balles"  ]],
            11 => ["Carquois",    [                  2 => "Carquois",                3 => "Gibernes"]],
             9 => array("Recettes", array(
                 0 => "Livres",                      6 => "Recettes d'alchimie",     4 => "Plans de forge",          5 => "Recettes de cuisine",     8 => "Formules d'enchantement", 3 => "Schémas d'ingénierie",
                 7 => "Livres de premiers soins",    9 => "Livres de pêche",        11 => "Techniques de calligraphie",10 => "Dessins de joaillerie",1 => "Patrons de travail du cuir",12 => "Guides de Minage",
                 2 => "Patrons de couture"
            )),
             3 => array("Gemmes", array(
                 6 => "Méta-gemmes",                 0 => "Gemmes rouges",           1 => "Gemmes bleues",           2 => "Gemmes jaunes",           3 => "Gemmes violettes",        4 => "Gemmes vertes",
                 5 => "Gemmes oranges",              8 => "Gemmes prismatiques",     7 => "Gemmes simples"
            )),
            15 => array("Divers", array(
                -2 => "Marques d'armure",            3 => "Évènement",               0 => "Camelote",                1 => "Composants",              5 => "Montures",               -7 => "Montures volantes",
                 2 => "Compagnons",                  4 => "Autre (Divers)"
            )),
            10 => "Monnaies",
            12 => "Quête",
            13 => "Clés",
        ),
        'statType'      => array(
            "Mana",
            "Vie",
            null,
            "Agilité",
            "Force",
            "Intelligence",
            "Esprit",
            "Endurance",
            null, null, null, null,
            "Augmente le score de défense de %d.",
            "Augmente de %d le score d'esquive.",
            "Augmente de %d le score de parade.",
            "Augmente de %d le score de blocage.",
            "Augmente de %d le score de toucher en mêlée. ",
            "Augmente de %d le score de toucher à distance.",
            "Augmente de %d le score de toucher des sorts.",
            "Augmente de %d le score de coup critique en mêlée.",
            "Augmente de %d le score de coup critique à distance.",
            "Augmente de %d le score de coup critique des sorts.",
            "Augmente de %d le score d'évitement des coups en mêlée.",
            "Augmente de %d le score d'évitement des coups à distance.",
            "Augmente de %d le score d'évitement des coups des sorts.",
            "Augmente de %d le score d'évitement des critiques en mêlée.",
            "Augmente de %d le score d'évitement des critiques à distance.",
            "Augmente de %d le score d'évitement des critiques des sorts.",
            "Augmente de %d le score de hâte en mêlée.",
            "Augmente de %d le score de hâte à distance.",
            "Augmente de %d le score de hâte des sorts.",
            "Augmente votre score de toucher de %d.",
            "Augmente votre score de coup critique de %d.",
            "Augmente de %d le score d'évitement des coups.",
            "Augmente de %d le score d'évitement des critiques.",
            "Augmente votre score de résilience de %d.",
            "Augmente votre score de hâte de %d.",
            "Augmente votre score d'expertise de +%d.",
            "Augmente la puissance d'attaque de %d.",
            "Augmente la puissance d'attaque à distance de %d.",
            "Augmente de %d la puissance d'attaque pour les formes de félin, d'ours, d'ours redoutable et de sélénien uniquement.",
            "Augmente les dégâts des sorts et des effets magiques d'un maximum de %d.",
            "Augmente les soins des sorts et des effets magiques d'un maximum de %d.",
            "Rend %d points de mana toutes les 5 secondes.",
            "Augmente de %d votre score de pénétration d'armure.",
            "Augmente la puissance des sorts de %d.",
            "Rend %d points de vie toutes les 5 s.",
            "Augmente la pénétration des sorts de %d.",
            "Augmente la valeur de blocage de votre bouclier de %d.",
            "Stat Inutilisée #%d (%d)",
        )
    )
);

?>
