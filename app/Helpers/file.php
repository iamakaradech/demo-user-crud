<?php

if (! function_exists('convertBase64ToFile')) {
    function convertBase64ToFile ($image, $fileName) {
        $imageInfo = explode(";base64,", $image);
        $imgExt = str_replace('data:image/', '', $imageInfo[0]);
        $image = str_replace(' ', '+', $imageInfo[1]);
        $imageName = $fileName . '.' .$imgExt;
        \Storage::disk('public')->put($imageName, base64_decode($image));

        return $imageName;
    }
}
