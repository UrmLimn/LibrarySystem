<?php
  include '../../includes/init.php';

  // If user is not logged in yet, the home page cannot be displayed.
  if(logged_in() === false) {
    header('Location: ../index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home - Library System</title>

		<meta name="description" content="A library system to store, lend and return books.">
		<meta charset="UTF-8">

		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" type="text/css" href="../css/home.css">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<div id="header">
			<a href="../index.php"><img src="../images/logo.png" width="50px" height="50px" id="logoimg"></a>
			<form id="searchfrm">
				<input type="search" name="search" placeholder="Search" id="searchinpt"></input>
				<input type="submit" id="searchbtn" value=""></input>
			</form>
		</div>
		<div class="dropdown">
  			<button class="dropbtn">Profile</button>
  			<div class="dropdown-content">
    			<a href="#">Settings</a>
    			<a href="#">Privacy</a>
    			<a href="../logout.php">Logout</a>
  			</div>
		</div>
		<div id="profilesctn">
			<img src="../images/profile_pic.png" width="125px" height="125px"
			id="profilepic">
			<p id="profilename">Johnny Example</p>
			<p id="profiledscrptn">Use this section to desribe yourself in a few words.</p>
		</div>

		<div id="mainsctn">
			<p class="bold">Advanced search:</p>
			<form id="advancedsrch">
				<div id="booksrch">
					<select name="bookslct" class="selectform">
    					<option value="AND">AND</option>
    					<option value="OR">OR</option>
    					<option value="NOT">NOT</option>
  					</select>
  					<input placeholder="Book" type="text" id="booksrchinpt" class="advancedsearchinpt"></input>
				</div>
				<div id="authorsrch">
					<select name="authorslct" class="selectform">
    					<option value="AND">AND</option>
    					<option value="OR">OR</option>
    					<option value="NOT">NOT</option>
  					</select>
  					<input placeholder="Author" type="text" id="authorsrchinpt" class="advancedsearchinpt"></input>
				</div>
				<div id="publishingyearsrch">
					<select name="publishingyearslct" class="selectform">
    					<option value="AND">AND</option>
    					<option value="OR">OR</option>
    					<option value="NOT">NOT</option>
  					</select>
  					<input placeholder="Publishing year" type="text" id="publishingyearsrchinpt" class="advancedsearchinpt"></input>
				</div>
				<div id="languagesrch">
					<select name="languageslct" class="selectform">
    					<option value="AND">AND</option>
    					<option value="OR">OR</option>
    					<option value="NOT">NOT</option>
  					</select>
  					<input placeholder="Language" type="text" id="languagesrchinpt" class="advancedsearchinpt"></input>
				</div>
				<input type="submit" value="Search" id="searchsubmitbtn"></input>
			</form>
			<hr>
			<p class="bold">Books you've borrowed:</p>
			<table>
  				<tr>
    				<td class="tableclmn"><p class="columnname">Book</p></td>
    				<td class="tableclmn"><p class="columnname">Author</p></td>
    				<td class="tableclmn"><p class="columnname">Borrowing date</p></td>
    				<td class="tableclmn"><p class="columnname">Returning date</p></td>
    				<td class="tableclmn"><p class="columnname">Return</p></td>
  				</tr>
  				<tr>
    				<td class="tabledata"><p class="columndata">A book name example</p></td>
    				<td class="tabledata"><p class="columndata">Sherlock Holmes</p></td>
    				<td class="tabledata"><p class="columndata">08.06.2016</p></td>
    				<td class="tabledata"><p class="columndata">08.07.2016</p></td>
    				<td class="tabledata"><form><input type="submit" value="Return" class="returnbtn"></input></form></td>
  				</tr>
  				<tr>
    				<td class="tabledata"><p class="columndata">A book name example that is even longer</p></td>
    				<td class="tabledata"><p class="columndata">Sherlock Holmes</p></td>
    				<td class="tabledata"><p class="columndata">08.06.2016</p></td>
    				<td class="tabledata"><p class="columndata">08.07.2016</p></td>
    				<td class="tabledata"><form><input type="submit" value="Return" class="returnbtn"></input></form></td>
  				</tr>
  				<tr>
    				<td class="tabledata"><p class="columndata">Hello</p></td>
    				<td class="tabledata"><p class="columndata">Sherlock Holmes</p></td>
    				<td class="tabledata"><p class="columndata">08.06.2016</p></td>
    				<td class="tabledata"><p class="columndata">08.07.2016</p></td>
    				<td class="tabledata"><form><input type="submit" value="Return" class="returnbtn"></input></form></td>
  				</tr>
  			</table> 
		</div>

		<script type="text/javascript" language="JavaScript" src="../js/home.js"></script>
	</body>
</html>