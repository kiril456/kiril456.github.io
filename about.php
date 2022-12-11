
<?php include("path.php"); ?>
<?php include 'users.php';?>

<?php
$connect = new PDO("mysql:host=localhost; dbname=myforum; charset=utf8", 'root', '');

if (isset($_POST['username']) && isset($_SESSION['count'])){
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    $date = date('Y-m-d H:i:s');
    $query = $connect->query("INSERT INTO myforum.comments (username, comment, date)
        VALUES ('$username', '$comment', '$date')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=1">
    <link rel="stylesheet" href="css/style2.css?v=1">
    <title>Web Site</title>
</head>
<body>
    <?php require "blocks/headers.php"?>
    <h2>Comments</h2>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Your name">
            <textarea name="comment" cols="30" rows="10" placeholder="Your comments"></textarea>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>

    </div>
    <hr>
    <h2>Forum</h2>
    <?
    $comments = $connect->query("SELECT * FROM myforum.comments ORDER BY date DESC");
    $comments = $comments->fetchAll(PDO::FETCH_ASSOC);
    if (isset($_SESSION['count'])){
        if ($comments){
        foreach ($comments as $comment){
        ?>
            <div class="container comment">
                <table style="width:100%">
                    <tr>
                        <th>Name:  <?="{$comment['username']}"?></th>
                        <th>Date:  <?="{$comment['date']}"?></th>
                    </tr>
                    <tr>
                        <td><?="{$comment['comment']}"?></td>
                    </tr>
                </table>
            </div>
        <? }}else{ ?>

            <p>Now there are not comment</p>

    <?}}else{?>
        <p>You must register or log in to post comments</p>
    <?}?>

    <?php require "blocks/footer.php"?>
<body>