<?php
class gallery {
    public $path; //this will be later set as a variable in index.php
    public function setPath($path) {
        $this->path = $path;
    }

    private function getDirectory($path) {
        return scandir($path);
    }
    public function getImages($extensions = array()) {
        $images = $this->getDirectory($this->path); //list all files
        
        
        foreach($images as $index => $image) {
            $explode = explode('.', $image);
            $extension = end($explode);
            if(!in_array($extension, $extensions)) { //check if files extensions meet the criteria set in index.php
                unset($images[$index]);
            } else {
                $images[$index] = array( //make an array of images and corresponding miniatures
                    'full' => $this->path .  $image,
                    'thumb' => $this->path . '/thumbs/' . $image  
                    );
            }
           
        }
        return (count($images)) ? $images : false;   
    }   

    public function getPreview($extensions = array(), $n = 1) {
        $images = $this->getDirectory($this->path); //list all files
        $photos = array();
        $i = 0;
        foreach($images as $index => $image) {
            $explode = explode('.', $image);
            $extension = end($explode);
            if(!in_array($extension, $extensions)) { //check if files extensions meet the criteria set in index.php
                unset($images[$index]);
            } else {
            	$photos[$i]['image'] =  $this->path . '/' . $image;
            	$i++;
            	if($i == $n)
	            	return $photos;
            }
           
        }
        return (count($images)) ? $images : false;   
    }   

    /* taken from davidwalsh https://davidwalsh.name/generate-photo-gallery */
    /* function:  generates thumbnail */
	public function make_thumb($src,$dest,$desired_width) {
        /* read the source image */
        $source_image = imagecreatefromjpeg($src);
        $width = imagesx($source_image);
        $height = imagesy($source_image);
        /* find the "desired height" of this thumbnail, relative to the desired width  */
        $desired_height = floor($height*($desired_width/$width));
        /* create a new, "virtual" image */
        $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
        /* copy source image at a resized size */
        imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
        /* create the physical thumbnail image to its destination */
        imagejpeg($virtual_image,$dest);
    }
 
    /* function:  returns files from dir */
    public function get_files($images_dir,$exts = array('jpg')) {
        $files = array();
        if($handle = opendir($images_dir)) {
            while(false !== ($file = readdir($handle))) {
                $extension = strtolower($this->get_file_extension($file));
                if($extension && in_array($extension,$exts)) {
                    $files[] = $file;
                }
            }
            closedir($handle);
        }
        return $files;
    }

    /* function:  returns a file's extension */
    public function get_file_extension($file_name) {
        return substr(strrchr($file_name,'.'),1);
    }

}
?>