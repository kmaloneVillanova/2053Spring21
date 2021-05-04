<?php
include 'travel-data.inc.php';

asort($countries);
asort($continents);

$defaultId = 22;

// first find out which image was requested
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if (! array_key_exists($id, $images)) {
        $id = $defaultId;
    }
}
else {
    $id = $defaultId;
}
$requestedImage = $images[$id];       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chapter 12</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
</head>
<body>
   <!-- TO DO 1 - Include header.inc.php file -->
   <?php
    echo "<p align='center'>Include the header file here</p>";
   ?>
    <!-- Page Content -->
    <main class="container">
        <div class="row">
    <!-- TO DO 1A - Include left.inc.php file here -->
        <?php
    echo "<p align='center'>Include the left.inc.php file here</p>";
   ?>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                        <!--TO DO 2 Replace hard coded path, alt attribute and description with value from requstedImage array -->
                        <img class="img-responsive" src="images/medium/6114850721.jpg" alt="View of Cologne">
                        <p class="description">View of Cologne from atop the Cologne Cathedral</p>
                    </div>

                    <!--TO DO 3 - Replace all hard coded content where indicated --> 
                    <div class="col-md-4">
                        <!--Replace with title of requstedImage-->
                        <h2>View of Cologne</h2>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="details-list">
                                    <!--Replace with user from requestedImage-->
                                    <li>By: <a href="#">Joao Fernandes</a></li>
                                     <!--Replace with country from requestedImage-->
                                    <li>Country: <a href="#">Germany</a></li>
                                     <!--Replace with city from requestedImage-->
                                    <li>City: <a href="#">Cologne</a></li>
                                     <!--Replace with taken from requestedImage-->
                                    <li>Taken on: August 8, 2017</li>
                                </ul>
                            </div>
                        </div>

                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-save" aria-hidden="true"></span></button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
                            </div>
                        </div>

                        <h4>Tags</h4>
                        <div class="panel panel-default">
                            <div class="panel-body" id="tags">
                                <!--TO DO 4 Loop through the tags array from the requestedImage and display-->
                               
                                    <span class="label label-default">cathedral</span>
                                    <span class="label label-default">high</span>
                                    <span class="label label-default">birds-eye</span>
                        
                            </div>
                        </div>

                    </div>  <!-- end right-info column -->
                </div>  <!-- end row -->
                
                
                
            <!-- Related Projects Row -->

            <!-- /.row -->
                            

            </div>  <!-- end main content area -->
        </div>
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