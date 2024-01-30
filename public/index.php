
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Reader</title>
</head>
<body>

<h2>CSV File Contents</h2>

<table border="1">
    <tr>
        <th>Name</th>
        <th>First Name</th>
        <th>Comment</th>
    </tr>

    <?php

    // Define the path to your CSV file
    $csvFilePath = __DIR__ . '/names.csv';

    // Check if the file exists
    if (!file_exists($csvFilePath)) {
        die("CSV file not found");
    }

    // Open the CSV file
    $file = fopen($csvFilePath, 'r');

    // Check if the file is successfully opened
    if (!$file) {
        die("Error opening CSV file");
    }

    // Read and print each line of the CSV file
    while (($data = fgetcsv($file, 1000, ';')) !== false) {
        echo '<tr>';
        echo '<td>' . $data[0] . '</td>';
        echo '<td>' . $data[1] . '</td>';
        echo '<td>' . $data[2] . '</td>';
        echo '</tr>';
    }

    // Close the file
    fclose($file);

    ?>
</table>

</body>
</html>

