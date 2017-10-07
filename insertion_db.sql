INSERT INTO `Roles` (`id_role`, `nom_role`) VALUES ('1', 'Administrateur');
INSERT INTO `Roles` (`id_role`, `nom_role`) VALUES ('2', 'Utilisateur');
INSERT INTO `Roles` (`id_role`, `nom_role`) VALUES ('3', 'Visiteur');

INSERT INTO `Users` (`id_user`, `id_role`, `mail`, `mdp`, `nom`, `prenom`, `statut`, `adresse`) VALUES (NULL, '1', 'admin@admin.admin', 'admin', 'admin', NULL, NULL, NULL);
INSERT INTO `Users` (`id_user`, `id_role`, `mail`, `mdp`, `nom`, `prenom`, `statut`, `adresse`) VALUES (NULL, '2', 'user@user.user', 'user', 'user', NULL, NULL, NULL);
INSERT INTO `Users` (`id_user`, `id_role`, `mail`, `mdp`, `nom`, `prenom`, `statut`, `adresse`) VALUES (NULL, '3', 'visiteur@visiteur.visiteur', 'visiteur', 'visiteur', NULL, NULL, NULL);

INSERT INTO `Visibilite` (`id_visibilite`, `nom_visibilite`) VALUES ('1', 'Publique');
INSERT INTO `Visibilite` (`id_visibilite`, `nom_visibilite`) VALUES ('2', 'Privee');
INSERT INTO `Visibilite` (`id_visibilite`, `nom_visibilite`) VALUES ('3', 'Confidentielle');

INSERT INTO `Categories` (`id_cat`, `nom_cat`) VALUES ('0', 'Indéfini');

INSERT INTO `Objets` (`id_objet`, `nom_objet`, `desc_objet`, `prix_base`, `prix_res`, `date_limit`, `heure_limit`, `id_cat`, `photo`, `id_vendeur`, `statut`, `id_visibilite`) VALUES (NULL, 'truc', 'joli truc', NULL, NULL, NULL, NULL, '1', NULL, '2', NULL, '1');
INSERT INTO `Objets` (`id_objet`, `nom_objet`, `desc_objet`, `prix_base`, `prix_res`, `date_limit`, `heure_limit`, `id_cat`, `photo`, `id_vendeur`, `statut`, `id_visibilite`) VALUES (NULL, 'bidule', 'bidule chouette', NULL, NULL, NULL, NULL, '1', NULL, '2', NULL, '1');