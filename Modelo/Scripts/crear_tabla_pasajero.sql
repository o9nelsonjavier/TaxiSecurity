CREATE TABLE `taxi_security`.`pasajero` (
  `id_pasajero` INT NOT NULL AUTO_INCREMENT,
  `nombre_pasajero` VARCHAR(45) NOT NULL,
  `cedula_pasajero` VARCHAR(45) NOT  NULL,
  `correo_pasajero` VARCHAR(200) NULL,
  `celular_pasajero` VARCHAR(45) NOT NULL,
  `huella_pasajero` VARCHAR(45) NOT NULL,
  `pin_pasajero` INTEGER NOT NULL,
  `estado_pasajero` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`id_pasajero`)
);