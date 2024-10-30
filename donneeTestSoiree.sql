-- Supprimer toutes les données de la table soiree
DELETE FROM soiree;

-- Réinsérer les données de test
INSERT INTO soiree (nom, nbPlaces, lieu, dateSoiree, heureSoiree) VALUES
('Soirée Raclette', 50, 'Chalet des Alpes', '2024-12-15', '19:00'),
('Concert en Plein Air', 200, 'Place du Village', '2024-12-16', '20:30'),
('Bal des Neiges', 150, 'Salle des Fêtes', '2024-12-17', '21:00'),
('Projection de Film', 80, 'Cinéma Montagnard', '2024-12-18', '18:00'),
('Soirée Fondue', 60, 'Chalet Savoyard', '2024-12-19', '19:30'),
('Feu d\'Artifice', 300, 'Lac Gelé', '2024-12-20', '22:00'),
('Spectacle Comique', 100, 'Théâtre de la Station', '2024-12-21', '20:00');