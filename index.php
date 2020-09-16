    <?php 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$topurl=$protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$compTopurl = parse_url($topurl);
// Program to display URL of current page. 
//para local
if($compTopurl["host"]=='localhost'){//para tierra;
    $modCountDown ='';
}else{
	$modCountDown  = 'count_down_temp_der/';
}


//echo 'host:'.$principalUrl ;
?> 


<style>
body{
    margin:0px;
    padding:0px;
}

.countDownIf{
    width:651px;
    height:179px;
    z-index:100;
}

@media (max-width: 767px) {
    .countDownIf{
        width:200px;
        height:400px;
        z-index:100;
        
    }

}
</style>

<iframe class='countDownIf'  style="position:fixed;bottom:10px; right:10px"  src="<?php echo $iframerootpath.$modCountDown ?>mod_index/1_1.php" width="100%" 
frameBorder="0" scrolling="no" id="iframe_opss_der_1_1" onload="" 
onresize=" "> </iframe>

