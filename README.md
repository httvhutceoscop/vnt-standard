# vnt-standard
Wordpress standard

Updated latest version of plugins, themes and wordpress

#inlcude plugins:
-

# Information login

Account login: admin / ^CbUyqPSwIuLyp5WDC


#cmd
UPDATE wp_options SET option_value = REPLACE (option_value, 'http://vva.lo', 'http://vav.toilamit.com');

UPDATE wp_posts SET guid = REPLACE (guid, 'http://vva.lo', 'http://vav.toilamit.com');


CREATE DATABASE vananhvo_db CHARACTER SET utf8 COLLATE utf8_general_ci;
For more information, see Database Character Set and Collation in the MySQL Reference Manual.

Note: The following is now considered a better practice (see bikeman868's answer):

CREATE DATABASE mydatabase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

#notice
Set permitsion of wp-content/cache