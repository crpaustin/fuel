<?php

	function isValidPage($page)
	{
		$validPages = array(
			'home'
			,'events'
			,'ministries'
			,'cafe'
			,'drama'
			,'band'
			,'media'
			,'traffic'
			,'prayer'
			,'videos'
			,'podcasts'
			,'pictures'
			,'contact'
			,'about'
			,'church'
			,'pastors'
		);
		
		if(in_array($page,$validPages) && file_exists('inc/' . $page . '.inc.php'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function isValidViewable($viewable, $type)
	{
		if($type=='video')
		{
			if(file_exists('videos/' . $viewable . '.txt'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		elseif($type=='podcast')
		{
			if(file_exists('podcasts/' . $viewable . '.mp3'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		elseif($type=='picture')
		{
			if(file_exists('pictures/' . $viewable . '.png') or file_exists('pictures/' . $viewable . '.jpg') or file_exists('pictures/' . $viewable . '.gif'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
	function getFileType($file)
	{
		if(file_exists('videos/' . $file . '.txt'))
		{
			return 'video';
		}
		elseif(file_exists('podcasts/' . $file . '.mp3'))
		{
			return 'podcast';
		}
		elseif(file_exists('pictures/' . $file . '.png'))
		{
			return 'picture';
		}
	}
	
	

	function latin_gen($limit=0){
		$latin='
			Lorem ipsum dolor sit amet, mundi populo consectetuer qui eu. Eos ea utinam sensibus. In prompta minimum placerat vim. An amet velit putant mel, sint harum ullamcorper cu ius. Eum modo alterum concludaturque et. Odio iusto et eos, fuisset perpetua sententiae no mel.
		
		Ne pro equidem disputationi, soluta populo ei pro. Per te fugit dicam saperet, quo eu quot tibique percipitur. Duo te placerat mediocrem, qui ea veri ornatus abhorreant. Eam possit mollis cu, te per tollit liberavisse delicatissimi. No qui tollit tractatos, vide molestie singulis eos ea, no qui vocent virtute. In duis malis sea. Sed vide mandamus interpretaris ut.
		
		Veniam mucius ridens sit te. Ei eos vidit reformidans. Mei summo blandit nominavi no, nonumy vulputate in vis, at omnium insolens vel. In copiosae patrioque eos, et ius vivendo vulputate.
		
		Cum enim noster liberavisse ei, te vel amet altera detraxit, id placerat nominati interesset sit. Ei mel dolorem scriptorem, ignota consulatu aliquando te his. An dicunt inciderint sed. Qui harum labores elaboraret an, vis cu agam wisi philosophia. Ut omittam facilisis vis, id semper interesset mea. Denique noluisse lucilius quo ei, ne falli dolores evertitur qui.
		';
		if($limit){
			$latin = substr($latin,0,$limit-1) . '....';
		}
		return $latin;
	}
	
?>