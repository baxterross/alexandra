<?php

function getVideoThumbnail($identifier) {
	return 'http://img.youtube.com/vi/'.$identifier.'/0.jpg';
}
function getVideoUrl($identifier) {
	return 'http://www.youtube.com/embed/'.$identifier;
}

?>
