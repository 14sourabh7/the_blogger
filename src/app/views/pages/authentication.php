<!DOCTYPE html>
<html lang="en">

<head>
    <title>Authentication</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    include '../app/views/components/navbar.php';
    ?>

    <main class="form-signin">
        <form method="post" action="operation" style="width: 50%;" class="mx-auto mt-5">

            <h1 class="h3 mt-3 fw-normal text-center">Please sign in</h1>

            <div class="form-floating mt-3 w-75 mx-auto">
                <input type="email" class="form-control email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mt-5 w-75 mx-auto">
                <input type="password" class="form-control password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <p id='error' class='text-danger'></p>
            <br>
            <a class="w-100 btn btn-lg btn-danger signin" type="submit">Sign in</a>
            <a href="/pages/signup">Not a User? Sign Up</a>
        </form>
    </main>

    <?php
    include '../app/views/components/footer.php';
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/javascript/authentication.js"></script>

</html>