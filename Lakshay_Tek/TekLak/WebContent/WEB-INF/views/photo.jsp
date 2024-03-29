<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Road Recovery</title>
<script>

        // Put event listeners into place
        window.addEventListener("DOMContentLoaded", function () {
            // Grab elements, create settings, etc.
            var canvas = document.getElementById("canvas"),
                    context = canvas.getContext("2d"),
                    video = document.getElementById("video"),
                    videoObj = {"video": true},
            errBack = function (error) {
                console.log("Video capture error: ", error.code);
            };

            // Put video listeners into place
            if (navigator.getUserMedia) { // Standard
                navigator.getUserMedia(videoObj, function (stream) {
                    video.src = stream;
                    video.play();
                }, errBack);
            } else if (navigator.webkitGetUserMedia) { // WebKit-prefixed
                navigator.webkitGetUserMedia(videoObj, function (stream) {
                    video.src = window.webkitURL.createObjectURL(stream);
                    video.play();
                }, errBack);
            } else if (navigator.mozGetUserMedia) { // WebKit-prefixed
                navigator.mozGetUserMedia(videoObj, function (stream) {
                    video.src = window.URL.createObjectURL(stream);
                    video.play();
                }, errBack);
            }

            // Trigger photo take
            document.getElementById("snap").addEventListener("click", function () {
                context.drawImage(video, 0, 0, 213, 160);
                document.getElementById('canvasImg').src = canvas.toDataURL("image/png");

//                    document.getElementById('video').style.display = "none";  // hide the live image video portin after click on take picture
            });



        }, false);

    </script>
</head>
<body>
<h2>Welcome To Road Recovery System</h2>
<video id="video" width="213" height="160" autoplay></video>
    <button id="snap">Capture Photo</button>

    
        <canvas id="canvas" width="213" height="160"  name="ImageFile1" style="display: none;"></canvas>

        <img id="canvasImg" name="ImageFile"><img>
        <input type="reset" value="Reset"/>
        <input type="submit" value="Submit"/>

    </form>
</body>
</html>