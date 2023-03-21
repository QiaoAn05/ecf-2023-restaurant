-- SQLite

PRAGMA foreign_key = ON;

DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS menus;

CREATE TABLE categories (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(150) NOT NULL UNIQUE
);

INSERT INTO categories (name)
VALUES
    ('Menu'),
    ('Entrée'),
    ('Plat'),
    ('Dessert');

CREATE TABLE menus (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(150) NOT NULL,
    description VARCHAR(50) NOT NULL,
    price INTEGER,
    category_id INTEGER,
    FOREIGN KEY (category_id) REFERENCES types(id)
);


INSERT INTO menus (name, description, price, category_id)
VALUES
    ('Menu du gardian','Entrée + plat', 30, 1),
    ('Menu du manadier', 'Plat + Dessert', 30, 1),
    ('Menu de la Reine', 'Entrée + plat + dessert', 40, 1),
    ('Menu enfant', 'Entrée + plat + dessert', 20, 1),
    ('Gardianne de taureau', 'viande de taureau, vin rouge, oignons, tomates, olives noires, champignons, herbes provençales - Accompagnement: riz de la propriété.', 25, 3),
    ('Pêche du jour', 'poisson en fonction de la pêche du jour, herbe de provence, sauce pesto - Accompagnement: riz de la propriété', 20, 3),
    ('Salade maison', 'salade composée avec les produits de notre jardin', 15, 2),
    ('Mousse au chocolat', 'Mousse au chocolat noir 80% avec chantilly et coulis de fruit rouge', 5, 4);


SELECT c.name AS type, m.name, m.description, m.price
FROM menus m
JOIN categories c ON m.category_id = c.id;