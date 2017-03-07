<?php 

if(!defined("_BASE_URL")) die("Ressource interdite !");
define("PAGE_LANG", 'fr');
define("PAGE_CHARSET", 'utf-8');


define("DEFAULT_MODULE", 'logement');
define("DEFAULT_ACTION", 'index');
define("PAGINATION_LOGEMENT", 3);
define("PAGINATION_COMMENTS", 4);
define("PAGINATION_USERS", 4);


// Config user
define("USER_SCHOOL", 2);
define("USER_ADMIN", 1);
define("USER_LAMBDA", 0);

define("SALT", "romzeer!");

define("ENV", "DEV");

define("MAIL_EXPEDITEUR", "romain.peyret1@gmail.com");
define("NOM_EXPEDITEUR", "Mon super blog");