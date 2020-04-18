======= THIS IS THE README TO USE THIS THEME ========


 * COMMANDS :
 *
 * npm start => gulp
 * npm build => gulp build --prod
 * npm run bundle => gulp bundle --prod
 *
 * gulp clean => reset the dist directory
 * gulp styles => scss to css + check error + minify + sourcemap
 * gulp scripts => es6 to js
 * gulp images => minify images
 * gulp images --prod => minify images to production (send to dist)
 * gulp watch => watch any changes on styles, images or copy and run the changes
 * gulp copy => copy any added files and send to dist
 * gulp dev => gulp clean + gulp (styles, images, copy) + watch
 * gulp build => gulp clean + gulp (styles, images, copy)
 * gulp default = gulp dev
 *
 *
 * DIFFERENCE BETWEEN --save-dev and --save
 *
 * Quand on veut installer un plugin comme jquery ou fullPage js, on peut importer avec la commande --save
 * si on veut installer fullpage js , on peut faire npm install fullpage.js --save 
 * et ca va sauvegarder le plugin quand on va utiliser le theme et si on ferait --save-dev, ça sauvegarderait 
 * le plugin fullpage.js dans notre environnement de dev GULP
 *
 */

======= DESCRIPTION ======

ce theme parent est utilisable pour la création de thème pour des clients sous Wordpress. Il utilise des technologies comme gulp pour utiliser SCSS, ES6.

Tout les fichiers sources se trouve dans src.

polices = src/assets/fonts
images = src/assets/images
javascripts = src/assets/js/**
scss = src/assets/scss/**

======= COMMANDS ========



======== DEVELOPMENT ========

======== PRODUCTION =========






 
