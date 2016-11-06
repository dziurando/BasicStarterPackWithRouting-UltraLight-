<?php
    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && (strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime('.'.$_SERVER['REQUEST_URI']))) {
        header_remove(); 
        header('Etag: '.md5_file('.'.$_SERVER['REQUEST_URI']));
        header("HTTP/1.1 304 Not Modified");
        
        //header('Last-Modified: '.$_SERVER['HTTP_IF_MODIFIED_SINCE']);        
       die();
    } else {
        header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime('.'.$_SERVER['REQUEST_URI'])).' GMT', true, 200);        
        header('Content-Type: text/javascript');
        header('Content-Length: '.filesize('.'.$_SERVER['REQUEST_URI']));
        header('Etag: '.md5_file('.'.$_SERVER['REQUEST_URI']));
        include('.'.$_SERVER['REQUEST_URI']); 
        die();
    }

