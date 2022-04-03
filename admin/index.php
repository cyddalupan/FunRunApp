<?php 
include('../db_connect.php');

$totalUserCount = 0;
$userCompleted = 0;

$categ = 0;
$branch = 0;
$reg1 = 0;
$reg2 = 0;
$reg4 = 0;
$findone = 0;

$regWfam = 0;
$kid1k = 0;
$kid3k = 0;
$adu3k = 0;
$adu5k = 0;
$adu10k = 0;

$sql="SELECT * FROM users";
$result=mysql_query($sql);
while($rows=mysql_fetch_array($result)){
   $totalUserCount++;
   
    if($rows['progress'] == 1)
        $categ++;

    if($rows['progress'] == 2)
        $branch++;
    
    if($rows['progress'] == 3)
        $reg1++;
    
    if($rows['progress'] == 4)
        $reg2++;
    
    if($rows['progress'] == 6)
        $reg4++;
    
    if($rows['progress'] == 7)
        $findone++;

   if($rows['progress'] == 7 || $rows['progress'] == 6)
        $userCompleted++;


    if($rows['race_category'] == '3k-family')
        $regWfam++;

    if($rows['race_category'] == '1k-children')
        $kid1k++;
    
    if($rows['race_category'] == '3k-children')
        $kid3k++;
    
    if($rows['race_category'] == '3k-adult')
        $adu3k++;
    
    if($rows['race_category'] == '5k-adult')
        $adu5k++;
    
    if($rows['race_category'] == '10k-adult')
        $adu10k++;
}

$totalPercent = ($userCompleted / $totalUserCount) * 100;

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
        
        <link rel="stylesheet" href="../jmobile/jquery.mobile-1.4.4.min.css">
        <script src="../jmobile/jquery.js"></script>
        <script src="../jmobile/jquery.mobile-1.4.4.min.js"></script>
        
        <title>Stripes Run Admin</title>
        <style type="text/css">
            div{text-align: center;}
        </style>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header">
                <h1>Analytics</h1>
            </div><!-- /header -->
            <div role="main" class="ui-content">
                <div id="Total-Users">
                    <!--total users-->
                    <div class="ui-grid-a" style="color:#FF4D4D;">
                        <div class="ui-block-a">
                            <h1>All Users Count</h1>
                        </div>
                        <div class="ui-block-b">
                            <h1><?php echo $totalUserCount; ?></h1>
                        </div>
                    </div><!-- /grid-a -->
                    <!--finished users-->
                    <div class="ui-grid-a" style="color:#6699FF;">
                        <div class="ui-block-a">
                            <h1>User Completed</h1>
                        </div>
                        <div class="ui-block-b">
                            <h1><?php echo $userCompleted; ?></h1>
                        </div>
                    </div><!-- /grid-a -->

                    <div style="border:#999 solid 1px; background:#FF4D4D; width:70%; margin-left:14%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; overflow:hidden;">
                        <div style="height:40px; background:#6699FF; width:<?php echo $totalPercent; ?>%;"></div>
                    </div>
                </div><!--Total-Users-->

                <h1>Race Category</h1>
                <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
                 <thead>
                   <tr>
                     <th>Race Category</th>
                     <th>Count</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th>Join with Family</th>
                     <td><?php echo $regWfam; ?></td>
                   </tr>
                   <tr>
                     <th>1k-children</th>
                     <td><?php echo $kid1k; ?></td>
                   </tr>
                   <tr>
                     <th>3k-children</th>
                     <td><?php echo $kid3k; ?></td>
                   </tr>
                   <tr>
                     <th>3k-adult</th>
                     <td><?php echo $adu3k; ?></td>
                   </tr>
                   <tr>
                     <th>5k-adult</th>
                     <td><?php echo $adu5k; ?></td>
                   </tr>
                   <tr>
                     <th>10k-adult</th>
                     <td><?php echo $adu10k; ?></td>
                   </tr>
                 </tbody>
               </table>

                <h1>Progress</h1>
                <table data-role="table" id="table-column-toggle" class="ui-responsive table-stroke">
                 <thead>
                   <tr>
                     <th>Stopped  at</th>
                     <th>Count</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th>Select A category</th>
                     <td><?php echo $categ; ?></td>
                   </tr>
                   <tr>
                     <th>Select Branch</th>
                     <td><?php echo $branch; ?></td>
                   </tr>
                   <tr>
                     <th>Fill Basic Info</th>
                     <td><?php echo $reg1; ?></td>
                   </tr>
                   <tr>
                     <th>Fill Secondary Info</th>
                     <td><?php echo $reg2; ?></td>
                   </tr>
                   <tr>
                     <th>Finished Registration</th>
                     <td><?php echo $reg4; ?></td>
                   </tr>
                   <tr>
                     <th>Go to Thank you page</th>
                     <td><?php echo $findone; ?></td>
                   </tr>
                 </tbody>
               </table>

            </div><!-- /content -->
            <div data-role="footer">
                <h4>Alpha245</h4>
            </div><!-- /footer -->
        </div><!-- /page -->


    </body>
</html><!--code by Cyd cydmdalupan@gmail.com -->