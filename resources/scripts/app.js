import domReady from '@roots/sage/client/dom-ready';

// Import Bootstrap
import 'bootstrap';

// Import Slick
import 'slick-carousel/slick/slick.js';

// Import Custom Js
import './common.js'

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
