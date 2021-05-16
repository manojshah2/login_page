<?php
$root = "../";  
include($root.'config/config.inc.php');
include_once($root."field_mapping.php");
//is_login($root); 

?>
<?php
        error_reporting(E_ERROR | E_PARSE);
        function getValue($profile1,$database_col_name){
            $actual_col=$database_col_name;
            if(array_key_exists($actual_col,$profile1)){
                return htmlspecialchars($profile1[$actual_col],ENT_QUOTES,"UTF-8");
            }else{
                return "Not filled in";
            }                
        }
        if(isset($_REQUEST['profilechecksum'])){
            $result =$mysqli->query("select * from tblprofiles where ID=".$_REQUEST['profilechecksum']);                
            $profile = $result->fetch_array();
        }
    ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><div dir="ltr"><span lang="EN-US"></span><div class="gmail_quote"><div link="blue" vlink="purple" style="word-wrap:break-word" lang="EN-IN"><div class="m_-854596265518321158WordSection1"><div style="border:none;border-top:solid #e1e1e1 1.0pt;padding:3.0pt 0cm 0cm 0cm">
</div>
<p class="MsoNormal"><u></u>&nbsp;<u></u></p>
<table style="width:525.0pt;border:solid black 1.0pt" width="700" cellspacing="0" cellpadding="0" border="1">
<tbody>
<tr>
<td style="width:187.5pt;border:none;background:black;padding:11.25pt 11.25pt 11.25pt 11.25pt" width="250">
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:white"><img style="width:2.4666in;height:1.125in" id="m_-854596265518321158_x0000_i1026" src="http://crm.Luvmatrimonial.com/mailer/logo.jpg" alt="Luvmatrimonial" width="237" height="108"></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:white"><u></u><u></u></span></p>
</td>
<td style="border:none;background:black;padding:11.25pt 11.25pt 11.25pt 11.25pt">
<p class="MsoNormal" style="text-align:center;line-height:15.0pt" align="center">
<b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;color:white">Jatwanis'</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:white">
<u></u><u></u></span></p>
<h1 style="margin-right:0cm;margin-bottom:3.75pt;margin-left:0cm;text-align:center" align="center">
<span style="font-family:&quot;Arial&quot;,sans-serif;color:#f1c190">Luv Matrimonial Services<u></u><u></u></span></h1>
<p class="MsoNormal" style="text-align:center;line-height:15.0pt" align="center">
<span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:white">Matchless Matchmaking Since 1999<br>
M-54, Main Market, GK-2, New Delhi-110048<br>
E-mail: <a href="mailto:gmservices625@gmail.com" target="_blank"><span style="color:#f1c190;text-decoration:none">gmservices625@gmail.com</span></a><br>
Phone: <a href="tel:011-46527070" target="_blank"><span style="color:#f1c190;text-decoration:none">011-46527070</span></a>,
<a href="tel:9650288188" target="_blank"><span style="color:#f1c190;text-decoration:none">9650288188</span></a><u></u><u></u></span></p>
</td>
</tr>
<tr>
<td colspan="2" style="border:none;padding:11.25pt 11.25pt 11.25pt 11.25pt">
<br>
Greetings!!<br>
Enclosed is the profile and photo of <?php echo getValue($profile,'FIRST NAME') ?> <?php echo getValue($profile,'LAST NAME') ?> for your perusal. If the sent profile matches your requirement and expectation, further talks can be done. I will really appreciate if you kindly acknowledge this mail.
<u></u><u></u></span></p>
</td>
</tr>
<tr>
<td colspan="2" style="width:337.5pt;border:none;padding:11.25pt 11.25pt 11.25pt 11.25pt" width="450">
<table style="width:100.0%" width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr style="height:22.5pt">
<td rowspan="5" style="width:14.0%;border:solid #f1f1f1 1.0pt;background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;height:22.5pt" width="14%">
<p class="MsoNormal"><span style="color:black"><a><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;text-decoration:none"><?php
                          $profile_images = $mysqli->query('select `IMG PATH` from tblimages where PID='.$profile['ID'].' order by `MAIN PHOTO` desc');
                          $images=$profile_images->fetch_array();

                          if(count($images)==0){
                            $images[0]="images/nophoto.png";
                          };
                        ?><img style="width:3.125in;height:3.125in" id="m_-854596265518321158_x0000_i1025" src="<?php echo $root_name.$images[0]; ?>" width="300" height="300" border="0"></span></b></a></span><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:black"><u></u><u></u></span></b></p>
