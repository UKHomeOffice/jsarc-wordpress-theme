## ws-core-theme


# Dev notes:

To fix 404 error issue when changing the permalink settings in Wordpress when using MAMP with Nginx server

Add  Following line:
````
try_files        $uri $uri/ /index.php?$args;
````
Just after:
````
index            index.html index.php;
````
Into:
````
/Applications/MAMP/conf/nginx/nginx.conf
````

