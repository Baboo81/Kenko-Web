<?php

return [
    'sections' => [
        [
            // SEO
            'meta_title' => 'FAQ | Kenko-Web - Agence web à Waterloo',
            'meta_description' => 'Consultez la FAQ de Kenko-Web pour toutes vos questions sur la création de sites web sur mesure, Laravel, SEO et performance.',
        ],
    ],
    'titles' => [
        'main_Title' =>  "Des questions vous taraudent ?",
    ],
    'kenkoWeb' => [
        [
            'question' => "Quels services propose Kenko-Web ?",
            'answer' => "<strong>Kenko-Web propose un service de création de site web.</strong> La création d'une maquette permet de définir le visuel du site. Cette étape permet de s'accorder sur les souhaits du client et d'établir la charte graphique."
        ],
        [
            'question' => "Puis-je avoir un site sur-mesure ?",
            'answer' => "<strong>Votre webmaster vous propose un site sur-mesure.</strong> Votre site sera conforme à vos attentes, dans la mesure du raisonnable."
        ],
        [
            'question' => "Est-ce qu'une refonte serait possible ?",
            'answer' => "<strong>La refonte de site est possible.</strong> Je travaille sans CMS pour le moment, donc le nouveau site sera développé avec mes technologies habituelles."
        ],
        [
            'question' => "Quelles technologies utilise votre webmaster ?",
            'answer' => "Votre <strong>webmaster</strong> utilise les technologies suivante : Laravel, CSS, HTML, PHP, JavaScript. Pour la création graphique (logo, icônes, illustrations...), Adobe Illustrator est utilisé."
        ],
        [
            'question' => "Est-ce que le devis sera payant ?",
            'answer' => "Le devis est entièrement gratuit."
        ],
        [
            'question' => "Est-ce que le SEO (référencement) sera optimisé ?",
            'answer' => "Oui, un référencement de qualité sera mis en place."
        ],
        [
            'question' => "Quels sont les délais pour la création d'un site web ?",
            'answer' => "Le délai dépend de la complexité du projet et de la réactivité du client.<ul class='text-start my-3'>
                <li>Site vitrine (1 à 5 pages) : 2 à 4 semaines</li>
                <li>Site avec fonctionnalités spécifiques : 4 à 8 semaines</li>
                <li>Site e-commerce : 6 à 12 semaines</li>
                <li>Site sur-mesure : 3 à 6 mois</li>
            </ul>"
        ],
    ],
   'contact' => [
        'title' => "N'hésitez pas à me contacter",
        'illustration' => [
            'src' => '/assets/img/FAQ/contactUs.svg',
            'alt' => "Picto représentant un personnage au téléphone",
        ],
        'methods' => [
            [
                'label' => "Contactez-moi via le formulaire",
                'type' => 'button',
                'action' => '/contact',
                'text' => "Contactez-moi",
            ],
            [
                'label' => "Contactez-moi par email en cliquant sur l'enveloppe ci-dessous",
                'type' => 'email',
                'value' => 'info@kenko-web.be',
                'icon' => [
                    'src' => '/assets/img/FAQ/email.svg',
                    'alt' => 'Icône email',
                    'height' => '10rem',
                ],
            ],
            [
                'label' => "Contactez-moi par téléphone",
                'type' => 'phone',
                'value' => '0470 / 35.05.87',
                'icon' => [
                    'src' => '/assets/img/FAQ/telephone.svg',
                    'alt' => 'Icône téléphone',
                    'height' => '5rem',
                ],
            ],
        ],
    ],
];
