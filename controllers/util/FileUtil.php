<?php

class FileUtil {
	
	public function writeToFile($filename, $contents){
		$myfile = fopen($filename, "w") or die("Unable to open file!");
		
		fwrite($myfile, $contents);
		fclose($myfile);
	}
}