## JSaRC Wordpress Theme

# Running on docker:

To run the website on a docker, run the following command from within the directory:

````
docker-compose up
````
Wordpress should be available on port 80 and phpmyadmin on port 8080.


# Front end development setup
Front end source files are stored inside the `/website-content/themes/jsarc/src` folder.

## Installing development dependencies

Gulp is a required dependency for editing the jsarc theme front end.

### Install Gulp 
https://gulpjs.com/
The JS task runner gulp is used to build the front end dependencies for the JSARC wordpress theme.

Install gulp by running `npm install -g gulp`, then install gulp-cli with `npm install -g gulp-cli@2.0.1`

### Check gulp CLI version
If you already have gulp installed on your machine, you can check your local gulp version by running
`$ gulp -v` in your terminal.

You should see something similar to the output below after running the command above.
```
CLI version 2.0.1
Local version 4.0.0
```
If you have a different version of the CLI to the above you may need to install CLI version 2.0.1 
by running `npm install -g gulp-cli@2.0.1`

### Install all other development dependencies

In terminal, cd into the `/website-content/themes/jsarc/src` folder and run `$ npm install` to install
the remaining dependencies required to build the JSARC theme front end.



# JSARC Theme - Development tasks 

## Start local development server 
(watches static files for changes and livereloads)
Run `$ gulp` inside the `themes/jsarc/src/` folder.

## Compile SASS 
Run `$ gulp sassCompile` to compile SASS into the style.css file used by the jsarc theme.  

## Lint CSS
Run `$ npm stylelint` to lint css with stylelint. 

## Test with webhint.io
To test pages for accessibility and common web performance issues with the webhint.io checker 
run 
```
$ npm run hint yourURL
``` 
Where *'yourURL'* is a url to a page you want to test. For example, 'npm run hint localhost:3000/homepage-test'.

## Releasing 

To push a new build to production use: 

```shell script
drone --server https://drone.acp.homeoffice.gov.uk/ --token <token> deploy UKHomeOffice/jsarc-wordpress-theme <build number> prod
```
