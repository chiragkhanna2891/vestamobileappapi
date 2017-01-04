UPDATE `classes` SET `id` = 1, `name` = 'cHeadDesc' WHERE (id = 1);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_1` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '1',
			  `oo_className` varchar(255) default 'cHeadDesc',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8mb4;

/*--NEXT--*/

ALTER TABLE `object_query_1` ALTER COLUMN `oo_className` SET DEFAULT 'cHeadDesc';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_1` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8mb4;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_1` (
          `src_id` int(11) NOT NULL DEFAULT '0',
          `dest_id` int(11) NOT NULL DEFAULT '0',
          `type` varchar(50) NOT NULL DEFAULT '',
          `fieldname` varchar(70) NOT NULL DEFAULT '0',
          `index` int(11) unsigned NOT NULL DEFAULT '0',
          `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
          `ownername` varchar(70) NOT NULL DEFAULT '',
          `position` varchar(70) NOT NULL DEFAULT '0',
          PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
          KEY `index` (`index`),
          KEY `src_id` (`src_id`),
          KEY `dest_id` (`dest_id`),
          KEY `fieldname` (`fieldname`),
          KEY `position` (`position`),
          KEY `ownertype` (`ownertype`),
          KEY `type` (`type`),
          KEY `ownername` (`ownername`)
        ) DEFAULT CHARSET=utf8mb4;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_localizedfields`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_localizedfields`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_1` AS SELECT * FROM `object_query_1` JOIN `objects` ON `objects`.`o_id` = `object_query_1`.`oo_id`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_localized_data_1` (
              `ooo_id` int(11) NOT NULL default '0',
              `language` varchar(10) NOT NULL DEFAULT '',
              PRIMARY KEY (`ooo_id`,`language`),
              INDEX `ooo_id` (`ooo_id`),
              INDEX `language` (`language`)
            ) DEFAULT CHARSET=utf8mb4;

/*--NEXT--*/

ALTER TABLE `object_localized_data_1` DROP INDEX `p_index_Info`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_localized_query_1_en` (
                      `ooo_id` int(11) NOT NULL default '0',
                      `language` varchar(10) NOT NULL DEFAULT '',
                      PRIMARY KEY (`ooo_id`,`language`),
                      INDEX `ooo_id` (`ooo_id`),
                      INDEX `language` (`language`)
                    ) DEFAULT CHARSET=utf8mb4;

/*--NEXT--*/

ALTER TABLE `object_localized_query_1_en` DROP INDEX `p_index_Info`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_localized_query_1_en_US` (
                      `ooo_id` int(11) NOT NULL default '0',
                      `language` varchar(10) NOT NULL DEFAULT '',
                      PRIMARY KEY (`ooo_id`,`language`),
                      INDEX `ooo_id` (`ooo_id`),
                      INDEX `language` (`language`)
                    ) DEFAULT CHARSET=utf8mb4;

/*--NEXT--*/

ALTER TABLE `object_localized_query_1_en_US` DROP INDEX `p_index_Info`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_localized_1_en` AS

SELECT `oo_id`,`oo_classId`,`oo_className`,`o_id`,`o_parentId`,`o_type`,`o_key`,`o_path`,`o_index`,`o_published`,`o_creationDate`,`o_modificationDate`,`o_userOwner`,`o_userModification`,`o_classId`,`o_className`,`en`.`ooo_id` as "ooo_id",`en`.`language` as "language",`en`.`Info` as "Info"
FROM `object_query_1`
    JOIN `objects`
        ON (`objects`.`o_id` = `object_query_1`.`oo_id`)LEFT JOIN object_localized_query_1_en as en
    ON( 1
        AND object_query_1.oo_id = en.ooo_id
    );

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_localized_1_en_US` AS

SELECT `oo_id`,`oo_classId`,`oo_className`,`o_id`,`o_parentId`,`o_type`,`o_key`,`o_path`,`o_index`,`o_published`,`o_creationDate`,`o_modificationDate`,`o_userOwner`,`o_userModification`,`o_classId`,`o_className`,`en_US`.`ooo_id` as "ooo_id",`en_US`.`language` as "language",`en_US`.`Info` as "Info"
FROM `object_query_1`
    JOIN `objects`
        ON (`objects`.`o_id` = `object_query_1`.`oo_id`)LEFT JOIN object_localized_query_1_en_US as en_US
    ON( 1
        AND object_query_1.oo_id = en_US.ooo_id
    );

/*--NEXT--*/

