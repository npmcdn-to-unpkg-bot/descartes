'use strict';
var grid = document.getElementsByClassName('iso-grid');

var iso = new Isotope(grid[0], {
	'itemSelector': '.grid-item',
	'layoutMode': 'masonry'
});

console.log('Results script loaded');
