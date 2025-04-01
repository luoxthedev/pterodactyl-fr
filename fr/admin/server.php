<?php
/**
 * Pterodactyl - Panneau
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * Ce logiciel est sous licence MIT.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Vous tentez de supprimer l\'allocation par défaut de ce serveur mais il n\'y a aucune allocation de secours disponible.',
        'marked_as_failed' => 'Ce serveur a été marqué comme ayant échoué lors d\'une installation précédente. Le statut actuel ne peut pas être modifié dans cet état.',
        'bad_variable' => 'Une erreur de validation s\'est produite avec la variable :name.',
        'daemon_exception' => 'Une exception est survenue lors de la tentative de communication avec le daemon, entraînant une réponse HTTP/:code. Cette exception a été enregistrée. (id de la requête : :request_id)',
        'default_allocation_not_found' => 'L\'allocation par défaut demandée n\'a pas été trouvée dans les allocations de ce serveur.',
    ],
    'alerts' => [
        'startup_changed' => 'La configuration de démarrage de ce serveur a été mise à jour. Si le nid ou l\'œuf de ce serveur a été modifié, une réinstallation va maintenant se produire.',
        'server_deleted' => 'Le serveur a été supprimé avec succès du système.',
        'server_created' => 'Le serveur a été créé avec succès sur le panneau. Veuillez laisser quelques minutes au daemon pour installer complètement ce serveur.',
        'build_updated' => 'Les détails de la configuration de ce serveur ont été mis à jour. Certains changements peuvent nécessiter un redémarrage pour prendre effet.',
        'suspension_toggled' => 'Le statut de suspension du serveur a été modifié à :status.',
        'rebuild_on_boot' => 'Ce serveur a été marqué comme nécessitant une reconstruction du conteneur Docker. Cela se produira au prochain démarrage du serveur.',
        'install_toggled' => 'Le statut d\'installation de ce serveur a été modifié.',
        'server_reinstalled' => 'Ce serveur a été mis en file d\'attente pour une réinstallation qui commence maintenant.',
        'details_updated' => 'Les détails du serveur ont été mis à jour avec succès.',
        'docker_image_updated' => 'L\'image Docker par défaut à utiliser pour ce serveur a été modifiée avec succès. Un redémarrage est nécessaire pour appliquer ce changement.',
        'node_required' => 'Vous devez avoir au moins un nœud configuré avant de pouvoir ajouter un serveur à ce panneau.',
        'transfer_nodes_required' => 'Vous devez avoir au moins deux nœuds configurés avant de pouvoir transférer des serveurs.',
        'transfer_started' => 'Le transfert du serveur a commencé.',
        'transfer_not_viable' => 'Le nœud que vous avez sélectionné n\'a pas l\'espace disque ou la mémoire nécessaires pour accueillir ce serveur.',
    ],
];
