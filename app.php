<?php

// repertoires  gnorer dans les projets
$projectsListIgnore = array ('.','..');


// recuperation mes projets
$handle=opendir(".");
$projectContents = '';
while ($file = readdir($handle)) 
{
	if (is_dir($file) && !in_array($file,$projectsListIgnore)) 
	{		
		$projectContents .= '<li><a href="'.$file.'">'.$file.'</a></li>';
	}
}
closedir($handle);




$pageContents = <<<HTML
    <?xml version="1.0" encoding="iso-8859-1"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

    <html lang="en" xml:lang="en">
    <head>
        <title>Mes projets</title>
        <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

        <style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    html {
        background: #ddd;
    }
    body {
        margin: 1em 10%;
        padding: 1em 3em;
        font: 80%/1.4 tahoma, arial, helvetica, lucida sans, sans-serif;
        border: 1px solid #999;
        background: #eee;
        position: relative;
    }
    #head {
        margin-bottom: 1.8em;
        margin-top: 1.8em;
        padding-bottom: 0em;
        border-bottom: 1px solid #999;
        letter-spacing: -500em;
        text-indent: -500em;
        height: 125px;
        background: url(index.php?img=gifLogo) 0 0 no-repeat;
    }
    .utility {
        position: absolute;
        right: 4em;
        top: 145px;
        font-size: 0.85em;
    }
    .utility li {
        display: inline;
    }

    h2 {
        margin: 0.8em 0 0 0;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    #head ul li, dl ul li, #foot li {
        list-style: none;
        display: inline;
        margin: 0;
        padding: 0 0.2em;
    }
    ul.aliases, ul.projects, ul.tools {
        list-style: none;
        line-height: 24px;
    }
    ul.aliases a, ul.projects a, ul.tools a {
        padding-left: 22px;
        background: url(index.php?img=pngFolder) 0 100% no-repeat;
    }
    ul.tools a {
        background: url(index.php?img=pngWrench) 0 100% no-repeat;
    }
    ul.aliases a {
        background: url(index.php?img=pngFolderGo) 0 100% no-repeat;
    }
    dl {
        margin: 0;
        padding: 0;
    }
    dt {
        font-weight: bold;
        text-align: right;
        width: 11em;
        clear: both;
    }
    dd {
        margin: -1.35em 0 0 12em;
        padding-bottom: 0.4em;
        overflow: auto;
    }
    dd ul li {
        float: left;
        display: block;
        width: 16.5%;
        margin: 0;
        padding: 0 0 0 20px;
        background: url(index.php?img=pngPlugin) 2px 50% no-repeat;
        line-height: 1.6;
    }
    a {
        color: #024378;
        font-weight: bold;
        text-decoration: none;
    }
    a:hover {
        color: #04569A;
        text-decoration: underline;
    }
    #foot {
        text-align: center;
        margin-top: 1.8em;
        border-top: 1px solid #999;
        padding-top: 1em;
        font-size: 0.85em;
    }
    </style>
        
        <link rel="shortcut icon" href="index.php?img=favicon" type="image/ico" />
    </head>

    <body>
        
        <h2>Mes projets</h2>
        <ul class="projects">
        $projectContents
        </ul>
    </body>
    </html>
HTML;

echo $pageContents;

?>
