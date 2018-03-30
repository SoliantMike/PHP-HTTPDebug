PHP-HTTPDebug
===========
I needed a way to inspect HTTP requests being sent from an application. This PHP script simply
echos http information including the Method being used, headers being sent, and data contents.

Works well with FileMaker Pro when using cURL functions to set headers and specify method
and data payload, including files from container data.

If you set the Content-Type header to "application/json" it will attempt to format the JSON
that is being sent and display it inline as well, allowing you to inspect what was sent.

Just host the "ping.php" file on a server that is running PHP and point your application to it.

Suitable to host on a FileMaker Server that has PHP enabled, to be able to point to and debug 
"Insert from URL" script steps using cURL options.

