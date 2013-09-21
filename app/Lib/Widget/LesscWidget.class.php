<?php

include "lessc.inc.php";

class LesscWidget extends Widget{
    public function render($data){
        $path_parts  = pathinfo($data['input']);
        $input_path = FILE_ROOT.$path_parts['dirname'].'/'.$path_parts['filename'].'.'.$path_parts['extension'];

        chdir(FILE_ROOT.$path_parts['dirname']);
        chdir('../css');
        $dir_path = getcwd();
        closedir();

        $out_path = $data['out'] ? $data['out'] : $dir_path.'/'.$path_parts['filename'].'.css';

        lessc::ccompile($input_path, $out_path);

        $style_link = __ROOT__.str_replace(FILE_ROOT, "", $out_path);
        return str_replace('\\', '/', $style_link);

    }
}