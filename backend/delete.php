<?php
// require 'session.php';
// echo "yo item delete huncha hai";
// var_dump($_POST['deleteIndex']);
?>
<?php
session_start();
require 'session.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the deleteIndex value is set in the POST data
    if (isset($_POST['deleteIndex'])) {
        // Retrieve the value of deleteIndex from the POST data
        $deleteIndex = $_POST['deleteIndex'];

        // Now you can use $deleteIndex as needed
        if(array_key_exists($deleteIndex,$combinedArrayReversed)){
            unset($combinedArrayReversed[$deleteIndex]);
            //var_dump($combinedArrayReversed);

            //updating the session values
            $_SESSION['heading'] = array_keys($combinedArrayReversed);
            $_SESSION['paragraph'] = array_values($combinedArrayReversed);
        }
        header('Location: /');
    } else {
        // If deleteIndex is not set in the POST data, handle the error
        echo "Error: deleteIndex not found in POST data.";
    }
} else {
    // If the request method is not POST, handle the error
    echo "Error: This page should only be accessed via POST request.";
}
?>
