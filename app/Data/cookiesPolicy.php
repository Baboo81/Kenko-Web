<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Politique de cookies Kenko-Web
    |--------------------------------------------------------------------------
    | Contient toutes les informations légales et pédagogiques sur les cookies,
    | le consentement et la philosophie RGPD de Kenko-Web.
    */

    'title' => 'Politique de cookies | Kenko-Web',

    'meta_description' => 'Découvrez la politique de cookies de Kenko-Web et comment nous utilisons les cookies pour améliorer votre expérience.',

    'heading' => 'Politique de cookies',

    'intro' => 'Nous utilisons des cookies pour assurer le fonctionnement du site, améliorer votre expérience et analyser le trafic de manière anonyme.',

    'purpose_intro' => 'Voici comment nous utilisons les cookies :',

    'purposes' => [
        'Assurer le fonctionnement du site et la sécurité des sessions.',
        'Analyser le trafic et les pages visitées de façon anonyme.',
        'Améliorer l’expérience utilisateur sans collecter de données personnelles.',
    ],

    'consent_note' => 'Vous pouvez choisir d’accepter ou refuser les cookies non essentiels. Le refus n’empêche pas l’accès au site.',

    'philosophy_heading' => 'Philosophie Kenko-Web & RGPD',

    'philosophy_points' => [
        'Simple, utile et RGPD-friendly : pas de surtracking.',
        'Tracking uniquement après consentement.',
        'Toutes les données collectées sont anonymisées (IP hashée, aucune donnée personnelle).',
        'Suivi pédagogique : comprendre > accumuler.',
        'Expiration du consentement : 12 mois, renouvelable.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Liste complète des cookies utilisés
    |--------------------------------------------------------------------------
    */
    'cookies_list' => [
        [
            'name' => 'cookies_consent',
            'purpose' => 'Stocke le choix de l’utilisateur (accepter ou refuser les cookies).',
            'category' => 'Nécessaire',
            'duration' => '12 mois'
        ],
        [
            'name' => 'cookies_accepted',
            'purpose' => 'Indique si l’utilisateur a accepté les cookies analytiques/statistiques.',
            'category' => 'Statistiques',
            'duration' => '12 mois'
        ],
        // Ajoute ici d’autres cookies si tu en ajoutes plus tard (fonctionnels, marketing, etc.)
    ],

    /*
    |--------------------------------------------------------------------------
    | Informations RGPD & contact
    |--------------------------------------------------------------------------
    */
    'contact' => 'info@kenko-web.be', // email pour questions RGPD

    /*
    |--------------------------------------------------------------------------
    | Instructions pour l’utilisateur
    |--------------------------------------------------------------------------
    */
    'how_to_change' => 'Vous pouvez modifier votre choix à tout moment en cliquant sur "Paramètres des cookies" ou en effaçant vos cookies via votre navigateur.',

];
