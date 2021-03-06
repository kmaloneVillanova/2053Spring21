<?php
include 'travel-data.inc.php';

asort($countries);

// we will display the filtered array
$imagesToDisplay = array();

// first see if we should filter the countries
if (isset($_GET['country'])) {    
    // loop thru each image in dataset and see if its country matches request
    foreach ($images as $img) {
        if ($img['country'] == $_GET['country']) {
            // we have a match so add that image to filtered array
            $imagesToDisplay[$img['id']] = $img;
        }
    }
}
else {
    // no filter was specified so show all images in dataset
    $imagesToDisplay = $images;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travel Photos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/captions.css" />
</head>
<body>
    <!-- TO DO 1 - Include header.inc.php file -->
    <?php
    echo "<p align='center'>Include the header file here</p>";
   ?> 
    <!-- Page Content -->
    <main class="container">                                    
        <div class="btn-group countryButtons" role="group" aria-label="...">
          <a role="button" class="btn btn-default" href="index.php">All</a>
          
          <!-- TO DO 2 - Loop through countries array and list countries here for filtering image results -->
                    
              <a href="index.php?country=Canada" role="button" class="btn btn-default"> Canada</a>
             
        </div>          
           
		<ul class="caption-style-2">
            <!-- TO DO 3: Use a for loop to loop through the $imagesToDisplay array
            and display images. An image is hard-coded below for you to see the format. 
            Look in travel-data-inc.php for arrays and keys-->
			<li>
                <!--id is hard coded -->
                <a href="detail.php?id=22" class="img-responsive">
                <!--image path is hard coded, alt attribute is the title in the image array -->
                <img src="images/square/6114850721.jpg" alt="View of Cologne">
				<div class="caption">
					<div class="blur"></div>
					<div class="caption-text">
                        <!--image title is hard coded here -->
						<h1>View of Cologne</h1>
					</div>
				</div>
                    </a>
            </li>        
            <!--make sure to end the for loop-->
       </ul>       
    </main>
    
    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>            
        </div>
    </footer>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>