/**
 * CONCAT tasks configuration
 */

'use strict';

var config = require('../config');

module.exports = {
  sass: {
    src: [
          'theme-description.css',
          'sass/style.css',
          'sass/plugins/owl.carousel.css',
          'sass/plugins/owl.theme.css',
          'sass/zigzag.css'
          ],
    dest: 'sass/style-unprefixed.css'
  }
}