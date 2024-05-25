<!DOCTYPE HTML>
<html>
    <head>
        <title>management</title>

        <link rel="stylesheet" type="text/css" href="ast.css">

    </head>
    <body>
        <h1>REGISTRATION FORM</h1>
        <div>
    <form action="asteria.php" method="POST">

        <label for="">firstname</label>
        <input type="text" name="firstname" placehorder="enter your firstname" required>

        <label for="">lastname</label>
        <input type="text" name="lastname" placehorder="enter your lastname" required>

        <label for="">email</label>
        <input type="email" name="email" placehorder="enter your email" required>

        <label for="">region</label>
        <input type="text" name="region" placehorder="enter your region" required>

        <label for="">age</label>
        <input type="number" name="age" placehorder="enter your age" required>

        <label for="">gender</label>
        <input type="radio" name="female" required>
        <input type="radio" name="male" required>

        <label for="">date</label>
        <input type="date" name="date" placehorder="select date" required>

        <label for="">password</label>
        <input type="password" name="password" placehorder="enter your password" required>

        <button type="button" name="submit">submit</button>

    </div>
  
    </form>
</body>
</html>