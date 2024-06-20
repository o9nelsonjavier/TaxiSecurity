CREATE TABLE IF NOT EXISTS viaje (
    id_viaje INT AUTO_INCREMENT PRIMARY KEY,
    pasajero_id INT NOT NULL,
    conductor_id INT NOT NULL,
    hora_inicio DATETIME NOT NULL,
    hora_fin DATETIME NOT NULL
);