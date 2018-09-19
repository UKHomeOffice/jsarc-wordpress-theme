## ws-core-theme (docker_branch README)

# Running on docker:

To run the website on a docker, run the following command from within the directory:

````
docker-compose up -d
````
Wordpress should be available on port 80 and phpmyadmin on port 8080.

# Front end development setup
Front end source files are stored inside the `/website-content/themes/jsarc/src` folder.

## Installing development dependencies
In terminal, cd into the `/website-content/themes/jsarc/src` folder and run `$ npm install`. 

## Start local dev server 
(watches static files for changes and livereloads)
Run `$ gulp` inside the `themes/jsarc/src/` folder.

## Compile SASS 
Run `$ gulp sassCompile` to compile SASS into the style.css file used by the jsarc theme.  

## Lint CSS
Run `$ npm ` to lint css with stylelint. 


