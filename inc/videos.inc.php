<div id="content">
	<div class="center">			
		<div class="col-w100" id="main-content-wrapper" style="background-color: #1b1b1b;">
			<div class="main-content-position">
				<div class="video-container">
					<?php
						if(array_key_exists('media', $_GET))
						{
							if(!isValidViewable($_GET['media'], 'video'))
							{
								echo 'Sorry, this file could not be found.';
							}
							else
							{
								$videoUrl = file_get_contents('videos/' . $_GET['media'] . '.txt');
								echo '<iframe width="800" height="450" src="' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';
							}
						}
						else
						{
							$videoUrl = file_get_contents('videos/welcome.txt');
							echo '<iframe width="800" height="450" src="' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';
						}
					?>
				</div>
			</div>
		</div>
		<div class="col-w100">
			<table class="second-menu">
				<th class="pad-header" colspan="4">VIDEO FROM THE EVENT</th>
				<tr>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
				</tr>
			</table>
		</div>	
		<div class="col-w100">
			<table class="third-menu" >
			<th class="pad-header" colspan="1">VIDEO ARCHIVE</th>
				<tr>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
				</tr>
				<tr>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
				</tr>
				<tr>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
				</tr>
				<tr>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
				</tr>
				<tr>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
					<td><a href="#"><img src="http://placehold.it/350x200" /></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>