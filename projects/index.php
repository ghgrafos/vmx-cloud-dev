<?php
require '../vendor/autoload.php';

include('')

//include_once('../../config/bootstrap.php');

use App\SQLiteConnection as SQLiteConnection;
use App\SQLiteTableList as SQLiteTableList;

$pdo = (new SQLiteConnection)->connect();

$sqlite = new SQLiteTableList((new SQLiteConnection())->connect());

// get the table list
//$tables = $sqlite->getTableList();

$projects = $sqlite->getProjectsList();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="sqlitetutorial.net">
        <title>GHRAFOS: Dashboard</title>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Dashboard</h1>
            </div>

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>Projetos</th>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $project) : ?>
                        <tr>
                            <td>table</td>
                            <td><?php echo $project->id; ?></td>
                            <td><?php echo $project->name; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </body>
</html>