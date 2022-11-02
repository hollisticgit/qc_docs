<?php
$getFileStructureText = function($isDesktopDocs, $renameFilesLink)
{
    echo "
<p>New projects contain code files 
";
    if ($isDesktopDocs)
    {
        echo "
(<span class='private-file-name'>.py</span> or <span class='private-file-name'>.cs</span>), notebook files (<span class='private-file-name'>.ipynb</span>), and some other configuration files (<span class='private-file-name'>.json</span>)
        ";
    }
    else
    {
        echo "
(<span class='public-file-name'>.py</span> or <span class='public-file-name'>.cs</span>) and notebook files (<span class='public-file-name'>.ipynb</span>)
        ";
    }
    echo "
. Run backtests with code files and launch the Research Environment with notebook files. 
    ";
    
    echo $isDesktopDocs ? "In QC Cloud, c" : "C" ;
    
    echo "
ode files can contain up to 64,000 characters and notebook files can be up to 128KB in size.    
    ";
    
    if ($isDesktopDocs)
    {
        echo "
In your local workspace, the code files and notebook files can be any size.
        ";
    }
    
    $location = $isDesktopDocs ? "the web IDE" : "VSCode" ;
    $
    
    echo "
    . To keep files small, files can import code from other code files. To aid navigation, you can <a href='{$renameFilesLink}'>rename, move, and delete files</a> in {$location}.</p>
    ";
}
?>