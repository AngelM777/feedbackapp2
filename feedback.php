<?php include 'inc/header.php'; ?>

<?php

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Fetch feedback from the database
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);

// Check if any feedback was found
if (mysqli_num_rows($result) == 0) {
    echo '<p class="lead mt-3">There is no feedback.</p>';
} else {
    // Display each feedback item
    while ($item = mysqli_fetch_assoc($result)) {
        echo '<div class="card my-3 w-75">
                <div class="card-body text-center">' .
                    $item['body'] . '
                    <div class="text-secondary mt-2">By ' .
                        $item['name'] . ' on ' . $item['date'] .
                    '</div>
                </div>
            </div>';
    }
}
?>

<?php include 'inc/footer.php'; ?>