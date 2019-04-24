CREATE TABLE `weather_data` (
    `id` INT(20) NOT NULL AUTO_INCREMENT ,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `temperature` DOUBLE NOT NULL ,
    `humidity` DOUBLE NOT NULL ,
     `pressure` DOUBLE NOT NULL ,

     PRIMARY KEY (`id`), UNIQUE (`date`)) ENGINE = InnoDB;


CREATE TABLE `acutor_status` ( `status` INT(1) NOT NULL ) ENGINE = InnoDB;

INSERT INTO `acutor_status` VALUE(1);