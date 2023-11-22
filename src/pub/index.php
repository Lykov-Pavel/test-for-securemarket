<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test For Securemarket</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="/resources/css/signin.css">
    <script src="/resources/js/signin.js"></script>
</head>
<body class="text-center">

<main class="form-signin">
    <form id="form">
        <div class="alert alert-danger" id="alert" role="alert"></div>

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="text" class="form-control" name="user[firstname]" placeholder="Ivan" required>
            <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="user[lastname]" placeholder="Ivanov" required>
            <label for="floatingInput">Last Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="user[email]" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="user[password]" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="user[password-repeat]" placeholder="Password" required>
            <label for="floatingPassword">Repeat Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>

    <div class="success">
        <h2>Success!</h2>
    </div>
</main>
</body>
</html>