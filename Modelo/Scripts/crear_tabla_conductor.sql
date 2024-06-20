CREATE TABLE `taxi_security`.`conductor` (
  `id_conductor` INT NOT NULL AUTO_INCREMENT,
  `nombre_conductor` VARCHAR(45) NOT NULL,
  `cedula_conductor` VARCHAR(45) NOT  NULL,
  `correo_conductor` VARCHAR(200) NULL,
  `celular_conductor` VARCHAR(45) NOT NULL,
  `huella_conductor` VARCHAR(45) NOT NULL,
  `pin_conductor` INTEGER NOT NULL,
  `estado_conductor` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`id_conductor`)
);