<?php
/*
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

The example below shows how to use some of the elements in $_SERVER
*/

#Returns the filename of the currently executing script
echo "PHP SELF : ",$_SERVER['PHP_SELF'],"</br>";
#Returns the name of the host server 
echo "PHP SERVER NAME : ",$_SERVER['SERVER_NAME'],"</br>";
#Returns the Host header from the current request
echo "HTTP HOST : ",$_SERVER['HTTP_HOST'],"</br>";
/*
The user agent string is a text that the browsers themselves 
send to the webserver to identify themselves, so that websites 
can send different content based on the browser or based on 
browser compatibility.
*/
echo "HTTP USER AGENT : ",$_SERVER['HTTP_USER_AGENT'],"</br>";
#Returns the path of the current script
echo "SCRIPT NAME : ",$_SERVER['SCRIPT_NAME'],"</br>";
#Returns the version of the Common Gateway Interface (CGI) the server is using
echo "GATEWAY INTERFACE : ",$_SERVER['GATEWAY_INTERFACE'],"</br>";
#Returns the IP address of the host server
echo "SERVER ADDRESS : ",$_SERVER['SERVER_ADDR'],"</br>";
#Returns the server identification string (such as Apache/2.2.24)
echo "SERVER SOFTWARE : ",$_SERVER['SERVER_SOFTWARE'],"</br>";
#Returns the name and revision of the information protocol (such as HTTP/1.1)
echo "SERVER PROTOCOL : ",$_SERVER['SERVER_PROTOCOL'],"</br>";
#Returns the request method used to access the page (such as POST or GET)
echo "REQUEST METHOD : ",$_SERVER['REQUEST_METHOD'],"</br>";
#Returns the timestamp of the start of the request (such as 1377687496)
echo "REQUEST TIME : ",$_SERVER['REQUEST_TIME'],"</br>";
#Returns the query string if the page is accessed via a query string
echo "QUERY STRING : ",$_SERVER['QUERY_STRING'],"</br>";
#Returns the file system based path to the current script
echo "PATH TO THE SCRIPT : ",$_SERVER['PATH_TRANSLATED'],"</br>";
#Returns the URI of the current page
echo "SCRIPT URI : ",$_SERVER['SCRIPT_URI'],"</br>";

/*
Returns the value given to the SERVER_ADMIN directive
in the web server configuration file (if your script runs on a virtual host,
it will be the value defined for that virtual host)
*/
echo "SERVER ADMIN : ",$_SERVER['SERVER_ADMIN'],"</br>";

#Returns the IP address from where the user is viewing the current page
echo "REMOTE ADDRESS : ",$_SERVER['REMOTE_ADDR'],"</br>";
#Returns the Host name from where the user is viewing the current page
echo "REMOTE HOSTNAME : ",$_SERVER['REMOTE_HOST'],"</br>";
#Returns the port being used on the user's machine to communicate with the web server
echo "REMOTE PORT : ",$_SERVER['REMOTE_PORT'],"</br>";
#Returns the absolute pathname of the currently executing script
echo "SCRIPT FILENAME : ",$_SERVER['SCRIPT_FILENAME'],"</br>";
#Is the script queried through a secure HTTP protocol
echo "IS HTTPS USED? : ",$_SERVER['HTTPS'],"</br>";
#Returns the complete URL of the page from which the current page was called
echo "HTTP REFERER : ",$_SERVER['HTTP_REFERER'],"</br>";
#Returns the Accept header from the current request
echo "HTTP ACCEPT : ", $_SERVER['HTTP_ACCEPT'],"</br>";
#Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
echo "HTTP ACCEPT CHARSET : ",$_SERVER['HTTP_ACCEPT_CHARSET'],"</br>";
?>