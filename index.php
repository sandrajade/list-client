<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Shop</title>
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a href="/my" class="btn btn-primary" role="button">New Client</a>
        <br>
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adress</th>
            <th>Created At</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "list-client";
           

            //-- create connection //
            $connection = new mysqli( $servername, $username, $password, $database);

            // chek connection //

            if ($connection->connect_error){
                die("connection failed: " . $connection->connect_error);
}
            // read all row from database table
            $sql = "SELECT * FROM clients";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
}
//on veut récuperer les données de chaque ligne//

$row = $result->fetch_assoc();
//On veut le preformater pour que ce soit plus lisible c'est une balise html//
echo '<pre>';
//On veut les afficher pour verifier que ça marche//
print_r($row);
//On refait un echo pour fermer la balise//
echo '</pre>';

?>
            <tr>
                <td>10</td>
                <td>Bill Gates</td>
                <td>bill.gates@microsoft.com</td>
                <td>+111222333</td>
                <td>New York, USA</td>
                <td>18/05/2022</td>
                <td> <a class="btn btn-primary btn-sm" href='/'>Edit</a>
                     <a class="btn btn-danger-sm" href='/'>Delete</a>
                </td>
            </tr>
        </tbody>
    </div>
</body>
</html>