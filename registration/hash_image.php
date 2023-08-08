<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if an image file was selected
    if (isset($_POST['image'])) {
        // Get the image data as a string
        $imageData = file_get_contents($_POST['image']);

        // Generate the SHA1 hash of the image data
        $hash = sha1($imageData);

        // Output the hash
        echo "Image SHA1 hash: " . $hash;
    }
    else {
        echo "No image file selected.";
    }
}
else {
    echo "Invalid request method.";
}
?>
