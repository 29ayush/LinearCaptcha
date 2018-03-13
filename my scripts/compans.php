<?php
class compareimage
{
	private function mimeType($i)
	{
		/*returns array with mime type and if its jpg or png. Returns false if it isn't jpg or png*/
		$mime = getimagesize($i);
		$return = array($mime[0],$mime[1]);
		switch ($mime['mime'])
		{
			case 'image/jpeg':
				$return[] = 'jpg';
				return $return;
			case 'image/png':
				$return[] = 'png';
				return $return;
			default:
				return false;
		}
    }  
	private function createImage($i)
	{
		/*retuns image resource or false if its not jpg or png*/
		$mime = $this->mimeType($i);
      
		if($mime[2] == 'jpg')
		{
			return imagecreatefromjpeg ($i);
		} 
		else if ($mime[2] == 'png') 
		{
			return imagecreatefrompng ($i);
		} 
		else 
		{
			return false; 
		} 
    }
   private function resizeImage($i,$source)
	{
		/*resizes the image to a 8x8 squere and returns as image resource*/
		$mime = $this->mimeType($source);
		$t = imagecreatetruecolor(26, 12);
		$source = $this->createImage($source);
		imagecopyresized($t, $source, 0, 0, 0, 0, 26, 12, $mime[0], $mime[1]);
		return $t;
	}
    private function colorMeanValue($i)
	{
		/*returns the mean value of the colors and the list of all pixel's colors*/
		$colorList = array();
		$colorSum = 0;
		for($a = 0;$a<8;$a++)
		{
			for($b = 0;$b<8;$b++)
			{
				$rgb = imagecolorat($i, $a, $b);
				$colorList[] = $rgb & 0xFF;
				$colorSum += $rgb & 0xFF;
			}
			
		}
		return array($colorSum/64,$colorList);
	}
    private function bits($colorMean)
	{
		/*returns an array with 1 and zeros. If a color is bigger than the mean value of colors it is 1*/
		$bits = array();
		foreach($colorMean[1] as $color){$bits[]= ($color>=$colorMean[0])?1:0;}
		return $bits;
	}
    public function compare($a)
	{
		/*main function. returns the hammering distance of two images' bit value*/
		$bits2 = '1111000011110000111100001111000011110000111100001111000011110000';
		$i1 = $this->createImage($a);
		if(!$i1){return false;}
		$i1 = $this->resizeImage($i1,$a);
                imagefilter($i1,IMG_FILTER_BRIGHTNESS, -130);
		imagefilter($i1,IMG_FILTER_GRAYSCALE);
		imagefilter($i1,IMG_FILTER_GAUSSIAN_BLUR);
		imagefilter($i1,IMG_FILTER_SELECTIVE_BLUR);
                imagefilter($i1,IMG_FILTER_SMOOTH,200);
		$colorMean1 = $this->colorMeanValue($i1);
		$bits1 = $this->bits($colorMean1);
		$hammeringDistance = 0;
		for($a = 0;$a<64;$a++)
		{
			if($bits1[$a] != $bits2[$a])
			{
				$hammeringDistance++;
			}
		}
		return $hammeringDistance;
	}
}
?>