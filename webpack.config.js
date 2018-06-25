var Encore = require('@symfony/webpack-encore');

Encore
  // the project directory where compiled assets will be stored
  .setOutputPath('public/build/')
  // the public path used by the web server to access the previous directory
  .setPublicPath('/build')
  // .addEntry('app', './assets/js/main.js')
  .addEntry('css/app', './assets/scss/app.scss')
  .cleanupOutputBeforeBuild()
  .enableSourceMaps(!Encore.isProduction())
  .enableVueLoader()
  .enableSassLoader();

module.exports = Encore.getWebpackConfig();
