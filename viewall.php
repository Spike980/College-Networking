
<?php
include("header.php");
include("profilesql.php");
include("friends.php"); 
?>
<center>
<div class=container>
<div class=container>

<!-- head --><!-- navigation menu -->
<?php include("head.php"); ?>
<?php
include("menu.php"); 
$result = mysql_query("SELECT * FROM profile ORDER BY RAND()
");
$i=0;
while($row = mysql_fetch_array($result))
  {

$img[$i] = $row["image"];
$uid[$i] = $row["userid"];
$i++;
  }
  
  $result = mysql_query("SELECT * FROM stuacc where id");  

$strec = mysql_query("SELECT * FROM stuacc WHERE email='$_SESSION[logid]' ");

while($row = mysql_fetch_array($strec))
  {
$_SESSION["stuid"] =  $row["id"];

  }

$colrec = mysql_query("SELECT * FROM profile WHERE userid='$_SESSION[stuid]' ");

while($row = mysql_fetch_array($colrec))
  {
$cname = $row["coluni"];
  }

$acrec1 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[0]' ");

while($row = mysql_fetch_array($acrec1))
  {
	  $stid1 = $row["id"];
$name1 = $row["firstname"];
$gen1= $row["iam"];
  }
  
  $acrec2 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[1]' ");

while($row = mysql_fetch_array($acrec2))
  {
	  	  $stid2 = $row["id"];
$name2 = $row["firstname"];
$gen2= $row["iam"];
  }
  
  $acrec3 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[2]' ");

while($row = mysql_fetch_array($acrec3))
  {
	  	  $stid3 = $row["id"];
$name3 = $row["firstname"];
$gen3= $row["iam"];
  }
  
  $acrec4 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[3]' ");

while($row = mysql_fetch_array($acrec4))
  {
	  	  $stid4 = $row["id"];
$name4 = $row["firstname"];
$gen4= $row["iam"];
  }
  
   $acrec4 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[3]' ");

while($row = mysql_fetch_array($acrec4))
  {
	  	  $stid4 = $row["id"];
$name4 = $row["firstname"];
$gen4= $row["iam"];
  }
  
   $acrec4 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[3]' ");

while($row = mysql_fetch_array($acrec4))
  {
	  	  $stid4 = $row["id"];
$name4 = $row["firstname"];
$gen4= $row["iam"];
  }
  
   $acrec4 = mysql_query("SELECT * FROM stuacc WHERE id='$uid[3]' ");

while($row = mysql_fetch_array($acrec4))
  {
	  	  $stid4 = $row["id"];
$name4 = $row["firstname"];
$gen4= $row["iam"];
  }
  
?>


<div style="padding: 10px; text-align: left;">
<!-- body  content -->

    <table width="100%" height="382" border="0" >
  <tr>
    <td width="16%" height="143" align="left" valign="top" bgcolor="#CCCCCC"><?php include("profileleft.php"); ?></td>
    <td width="55%" valign="top"><table width="100%" border="1">
      <tr>
        <td height="23"><strong>View All Friends</strong></td>
        </tr>
      </table>
      <table width=100%>
        
        <tr valign=top align=center>
          <td><a href="friendsprofile.php?fid=<?php echo $stid1 ; ?>"><img src="<?php echo $img[0] ; ?>" width="100" height="150" border="0" alt=""><br />
            <?php echo $name1 ; ?><br />
            
            </a><br></td>
          <td><a href="friendsprofile.php?fid=<?php echo $stid2 ; ?>""><img src="<?php echo $img[1] ; ?>" width="100" height="150" border="0" alt=""><br />
            <?php echo $name2 ; ?>
            </a><br></td>
          <td><a href="friendsprofile.php?fid=<?php echo $stid3 ; ?>""><img src="<?php echo $img[2] ; ?>" width="100" height="150" border="0" alt=""><br />
            <?php echo $name3 ; ?>
            </a><br></td>
          <td><a href="friendsprofile.php?fid=<?php echo $stid4 ; ?>""><img src="<?php echo $img[3] ; ?>" width="100" height="150" border="0" alt=""><br />
            <?php echo $name4 ; ?>
            </a><br></td>
          
          </tr>
        </table>
    </td>
  </tr>
  </table>
   

</div>
<center>
<?php include("footer.php"); ?>


