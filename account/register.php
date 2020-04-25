<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fitness First - Shop</title>
    <meta name="description" content="Online Store for Gym Equipment">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h1>Register Page</h1>
    <form method="post" action="register.php">
        <div class="field-column">
            <label> Name </label>
            <div>
                <input type="text" class="input-box" name="name">
            </div>
        </div>
        <div class="field-column">
            <label> Email Address </label>
            <div>
                <input type="text" class="input-box" name="email">
            </div>
        </div>
        <div class="field-column">
            <label> Password </label>
            <div>
                <input type="password" class="input-box" name="password" value="">
            </div>
        </div>
        <div class="field-column">
            <label> Confirm Password </label>
            <div>
                <input type="password" class="input-box" name="confirm_password" value="">
            </div>
        </div>
        <input type="submit" value="Start Shopping!" />

        <p>
            Already a member? <a href="login.php">Sign in</a>

        </p>


    </form>
    <script src=" https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>