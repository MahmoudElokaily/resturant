<?php
namespace App\Traits;

Trait SaveImage {
    function saveImage($photo,$folder){
        //save photo in folder
        $file_extension = $photo -> getClientOriginalExtension();
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $filenameWithoutExtension = pathinfo($photo, PATHINFO_FILENAME);
        $file_name = time() . '_'. $filenameWithoutExtension . '.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$file_name);

        return $file_name;
    }
}
