'use strict';
var grid = document.getElementsByClassName('iso-grid');
var iso;

var loaded = new imagesLoaded(grid[0], function() {
	iso = new Isotope(grid[0], {
		'itemSelector': '.grid-item',
		'layoutMode': 'masonry'
	});

	grid[0].classList.remove('hidden');
});
