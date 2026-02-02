<?php

return [
    'sections' => [
        [
            //SEO
            'meta_title' => "Contact | Kenko-Web - Agence web à Waterloo",
            'meta_description' => "Contactez Kenko-Web pour la création de sites web sur mesure, Laravel, SEO et performance.",
        ],
    ],
    'title' => "Contactez Kenko Web",
    'illustration' => [
        'src' => "asset/img/contact-illustration.webp",
        'alt' => "Illustration contact Kenko Web",
    ],
    'fields' => [
        [
            'id' => "lastname",
            'label' => "Nom",
            'type' => "text",
            'placeholder' => "Veuillez indiquer votre nom de famille",
            'icon' => "bi-person",
        ],
         [
            'id' => "firstname",
            'label' => "Prénom",
            'type' => "text",
            'placeholder' => "Veuillez indiquer votre prénom",
            'icon' => "bi-person",
        ],
        [
            'id' => "email",
            'label' => "Adresse email",
            'type' => "email",
            'placeholder' => "Veuillez indiquer votre email",
            'icon' => "bi-enveloppe",
        ],
    ],
    'message_field' => [
        'id' => "message",
        'label' => "Message",
        'placeholder' => "Laissez-moi un message",
        'icon' => "bi-chat-dots",
    ],
    'buttons' => [
        'submit' => "Envoyer le message",
        'back' => "Retour à l'accueil",
    ],
];
