<?php

return [
    'sign_in' => 'Se connecter',
    'go_to_login' => 'Aller à la connexion',
    'failed' => 'Aucun compte correspondant à ces identifiants n\'a été trouvé.',

    'forgot_password' => [
        'label' => 'Mot de passe oublié ?',
        'label_help' => 'Entrez votre adresse e-mail pour recevoir des instructions sur la réinitialisation de votre mot de passe.',
        'button' => 'Récupérer le compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialiser et se connecter',
    ],

    'two_factor' => [
        'label' => 'Token à 2 facteurs',
        'label_help' => 'Ce compte nécessite une deuxième couche d\'authentification pour continuer. Veuillez entrer le code généré par votre appareil pour terminer cette connexion.',
        'checkpoint_failed' => 'Le token d\'authentification à 2 facteurs est invalide.',
    ],

    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit comporter au moins 8 caractères et être unique pour ce site.',
    '2fa_must_be_enabled' => 'L\'administrateur a exigé que l\'authentification à deux facteurs soit activée pour votre compte afin d\'utiliser le panneau.',
];
