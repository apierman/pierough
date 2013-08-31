define("HOST", "localhost"); // The host you want to connect to.
define("USER", "web_sec"); // The database username.
define("PASSWORD", "themiciomancan"); // The database password. 
define("DATABASE", "pierough"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.
