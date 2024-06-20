CREATE TABLE IF NOT EXISTS viaje (
    id_viaje INT AUTO_INCREMENT PRIMARY KEY,
    pasajero_id INT NOT NULL,
    conductor_id INT NOT NULL,
    hora_inicio DATETIME NOT NULL,
    hora_fin DATETIME NOT NULL,
    FOREIGN KEY (pasajero_id) REFERENCES pasajero(id_pasajero),
    FOREIGN KEY (conductor_id) REFERENCES conductor(id_conductor)
);