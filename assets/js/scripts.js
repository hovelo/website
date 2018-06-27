var osm = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}{r}.{ext}', {
	attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
	subdomains: 'abcd',
	minZoom: 0,
	maxZoom: 18,
	ext: 'png'
});

var map = L.map('js-map')
	.setView([50.833877, -0.171479], 12)
	.addLayer(osm);

L.marker([50.833877, -0.171479])
	.addTo(map)
	.bindPopup('<strong>Small Batch</strong>');
