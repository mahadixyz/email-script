<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Send Email</title>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-6 mx-auto mt-5 p-5 broder">
                <?php
                    if(isset($_SESSION['success']))
                    {
                        echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
                        session_destroy();
                    }
                    else if(isset($_SESSION['error']))
                    {
                        echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                        session_destroy();
                    }
                    else
                    {
                        echo '<div class="alert alert-primary">Send a Email from here.</div>';
                    }
                ?>
                <form action="action.php" method="POST">
                    <div class="mb-3">
                        <label for="email-field" class="form-label">Email address</label>
                        <input type="email" name="recipient" class="form-control rounded-0" placeholder="name@example.com" id="email-field">
                    </div>

                    <div class="mb-3">
                        <label for="subject-field" class="form-label">Mail Subject</label>
                        <input type="text" name="subject" class="form-control rounded-0" placeholder="Message subject" id="subject-field">
                    </div>

                    <div class="mb-3">
                        <label for="body-field" class="form-label">Message Body</label>
                        <textarea name="body" class="form-control rounded-0" placeholder="Write your message here" id="body-field"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary rounded-0">Send</button>
                </form>

            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>