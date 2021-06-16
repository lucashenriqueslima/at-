<?php 

    function content($contentPath)
    {   
        require_once VIEWPATH.$contentPath.".php";
    }

    function asset($path)
    {
        return ASSETPATH.$path;
    }

    function formatCPF($doc)
    {
        $doc = preg_replace("/[^0-9]/", "", $doc);
        $qtd = strlen($doc);
 
       $docFormatado = "Não encontrado";
 
            if($qtd === 11 ) {
 
                $docFormatado = substr($doc, 0, 3) . '.' .
                                substr($doc, 3, 3) . '.' .
                                substr($doc, 6, 3) . '-' .
                                substr($doc, 9, 2);
            }
 
            return $docFormatado;
    
    }

    function redirect($url = null)
    {
   echo "<script> window.location.href = '".SITE.$url."' </script>";

   die;
    }



    function flash($type = null, $message = null)
    {
        if($type && $message){
            $_SESSION["flash"] = [
                "type"=> $type,
                "message"=> $message
            ];
            
            return null;
        }

        if(isset($_SESSION["flash"])){
            
            echo '<script>M.toast({
                html: "'.$_SESSION['flash']['message'].'",
                displayLength: 3000,
                classes:"'.$_SESSION['flash']['type'].'"
            })</script>';

            unset($_SESSION['flash']);
           
        }

        return null;
    }