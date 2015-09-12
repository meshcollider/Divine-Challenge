CREATE TABLE IF NOT EXISTS `hints` (
 `hint_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing hint_id of each hint, unique index',
 `challenge_id` int (11) NOT NULL COMMENT 'challenge this hint is for',
 `hint_text` TEXT NOT NULL COMMENT 'hint for the challenge',
 `hint_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'is the hint visible',
 PRIMARY KEY (`hint_id`),
 UNIQUE KEY `hint_id` (`hint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
