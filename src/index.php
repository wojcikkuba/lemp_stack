<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LEMP Stack</title>
    </head>
    <body>
	<h3>LEMP Stack Test | Jakub Wojcik</h3>
	<hr>

	<?php
        $connection = new PDO('mysql:host=mysql;dbname=lemp_test;charset=utf8', 'root', 'password');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'lemp_test'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
        } else {
            echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>

    </body>
</html>
