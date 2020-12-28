<?php
$root = "../";  
include($root.'config/config.inc.php');
include_once($root."field_mapping.php");
//is_login($root); 

?>

<!DOCTYPE html>
<html lang="en">
<body>
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
    <h1>PERSONAL INFORMATION</h1>
    <table>
        <tr>
            <td>MEMBER NAME</td>
            <td> : <?php echo getValue($profile,'FIRST NAME') ?> <?php echo getValue($profile,'LAST NAME') ?></td>
        </tr>
        <tr>
            <td>GENDER</td>
            <td> : <?php echo getValue($profile,'GENDER') ?></td>
        </tr>
        <tr>
            <td>DATE OF BIRTH</td>
            <td> : <?php echo getValue($profile,'DOB') ?></td>
        </tr>
        <tr>
            <td>TIME OF BIRTH</td>
            <td> : <?php echo getValue($profile,'BIRTH TIME') ?></td>
        </tr>
        <tr>
            <td>PLACE OF BIRTH</td>
            <td> : <?php echo getValue($profile,'BIRTH PLACE') ?></td>
        </tr>
        <tr>
            <td>RELIGION</td>
            <td> : <?php echo getValue($profile,'RELIGION') ?></td>
        </tr>
        <tr>
            <td>CASTE</td>
            <td> : <?php echo getValue($profile,'CASTE') ?></td>
        </tr>
        <tr>
            <td>HEIGHT</td>
            <td> : <?php echo getValue($profile,'HEIGHT') ?></td>
        </tr>
        <tr>
            <td>DRINKING HABIT</td>
            <td> : <?php echo getValue($profile,'DRINK') ?></td>
        </tr>
        <tr>
            <td>SMOKING HABIT</td>
            <td> : <?php echo getValue($profile,'SMOKE') ?></td>
        </tr>
        <tr>
            <td>EATING HABIT</td>
            <td> : <?php echo getValue($profile,'FOOD HABITS') ?></td>
        </tr>
        <tr>
            <td>PERSONAL DETAILS</td>
            <td> : <?php echo getValue($profile,'About') ?></td>
        </tr>

    </table>

    <h1>EDUCATIONAL INFORMATION</h1>
    <table>
        <tr>
            <td>S. No.</td>
            <td>COURSES</td>
            <td>INSTITUTION NAME</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo getValue($profile,'PG') ?></td>
            <td><?php echo getValue($profile,'PG COLLEGE') ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo getValue($profile,'UG') ?></td>            
            <td><?php echo getValue($profile,'UG COLLEGE') ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>SCHOOLING</td>
            <td><?php echo getValue($profile,'SCHOOL NAME') ?></td>
        </tr>
    </table>

    <h1>PROFESSIONAL INFORMATION</h1>
    <table>
        <tr>
            <td>OCCUPATION</td>
            <td> : <?php echo getValue($profile,'Occupation') ?></td>
        </tr>
        <tr>
            <td>EMPLOYED WITH</td>
            <td> : <?php echo getValue($profile,'EMPLOYED IN') ?></td>
        </tr>
        <tr>
            <td>PERSONAL INCOME (P.A)</td>
            <td> : <?php echo getValue($profile,'ANNUAL INCOME') ?>-<?php echo getValue($profile,'ANNUAL INCOME2') ?></td>
        </tr>
        <tr>
            <td>RESIDING CITY/COUNTRY</td>
            <td> : <?php echo getValue($profile,'CITY') ?></td>
        </tr>
        <tr>
            <td>MARITAL STATUS</td>
            <td> : <?php echo getValue($profile,'MARITAL STATUS') ?></td>
        </tr>
    </table>

    <h1>FAMILY DETAILS</h1>
    <table>
        <tr>
            <td>FATHER'S NAME</td>
            <td> : <?php echo getValue($profile,'FATHER NAME') ?></td>
        </tr>
        <tr>
            <td>FATHER OCCUPATION</td>
            <td> : <?php echo getValue($profile,'FATHER IS') ?></td>
        </tr>
        <tr>
            <td>MOTHER'S NAME</td>
            <td> : <?php echo getValue($profile,'MOTHER NAME') ?></td>
        </tr>
        <tr>
            <td>MOTHERS'S OCCUPATION</td>
            <td> : <?php echo getValue($profile,'MOTHER IS') ?></td>
        </tr>
        <tr>
            <td>TYPE OF FAMILY</td>
            <td> : <?php echo getValue($profile,'FAMILY TYPE') ?></td>
        </tr>
        <tr>
            <td>FAMILY STATUS</td>
            <td> : <?php echo getValue($profile,'FAMILY VALUE') ?></td>
        </tr>
        <tr>
            <td>FAMILY INCOME</td>
            <td> : <?php echo getValue($profile,'FAMILY INCOME') ?>-<?php echo getValue($profile,'FAMILY INCOME2') ?></td>
        </tr>
        <tr>
            <td>UNMARRIED SISTER(S)</td>
            <td> : <?php echo getValue($profile,'UNMARRIED SISTERS') ?></td>
        </tr>
        <tr>
            <td>MARRIED SISTER(S)</td>
            <td> : <?php echo getValue($profile,'MARRIED SISTERS') ?></td>
        </tr>
        <tr>
            <td>UNMARRIED BROTHER(S)</td>
            <td> : <?php echo getValue($profile,'UNMARRIED BROTHERS') ?></td>
        </tr>
        <tr>
            <td>MARRIED BROTHER(S)</td>
            <td> : <?php echo getValue($profile,'MARRIED BROTHERS') ?></td>
        </tr>
        <tr>
            <td>FAMILY BASED OUT OF</td>
            <td> : <?php echo getValue($profile,'FAMILY BASED OUT OF') ?></td>
        </tr>


    </table>

    <h1>ABOUT FAMILY</h1>
    <table>
        <tr>
            <td>BELIEVES IN HOROSCOPE</td>
            <td> : <?php echo getValue($profile,'BELIEVES IN HOROSCOPE') ?></td>
        </tr>
        <tr>
            <td>FAMILY HISTORY</td>
            <td> : <?php echo getValue($profile,'ABOUT FAMILY') ?></td>
        </tr>
    </table>
</body>
</html>