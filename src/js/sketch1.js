// Only executed our code once the DOM is ready.
	window.onload = function() {

		var canvas = document.getElementById('portada-canvas');

		paper.setup(canvas);

for(var i = 0; i<5; i++){
		var path = new paper.Path();

		path.strokeColor = '#ddd';

		var start = new paper.Point(100+i*2, 100);

		path.moveTo(start);


		path.lineTo(start.add([ i*110, 450 ]));
}
		paper.view.draw();
	}
