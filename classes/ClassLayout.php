<?php
namespace Classes;

class ClassLayout{

    public static function setHeader($title , $description , $author='Leonan Carvalho Souza')
    {

        $html="<!doctype html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="    <meta charset='utf-8'>\n";
        $html.="    <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
        $html.="    <meta name='author' content='$author'>\n";
        $html.="    <meta name='format-detection' content='telephone=no'>\n";
        $html.="    <meta name='description' content='$description'>\n";
        $html.="    <title>$title</title>\n";
        $html.="<link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/style.min.css'>\n";
        #FAVICON
        #$html.="<link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/style.css'>\n";
        $html.="</head>\n\n";
        $html.="<body>\n";
        echo $html;
    }
    public static function setHead($title , $description , $author='Leonan Carvalho Souza')
    {
        $html="<!doctype html>\n";
        $html.="<html lang='pt-br'>\n";
        $html.="<head>\n";
        $html.="    <meta charset='utf-8'>\n";
        $html.="    <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
        $html.="    <meta name='author' content='$author'>\n";
        $html.="    <meta name='format-detection' content='telephone=no'>\n";
        $html.="    <meta name='description' content='$description'>\n";
        $html.="    <title>$title</title>\n";
        #FAVICON
        $html.="<link rel='stylesheet' type='text/css' href='".DIRPAGE."lib/css/style.css'>\n";
        $html.="</head>\n\n";
        $html.="<body>\n";
        echo $html;
    }

    public static function setFooter()
    {
        #JAVASCRIPT
        $html="<script src='".DIRPAGE."lib/js/zepto.min.js'></script>\n";  
        $html.="<script src='".DIRPAGE."lib/js/vanilla-masker.min.js'></script>\n";
        $html.="<script src='".DIRPAGE."lib/js/javascript.js'></script>\n";
        $html.="</body>\n";
        $html.="</html>\n";
        echo $html;
    }
}
?>

