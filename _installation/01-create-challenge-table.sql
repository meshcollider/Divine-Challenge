CREATE TABLE IF NOT EXISTS `challenges` (
 `challenge_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing challenge_id of each challenge, unique index',
 `challenge_author` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'authors name',
 `challenge_instructions` TEXT NOT NULL COMMENT 'instructions for the challenge',
 `challenge_answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'answer to the challenge',
 `challenge_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'is the challenge active',
 `challenge_dynamic` boolean DEFAULT 'false' COMMENT 'is the answer dynamic',
 PRIMARY KEY (`challenge_id`),
 UNIQUE KEY `challenge_id` (`challenge_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
