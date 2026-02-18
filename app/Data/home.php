<?php

return [
    'home' => [
        'banner' => "Agence web spécialisée en création de sites internet et en développement web",
    ],
    'purposes' => [
        'main_Title' => "Ce que vous propose votre agence web, Kenko-Web",
        'article1' => [
            'sub_Title' => "Un accompagnement de qualité",
            'txt' => "Je suis à votre écoute et je vous conseille tout au long de la vie du site",
            'img' => "/assets/img/pictos/accompagnement.svg",
        ],
        'article2' => [
            'sub_Title' => "La liberté de choix",
            'txt' => "Je reste disponible pour assurer les mises à jour et évolutions selon vos besoins.",
            'img' => "/assets/img/pictos/liberté.svg",
        ],
        'article3' => [
            'sub_Title' => "Un site sur-mesure",
            'txt' => "Je crée un site qui vous correspond",
            'img' => "/assets/img/pictos/surMesure.svg",
        ],
    ],
    'offers' => [
    'main_Title' => "Les offres personnalisables sur devis",
    'cards' => [
        [
            'title' => "Site simple",
            'price' => "Á partir de 800€",
            'img' => "/assets/img/cards/siteSimple.webp",
            'alt' => "Image représentant une maison au milieu d'un champ",
            'text' => "Un site simple se compose d’une page unique présentant l’essentiel de votre activité : vos prestations, vos tarifs ainsi que vos informations pratiques. Idéal pour démarrer votre présence en ligne, ce format vous permet d’être visible rapidement sur le web tout en bénéficiant d’une optimisation SEO de base pour faciliter votre référencement.",
            'popup' => [
                'title' => "Pourquoi choisir l'offre : site simple ?",
                'intro' => "Vous désirez :",
                'img' => "/assets/img/pictos/imgPopup.svg",
                'items' => [
                    "Un site web qui contient simplement les informations essentielles",
                    "Un référencement de qualité (SEO)",
                    "Un design simple et efficace",
                ],
                'outro' => "Un site simple pourrait être une alternative temporaire avant de passer à un site multi-pages.",
            ],
        ],
        [
            'title' => "Site vitrine",
            'price' => "Á partir de 1600€",
            'img' => "/assets/img/cards/siteVitrine.webp",
            'alt' => "Image représentant une boulangerie",
            'text' => "Le site vitrine comprend généralement entre 5 et 7 pages permettant aux internautes de découvrir votre univers en détail : présentation, services, réalisations, contact, etc. Cette formule est parfaite pour valoriser votre expertise, renforcer votre crédibilité et offrir une expérience complète à vos visiteurs.",
            'popup' => [
                'title' => "Pourquoi choisir l'offre : site vitrine ?",
                'intro' => "Vous désirez :",
                'img' => "/assets/img/pictos/imgPopup.svg",
                'items' => [
                    "Mettre en avant un catalogue de produits, une galerie photos, vos partenaires...",
                    "Présenter votre entreprise grâce à des contenus personnalisés.",
                ],
            ],
        ],
        [
            'title' => "Site XXL",
            'price' => "Á partir de 2500€",
            'img' => "/assets/img/cards/siteXXL2.webp",
            'alt' => "Image représentant des buissons",
            'text' => "Le site XXL s’adresse aux projets plus ambitieux, avec 8 à 12 pages (ou plus) pour présenter votre activité de manière approfondie. Il permet de développer chaque aspect de votre offre, d’intégrer des fonctionnalités avancées et de proposer un parcours utilisateur riche et structuré.",
            'popup' => [
                'title' => "Pourquoi choisir l'offre : site XXL ?",
                'intro' => "Cette option est adaptée si :",
                'img' => "/assets/img/pictos/imgPopup.svg",
                'items' => [
                    "Vous proposez de nombreuses activités ou services à présenter.",
                    "Vous souhaitez intégrer une boutique en ligne performante.",
                    "Vous évoluez dans un marché concurrentiel et visez un référencement avancé.",
                    ],
                ],
            ],
        ],
    ],
     'skills' => [
        'main_Title' => "Les atouts de votre site",
        'img_content' => "/assets/img/pictos/atouts.svg",
        'alt' => "Picto représentant deux personnages tenant un panneau",
        'article1' => [
            'img' => "/assets/img/pictos/work.svg",
            'text' => "Mettre en avant et expliquez votre activité",
        ],
        'article2' => [
            'img' => "/assets/img/pictos/partenaires.svg",
            'text' => "Présentez vos partenaires",
        ],
        'article3' => [
            'img' => "/assets/img/pictos/localiser.svg",
            'text' => "Donnez les informations pratiques de votre entreprise",
        ],
    ],
    'timeline' => [
        'main_Title' => "Les étapes de la création de votre site web",
        'steps' => [
            [
                'title' => "1. Prise de contact",
                'img' => "/assets/img/frise/rdv.svg",
                'alt' => "Picto représentant deux personnes assises à une table",
                'text' => "Discussion initiale pour comprendre vos besoins et objectifs.",
                'width' => 60,
            ],
            [
                'title' => "2. Devis",
                'img' => "/assets/img/frise/devis.svg",
                'alt' => "Picto représentant un devis papier",
                'text' => "Élaboration d'un devis gratuit détaillé en fonction de votre projet.",
                'width' => 60,
            ],
            [
                'title' => "3. Création de la maquette",
                'img' => "/assets/img/frise/maquette.svg",
                'alt' => "Picto représentant un crayon et une latte",
                'text' => "Conception du design et des wireframes pour visualiser le site.",
                'width' => 60,
            ],
            [
                'title' => "4. Validation de la maquette",
                'img' => "/assets/img/frise/validationMaquette.svg",
                'alt' => "Picto représentant un V en vert",
                'text' => "Ajustements et validation finale du design avant développement.",
                'width' => 70,
            ],
            [
                'title' => "5. Développement du site",
                'img' => "/assets/img/frise/developpement.svg",
                'alt' => "Picto représentant un ordinateur",
                'text' => "Intégration du design et développement des fonctionnalités.",
                'width' => 70,
            ],
            [
                'title' => "6. Hébergement",
                'img' => "/assets/img/frise/hebergement.svg",
                'alt' => "Picto représentant un serveur et un nuage",
                'text' => "Configuration du serveur et mise en place de l'hébergement.",
                'width' => 70,
            ],
            [
                'title' => "7. Mise en ligne",
                'img' => "/assets/img/frise/miseEnLigne.svg",
                'alt' => "Picto représentant une sphère avec les 3 W",
                'text' => "Déploiement du site, tests finaux et suivi post-lancement.",
                'width' => 70,
            ],
            [
                'title' => "8. Suivi durant un mois",
                'img' => "/assets/img/frise/suivi.svg",
                'alt' => "Picto représentant une loupe scrutant un écran d'ordinateur avec un œil à côté",
                'text' => "Corrections des éventuels bugs et ajustements.",
                'width' => 100,
            ],
        ],
    ],
    'maintenance' => [
        'main_Title' => "Service de maintenance",
        'img' => "/assets/img/pictos/maintenance.svg",
        'alt' => "Illustration représentant des personnages qui règlent des engrenages",
        'intro' => "Un site web bien entretenu, c'est un site sécurisé, performant et toujours à jour !<br />Pour éviter les bugs, améliorer le référencement et assurer une expérience fluide à vos visiteurs, je propose un service de maintenance adapté à vos besoins.<br />Je propose des interventions ponctuelles ou au forfait mensuel selon vos besoins.",
        'title' => "Types de maintenance",
        'types' => [
            [
                'category' => "Maintenance technique",
                'items' => [
                    "Corrections de bugs et optimisation des performances",
                    "Sauvegardes régulières",
                    "Surveillance de la sécurité",
                ],
            ],
            [
                'category' => "Maintenance évolutive",
                'items' => [
                    "Ajouts ou modification de pages",
                    "Changement de design ou d'éléments graphiques",
                    "Mise en conformité RGPD (cookies, mentions légales ...)",
                ],
            ],
            [
                'category' => "Mise à jour du contenu",
                'items' => [
                    "Modification de textes, d'images, de photos",
                    "Mise à jour des tarifs et fiches de produits",
                    "Ajout d'articles de blog",
                ],
            ],
        ],
    ],
    'hosting' => [
        'main_Title' => "Hébergement",
        'img' => "/assets/img/pictos/miseEnLigne.svg",
        'alt' => "Illustration représentant un personnage assis sur un serveur",
        'intro' => "Pour vous assurer une tranquilité d'esprit totale, je prends en charge l'hébergement de votre site web.<br />Votre site sera hébergé sur un serveur performant et sécurisé, garantissant un accès rapide et fluide à vos visiteurs.",
        'sections' => [
            [
                'title' => "Gestion du domaine et du certificat SSL",
                'txt' => "Si vous n'avez pas encore de nom de domaine, je peux m'occuper de son achat et de son renouvellement.<br />Le certificat SSL est inclus pour sécuriser les échanges de données sur votre site.",
            ],
            [
                'title' => "Sécurité et maintenance",
                'txt' => "Je veille au bon fonctionnement du serveur, aux mises à jour de sécurité et à la protection contre les cyberattaques.",
            ],
            [
                'title' => "Un forfait adapté à vos besoins",
                'txt' => "Les frais d'hébergement seront intégrés dans un forfait choisi par vos soins. Je peux également proposer une offre personnalisée selon vos besoins spécifiques.",
            ],
        ],

    ],
    'trust' => [
        'title1' => "Ils font confiance à ",
        'title2' => "KENKO-WEB",
        'logos' => [
            //Soins de Soie
            [
                'src' => "/assets/img/logo/soinsDeSoie.svg",
                'alt' => "Logo du site : Soins de soie",
            ],
            //Souffle d'équilibre
            [
                'src' => "/assets/img/logo/souffleDequilibre.svg",
                'alt' => "Logo du site : Souffle d'équilibre",
            ],
            //Jardi Care
            [
                'src' => "/assets/img/logo/jardiCare.svg",
                'alt' => "Logo Jardi : Care"
            ],
            //Imayah
            [
                'src' => "/assets/img/logo/imayah.svg",
                'alt' => "Logo du site : Imayah"
            ],
            //aMME
            [
                'src' => "/assets/img/logo/aMME.svg",
                'alt' => "Logo du site : Fiduciaire aMME"
            ],
        ],
    ],
];
