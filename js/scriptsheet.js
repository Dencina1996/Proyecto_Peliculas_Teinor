/* DOCUMENT READY -> TRIGGERS */

$(document).ready(function() {
	$('.add-button').click(addButtonVisibility);
	$('#year').attr('max', new Date().getFullYear()+3); // Max available year to insert equals current year +3 (In case of future movies)
	$('.order-button').click(orderFilms);
	$('.search-bar').on('input', filterFilms);
});

/* FUNCTIONS */

function createErrorMessage(text) { 
// Shows errors in the body
	var error = document.createElement('h3');
	$(error).attr('class', 'error').text(text);
	$('.film-list').append(error);
}

function addButtonVisibility() { 
// Makes the 'add-film' form visible and changes the opacity of the film list 
	if ($('.add-film').css('visibility') === 'hidden') {
		$('.add-film').css('visibility', 'visible');
		$('.film-list').css('opacity', '0.5');
	} else {
		$('.add-film').css('visibility', 'hidden');
		$('.film-list').css('opacity', '1');
	}
}

function compareYearAscendant(a,b) {
// Orders an array by its second parameter in ascendant order
	if (a[1] === b[1]) {
		return 0;
	} else {
		return (a[1] < b[1]) ? -1 : 1;
	}
}

function compareYearDescendant(a,b) {
// Orders an array by its second parameter in descendant order
	if (a[1] === b[1]) {
		return 0;
	} else {
		return (a[1] > b[1]) ? -1 : 1;
	}
}

function createFilmDiv(filmTitle,filmYear,filmCover) { 
// Creates a film container and sets its values through the call arguments
	// Elements creation
	var film = document.createElement('div');
	var title = document.createElement('h3');
	var year = document.createElement('h3');
	var cover = document.createElement('img');

	// Attributes and appends 
	$(film).attr('class', 'film-data').appendTo('.film-list'); // Div
	$(title).addClass('film-title').text(filmTitle).appendTo('.film-data:last'); 
	$(year).addClass('film-year').text(filmYear).appendTo('.film-data:last');
	$(cover).attr({
		class: 'film-image',
		src: filmCover
	}).appendTo('.film-data:last');
}

function orderFilms() {
// Gets all films data into an array and creates containers in the desired order (by year)
	var films = []; // Films Array

	$('.film-data').each(function(index, el) { // Push film data into "films" array and remove the div
		film = [];
		film.push($(this).children('.film-title').text());
		film.push($(this).children('.film-year').text());
		film.push($(this).children('.film-image').attr('src'));
		films.push(film);
		$(this).remove();
	});

	if ($(this).children('label').text() == '🔼') {
		$(this).children('label').text('🔽');
		films.sort(compareYearAscendant);
		$.each(films, function(index, val) {
			createFilmDiv(val[0],val[1],val[2]);
		});
	} else {
		$(this).children('label').text('🔼');
		films.sort(compareYearDescendant);
		$.each(films, function(index, val) {	
			createFilmDiv(val[0],val[1],val[2]);
		});
	}
}

function filterFilms() {
// Removes all film containers and errors. Then, makes an AJAX call and creates film containers with the data requested
	$('.film-data').remove();
	$('.error').remove();
	$.ajax({
		url: 'filter.php',
		type: 'POST',
		datatype: 'json',
		data: {	search: $('.search-bar').val()},
	})
	.done(function(data) {
		var obj = $.parseJSON(data);
		$.each(obj, function(index, val) {
			if (val.title == undefined) {
				createErrorMessage(val);
			} else {
				createFilmDiv(val.title, val.year, 'covers/'+val.cover);
			}
		});
	})
	.fail(function() {
		createErrorMessage('Error 404: El recurso no está disponible.');
	})
}

