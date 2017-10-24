Author: Suave Bajaj

============ Introduction ============
This project helps web developers to implement the user registration with Google account using PHP at their website project. Also the user information would be stored at the MySQL database.

============ Installation ============
1. Create a database (Database_Name) at phpMyAdmin 
2. Open the User.php file and modify the $dbHost, $dbUsername, $dbPassword, $dbName variables value with your MySQL database credentials.
3. Open the "gpConfig.php" file and  and specify the $appId, $appSecret, and $redirectURL as per your Google Project API credentials. (Refer Documentation)
4. Browse the index.php file in the browser and test the Login with Google+ functionality.

============ Database Table Creation ===========
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;