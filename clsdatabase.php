<?

define("MYHOST","localhost");
define("MYSQL_USER", "root");
define("PASSWORD", "");
define("MYSQL_DB","todolist");


class database
{
function database()
{
date_default_timezone_set('Asia/Kolkata');
mysql_connect(MYHOST,MYSQL_USER,PASSWORD)or die(mysql_error());
mysql_select_db(MYSQL_DB) or die(mysql_error());
}
}
?>
