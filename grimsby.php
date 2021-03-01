
<?php
// HTML template
include('includes/head.html');

// Check to see if the $_POST variable has been set by the user
if (!isset($_POST['data'])){
echo "No user Data In System<br><br><a href='index.php'>Try Again</a>";
}

else {
$data = $_POST['data'];

// input sanitize filter 
$sanitized = filter_var ($data , FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// pull in HTML template 
include('includes/body.html');

// Check the input is numeric
    if (!is_numeric($sanitized)){
    echo "You have not entered a number, please try again<br><br><a href='index.php'>Try Again</a>";
    }  

    // Check to see if the input is greater than 5
    else if($sanitized > 5){

        echo "Your number is bigger than 5, please try again with a
         number smaller than 5<br><br><a href='index.php'>Try Again</a>";

    }

    // Check to see if the number is less than 0
    else if($sanitized < 0){


        echo "Your number negative, please try again with a
        number bigger than 0<br><br><a href='index.php'>Try Again</a>";
        
    }

    /* if all the above is good, create a random number and check 
     to see if it matches with users guess */
    
     else {
        
         $random = rand(1 ,5);

        if ($random == $sanitized){

            // success message 
            echo "You WIN <br><br><a href='index.php'>Try Again</a>";

        }

        // faliure message 
        else {
        echo "You have not matched, 
        sorry you loose, please try again<br><br><a href='index.php'>Try Again</a><br>";
    
}
}
}
// pull in final piece of HTML template 
include('includes/footer.html');

?>
