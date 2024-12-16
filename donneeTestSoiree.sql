-- Supprimer toutes les données de la table soiree
DELETE FROM soiree;

-- Réinsérer les données de test avec les nouveaux champs
INSERT INTO soiree (nom, nbPlaces, lieu, dateSoiree, heureSoiree, placeAssise, infoComp, nbPlacesDispo) VALUES
('Soirée Raclette', 50, 'Chalet des Alpes', '2024-12-15', '19:00', 20, 'Dégustation de fromages locaux et vins.', 50),
('Concert en Plein Air', 200, 'Place du Village', '2024-12-16', '20:30', 0, 'Groupe local avec des reprises de chansons classiques.', 200),
('Bal des Neiges', 150, 'Salle des Fêtes', '2024-12-17', '21:00', 50, 'Bal costumé avec dress code blanc.', 150),
('Projection de Film', 80, 'Cinéma Montagnard', '2024-12-18', '18:00', 80, 'Projection du film "Les Alpes en Hiver".', 80),
('Soirée Fondue', 60, 'Chalet Savoyard', '2024-12-19', '19:30', 30, 'Fondue savoyarde avec charcuteries.', 60),
('Feu d\'Artifice', 300, 'Lac Gelé', '2024-12-20', '22:00', 0, 'Spectacle pyrotechnique avec musique.', 300),
('Spectacle Comique', 100, 'Théâtre de la Station', '2024-12-21', '20:00', 100, 'One-man-show par un humoriste renommé.', 100);