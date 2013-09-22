<?php

include "lessc.inc.php";

class LesscWidget extends Widget{
    public function render($data){
        $path_parts  = pathinfo($data['input']);
        $input_path = FILE_ROOT.$path_parts['dirname'].'/'.$path_parts['filename'].'.'.$path_parts['extension'];

        $out_path = $data['out'] ? $data['out'] : dirname(dirname($input_path)).'/css/'.$path_parts['filename'].'.css';

        if(APP_DEBUG){
            unlink($out_path);
        }

        lessc::ccompile($input_path, $out_path);

        $style_link = __ROOT__.str_replace(FILE_ROOT, "", $out_path);
        return str_replace('\\', '/', $style_link);

    }
}