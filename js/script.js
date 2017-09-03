/**
 * ownCloud - moe_video
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Julius Chen <julius.j@inwinstack.com>
 * @copyright Julius Chen 2016
 */
	$(document).ready(function ($el,options) {
                //$("#app-navigation li").on("click", function(){
                //    alert($(this).text());
                //});
		$('#hello').click(function () {
			alert('Hello from your script file');
		});
                 $("#videocontent li").click(function() {
                       var videoFile = OC.filePath('moe_video', 'video', '2-2.mp4');
                       var video = document.getElementById('videoID');
                       video.src = videoFile;
                });
	});

