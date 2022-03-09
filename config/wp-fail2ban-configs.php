<?php
/**
* GridPane wpFail2Ban configuration file
* https://wordpress.org/plugins/wp-fail2ban/
* https://wp-fail2ban.readthedocs.io/en/4.1/introduction.html
*/

define('WP_FAIL2BAN_BLOCK_USER_ENUMERATION', true);
define('WP_FAIL2BAN_BLOCKED_USERS', [ 'admin','Admin','user','User','user1','User1','Administrator','administrator','demo','Demo' ]);
define('WP_FAIL2BAN_LOG_COMMENTS', true);
define('WP_FAIL2BAN_LOG_COMMENTS_EXTRA', 0x00020002 | 0x00020004 | 0x00020010);
define('WP_FAIL2BAN_LOG_PASSWORD_REQUEST', true);
define('WP_FAIL2BAN_LOG_PINGBACKS', true);
define('WP_FAIL2BAN_LOG_SPAM', true);