</td>
<td style="width:48.0%;border:solid #f1f1f1 1.0pt;background:#e5e5e5;padding:3.75pt 3.75pt 3.75pt 3.75pt;height:22.5pt" width="48%">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:black">Years<u></u><u></u></span></b></p>
</td>
<td style="width:38.0%;border:solid #f1f1f1 1.0pt;background:#e5e5e5;padding:3.75pt 3.75pt 3.75pt 3.75pt;height:22.5pt" width="38%">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:black">Height<u></u><u></u></span></b></p>
</td>
</tr>
<tr>
<td style="border:solid #f1f1f1 1.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif"><?php 

$dob_str=getValue($profile,"DOB");

if ((strlen($dob_str)>0 && strpos($dob_str,'000')===false)){         
    
    $dob=new DateTime($dob_str);
    $today=new DateTime('today');
    $age = $dob->diff($today)->y;
    
}

$height = getValue($profile,'HEIGHT'); 
if(strlen($height)>0){
    $height_arr=explode('(',$height);
    $height_value = $height_arr[0];
}

echo $age;

?>
<u></u><u></u></span></p>
</td>
<td style="border:solid #f1f1f1 1.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif"><?php echo $height;?>
<u></u><u></u></span></p>
</td>
</tr>
<tr>
<td style="border:solid #f1f1f1 1.0pt;background:#e5e5e5;padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:black">Religion</span></b><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif"><u></u><u></u></span></b></p>
</td>
<td style="border:solid #f1f1f1 1.0pt;background:#e5e5e5;padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif;color:black">Occupation</span></b><b><span style="font-size:10.5pt;font-family:&quot;Arial&quot;,sans-serif"><u></u><u></u></span></b></p>
</td>
</tr>
<tr>
<td style="border:solid #f1f1f1 1.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif"><?php echo getValue($profile,'RELIGION')?>
<u></u><u></u></span></p>
</td>
<td style="border:solid #f1f1f1 1.0pt;padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif"><?php echo getValue($profile,'Occupation') ?><u></u><u></u></span></p>
</td>
</tr>
<tr>
<td colspan="2" style="padding:3.75pt 3.75pt 3.75pt 3.75pt">
<p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">
<a href="" target="_blank">
</a><u></u><u></u></span></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td colspan="2" style="border:none;padding:11.25pt 11.25pt 11.25pt 11.25pt">
<div>
<div>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">Thanks &amp; Regards,</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#222222"><u></u><u></u></span></p>
</div>
<div>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#b51a2e">Luv Matrimonial Services</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#222222"><u></u><u></u></span></p>
</div>
<div>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">M-54, Main Market, GK-2, New Delhi-110048
</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#222222"><u></u><u></u></span></p>
</div>
<div>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">Jyoti</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#222222"><u></u><u></u></span></p>
</div>
<div>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">9810541010</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#222222"><u></u><u></u></span></p>
</div>
<div>
<p class="MsoNormal" style="line-height:15.0pt"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#666666">Mob No.: +91-9650288188, 9871424040, 9810824468</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#222222"><u></u><u></u></span></p>
</div>
</div>
</td>
</tr>
<tr>
<td colspan="2" style="border:none;background:#f1f1f1;padding:11.25pt 11.25pt 11.25pt 11.25pt">
<p class="MsoNormal" style="text-align:center;line-height:15.0pt" align="center">
<span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:black">© 2017 Luvmatrimonial, All rights reserved.
</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif"><u></u><u></u></span></p>
</td>
</tr>
</tbody>
</table>
<p class="MsoNormal"><span style="font-size:10.0pt"><u></u>&nbsp;<u></u></span></p>
</div>
</div>

</div><br clear="all">

</div>
