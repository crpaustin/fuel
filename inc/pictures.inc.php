<div id="content">
	<div class="center">			
		<div class="col-w100" id="main-content-wrapper" style="background-color: #1b1b1b;">
			<!--1920x700-->
			<?php
				if(array_key_exists('media', $_GET))
				{
					if(!isValidViewable($_GET['media'], 'picture'))
					{
						echo 'Sorry, this file could not be found.';
					}
					else
					{
						if(file_exists('pictures/' . $_GET['media'] . '.png'))
						{
							echo '<img src="' . ('pictures/' . $_GET['media'] . '.png') . ' alt="' . $_GET['media'] . '" />';
						}
						elseif(file_exists('pictures/' . $_GET['media'] . '.jpg'))
						{
							echo '<img src="' . ('pictures/' . $_GET['media'] . '.jpg') . ' alt="' . $_GET['media'] . '" />';
						}
						elseif(file_exists('pictures/' . $_GET['media'] . '.gif'))
						{
							echo '<img src="' . ('pictures/' . $_GET['media'] . '.gif') . ' alt="' . $_GET['media'] . '" />';
						}
						else
						{
							echo '<img src="pictures/welcome.png" alt="welcome" width="1920" height="700" />';
						}
					}
				}
				else
				{
					echo '<img src="pictures/welcome.png" alt="welcome" width="1920" height="700" />';
				}
			?>
		</div>
		<div class="col-w100">
			<table class="second-menu">
				<th class="pad-header" colspan="4">PICTURES FROM THE EVENT</th>
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
				<th class="pad-header" colspan="1">PICTURE ARCHIVE</th>
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