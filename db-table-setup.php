<?php

add_action( 'init', 'initiate_table_mother_board');
add_action( 'init', 'initiate_table_vdoCard_brand');
add_action( 'init', 'initiate_table_storage');
add_action( 'init', 'initiate_table_vdoCard');
add_action( 'init', 'initiate_table_memory');
add_action( 'init', 'initiate_table_cpu');

function initiate_table_cpu() {

   global $wpdb;
   $table_name = $wpdb->prefix. "wc_cpu";
   global $charset_collate;
   $charset_collate = $wpdb->get_charset_collate();
   global $db_version;

   if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
   {   $create_sql = "CREATE TABLE " . $table_name . " (
           id INT(11) NOT NULL auto_increment,
           name VARCHAR(255) NOT NULL ,
           watt INT(11) NOT NULL,
           PRIMARY KEY (id))$charset_collate;";
   }
   require_once(ABSPATH . "wp-admin/includes/upgrade.php");
   dbDelta( $create_sql );

   //register the new table with the wpdb object
   if (!isset($wpdb->ratings_fansub))
   {
       $wpdb->ratings_fansub = $table_name;
       //add the shortcut so you can use $wpdb->stats
       $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
   }

}

function initiate_table_memory() {

   global $wpdb;
   $table_name = $wpdb->prefix. "wc_memory";
   global $charset_collate;
   $charset_collate = $wpdb->get_charset_collate();
   global $db_version;

   if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
   {   $create_sql = "CREATE TABLE " . $table_name . " (
           id INT(11) NOT NULL auto_increment,
           ram VARCHAR(255) NOT NULL ,
           watt INT(11) NOT NULL,
           PRIMARY KEY (id))$charset_collate;";
   }
   require_once(ABSPATH . "wp-admin/includes/upgrade.php");
   dbDelta( $create_sql );

   //register the new table with the wpdb object
   if (!isset($wpdb->ratings_fansub))
   {
       $wpdb->ratings_fansub = $table_name;
       //add the shortcut so you can use $wpdb->stats
       $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
   }

}

function initiate_table_vdoCard() {

   global $wpdb;
   $table_name = $wpdb->prefix. "wc_vdo_card";
   global $charset_collate;
   $charset_collate = $wpdb->get_charset_collate();
   global $db_version;

   if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
   {   $create_sql = "CREATE TABLE " . $table_name . " (
           id INT(11) NOT NULL auto_increment,
           vdo-card VARCHAR(255) NOT NULL ,
           PRIMARY KEY (id))$charset_collate;";
   }
   require_once(ABSPATH . "wp-admin/includes/upgrade.php");
   dbDelta( $create_sql );

   //register the new table with the wpdb object
   if (!isset($wpdb->ratings_fansub))
   {
       $wpdb->ratings_fansub = $table_name;
       //add the shortcut so you can use $wpdb->stats
       $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
   }

}


function initiate_table_vdoCard_brand() {

   global $wpdb;
   $table_name = $wpdb->prefix. "wc_vdo_card_brand";
   global $charset_collate;
   $charset_collate = $wpdb->get_charset_collate();
   global $db_version;

   if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
   {   $create_sql = "CREATE TABLE " . $table_name . " (
           id INT(11) NOT NULL auto_increment,
           vdo_card_id INT(11) NOT NULL,
           brand_name VARCHAR(255) NOT NULL,
           watt INT(11) NOT NULL,
           PRIMARY KEY (id))$charset_collate;";
   }
   require_once(ABSPATH . "wp-admin/includes/upgrade.php");
   dbDelta( $create_sql );

   //register the new table with the wpdb object
   if (!isset($wpdb->ratings_fansub))
   {
       $wpdb->ratings_fansub = $table_name;
       //add the shortcut so you can use $wpdb->stats
       $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
   }

}


function initiate_table_storage() {

   global $wpdb;
   $table_name = $wpdb->prefix. "wc_storage";
   global $charset_collate;
   $charset_collate = $wpdb->get_charset_collate();
   global $db_version;

   if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
   {   $create_sql = "CREATE TABLE " . $table_name . " (
           id INT(11) NOT NULL auto_increment,
           storage VARCHAR(255) NOT NULL ,
           watt INT(11) NOT NULL,
           PRIMARY KEY (id))$charset_collate;";
   }
   require_once(ABSPATH . "wp-admin/includes/upgrade.php");
   dbDelta( $create_sql );

   //register the new table with the wpdb object
   if (!isset($wpdb->ratings_fansub))
   {
       $wpdb->ratings_fansub = $table_name;
       //add the shortcut so you can use $wpdb->stats
       $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
   }

}

function initiate_table_mother_board() {

   global $wpdb;
   $table_name = $wpdb->prefix. "wc_mother_board";
   global $charset_collate;
   $charset_collate = $wpdb->get_charset_collate();
   global $db_version;

   if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !=  $table_name)
   {   $create_sql = "CREATE TABLE " . $table_name . " (
           id INT(11) NOT NULL auto_increment,
           mother_board VARCHAR(255) NOT NULL ,
           watt INT(11) NOT NULL,
           PRIMARY KEY (id))$charset_collate;";
   }
   require_once(ABSPATH . "wp-admin/includes/upgrade.php");
   dbDelta( $create_sql );

   //register the new table with the wpdb object
   if (!isset($wpdb->ratings_fansub))
   {
       $wpdb->ratings_fansub = $table_name;
       //add the shortcut so you can use $wpdb->stats
       $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
   }

}







?>
