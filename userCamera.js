(function(){
	video = document.getElementById('video') ;
	canvas = document.getElementById('canvas') ;
	context = canvas.getContext('2d') ;
	
	// photo is used so that the image can be obtained on the canvas and we can work on it.
	photo = document.getElementById('photo') ;
	
	vendorURL = window.URL ||
		    window.webkitURL ;
	
	//for compatibility with all browsers
	navigator.getMedia = navigator.getUserMedia ||
			     navigator.webkitGetUserMedia ||
			     navigator.mozGetUserMedia ||
			     navigator.msGetUserMedia ;
	//for getting image
	navigator.getMedia({
		video:true,
		audio:false
	}, function(stream) {
		video.srcObject = stream ;
		video.play() ;
	}, function(error){
		//error.code
	});

	//for capturing image 
	document.getElementById('cap-btn').addEventListener('click', function(){
		context.drawImage(video, 0, 0, 400, 300)
		
		//set image source as the snap from camera
		photo.setAttribute('src', canvas.toDataURL('image'))
	});
})();
