
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'School_DB';

// Server is localhost with
// port number 3308
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM Info_Technology_Courses ORDER BY credits_value DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="CSS/stylesheet_1.css"/>
<script language="JavaScript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="Javascript/table_function.js"></script>

<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
        .button {
        cursor: pointer;
        float: right;
        }
        .disabled {
        opacity: 0.6;
        cursor: not-allowed;
        float: right;
        }
        .line{
            border-left: 1px solid rgb(204, 204, 204);
            outline: none;
            padding: 10px;
            vertical-align: middle;
            display:inline;
            margin-left:15px;
            margin-right:0;
        }
        p{
            color:white;
            text-align:left;
            display:inline;
            vertical-align:baseline;
        }
	</style>
    
</head>

<body>
	<section>
    <div id="first" class="loginField">
        <header>

    <table cellspacing="0" border="0" style="background-color: #b20b36;">
        <tr>
        <td style="border:none">
        <img src="assets/images/school.png" class="left" style="vertical-align:text-bottom";><div class="line"></div><p>Powered by Unirej</p>
        </td>
        <td style="border:none">
        <div class="top">Niomi Marshall   ▽
        <br><br><br>
        61/121 Credits</div>
        </td>

    </tr>
    </header>
    </table>

    <table>
	<thead>
		<tr>
			<th colspan="6"><b>SCHOOL OF ARTS AND SCIENCES</b></th>
		</tr>
		<tr>
			<th colspan="6" bgcolor="#242C67" align="center"> <p style="color:white">Registration Schedule Fall 2019</p></th>
		</tr>
		<tr><th colspan="6" align="center"> Information Technology Available Courses</th>
		</tr>
		<tr align = "left"><td colspan="6" > Show Completed Courses <input type="checkbox" name="course" value="show"></td>
		</tr>
	</thead>
	<tbody>
		<tbody class="labels">
			<tr>
				<td colspan="6">
					Department Core <label for="department core" id="dc" onclick="myFunction()">[-]</label>
					<input type="checkbox" name="department core" id="department core" data-toggle="toggle">
				</td>
			</tr>
			<tr>
				<td style="background-color:#8c8582">Course Code</td>
				<td style="background-color:#8c8582">Course Name</td>
				<td style="background-color:#8c8582">Credits</td>
				<td style="background-color:#8c8582">Pre-requisite</td>
				<td style="background-color:#8c8582">Students Registered</td>
                <td style="background-color:#8c8582">Apply</td>
			</tr>
		</tbody> 

			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
            <tbody class="hide">
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['it_course_code'];?></td>
				<td><?php echo $rows['it_course_name'];?></td>
				<td><?php echo $rows['credits_value'];?></td>
				<td><?php echo $rows['it_pre-requisite'];?></td>
                <td><?php echo $rows['it_students_reg'];?>/24</td>
                <td><input type="checkbox"> Apply</td>
			</tr>
            </tbody>

            <tbody class="labels">
			<tr>
				<td colspan="6">
					Major Core <label for="major core" id="mc" onclick="myFunction2()">[-]</label>
					<input type="checkbox" name="major core" id="major core" data-toggle="toggle">
				</td>
			</tr>
		</tbody>

			<?php
				}
			?>
		</table>
	</section>
</body>

</html>

