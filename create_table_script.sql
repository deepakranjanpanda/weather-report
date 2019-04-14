CREATE TABLE `datalog`.`weather_data` (
    `id` INT(20) NOT NULL AUTO_INCREMENT ,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `temperature` DOUBLE NOT NULL ,
    `humidity` DOUBLE NOT NULL ,
     `pressure` DOUBLE NOT NULL ,

     PRIMARY KEY (`id`), UNIQUE (`date`)) ENGINE = InnoDB;