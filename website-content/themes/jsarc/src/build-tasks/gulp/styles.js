import gulp from 'gulp'
import gConfig from '../gulp-config'
import plugins from 'gulp-load-plugins'
const opts = gConfig.pluginOpts
const plugins = pluginLoader(opts.load)
const lintStyles = () =>
  gulp
    .src(gConfig.paths.dist.css)
    .pipe(plugins.stylint(opts.stylint))
    .pipe(plugins.stylint.reporter())
lintStyles.description = `lint style source(${config.paths.dist.css}) using stylint`