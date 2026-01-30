<?php

return [
    'sections' => [
        [
            // SEO
            'meta_title' => 'Qui suis-je ? – Kenko-Web, agence web à Waterloo',
            'meta_description' => 'Découvrez Kenko-Web, votre agence web à Waterloo spécialisée dans la création de sites internet et le développement digital sur mesure.',
            'title' => "Qui suis-je ?",
            'sub_title' => "Mes passions ...",
            'items' => [
                [
                    'label' => "L'informatique",
                    'img' => "assets/img/quiSuisJe/informatique.svg",
                    'alt' => "Picto représentant un ordinateur",
                    'max_width' => "120px"
                ],
                [
                    'label' => "Le design",
                    'img' => "assets/img/quiSuisJe/design.svg",
                    'alt' => "Picto représentant l'outil plume dans illustrator",
                    'max_width' => "120px"
                ],
                [
                    'label' => "La photo",
                    'img' => "assets/img/quiSuisJe/photo.svg",
                    'alt' => "Picto représentant un appareil photo",
                    'max_width' => "139px"
                ],
                [
                    'label' => "La communication",
                    'img' => "assets/img/quiSuisJe/communication.svg",
                    'alt' => "Picto représentant un personnage relié à d'autres personnes",
                    'max_width' => "106px"
                ],
            ],
        ],
        [
            'sub_title' => "... résumées en pictos ",
            'items' => [
                [
                    'label' => "La programmation",
                    'img' => "assets/img/quiSuisJe/santé.svg",
                    'alt' => "Picto représentant la santé",
                    'max_width' => "120px"
                ],
                [
                    'label' => "Le web",
                    'img' => "assets/img/quiSuisJe/reiki.svg",
                    'alt' => "Picto représentant le Reiki",
                    'max_width' => "136px"
                ],
                [
                    'label' => "La cyber-sécurité",
                    'img' => "assets/img/quiSuisJe/aroma.svg",
                    'alt' => "Picto représentant l'aromathérapie",
                    'max_width' => "73px"
                ],
                [
                    'label' => "Les technologies numériques",
                    'img' => "assets/img/quiSuisJe/coaching.svg",
                    'alt' => "Picto représentant le coaching",
                    'max_width' => "106px"
                ],
            ],
        ],
    ],
    'routeSection' => [
        'title' => "Mon parcours en quelques mots",
        'image' => [
            'src' => "assets/img/quiSuisJe/parcours.svg",
            'alt' => "Picto représentant un personnage montant des escaliers",
            'height' => "30rem",
        ],
        'paragraphs' => [
            "Depuis l'âge de 12 ans, je suis fascinée par le monde de l'informatique sous toutes ses formes : la programmation, la cybersécurité, le développement web et toutes les technologies qui façonnent notre univers numérique. ",
            "Cette passion m'a naturellement conduite vers le <strong>développement web</strong>, où je peux allier créativité et rigueur technique pour créer des expériences en ligne sur mesure, sécurisées et performantes. Mon objectif est de transformer des idées en projets concrets et innovants, tout en partageant ma passion pour le numérique.",
            "Aujourd'hui, je continue à explorer chaque facette du web et de l'informatique, en expérimentant de nouvelles technologies et en perfectionnant mes compétences pour offrir des solutions digitales uniques et adaptées à chaque projet.",
            "Pour visiter mon portfolio, vous pouvez cliquer sur le bouton ci-dessous :"
        ],
        'button' => [
            'text' => "Portfolio",
            'url' => "https://portfolio.kenko-web.be",
        ],
    ],
];
