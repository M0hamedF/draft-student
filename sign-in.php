<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style_sign.css">
    <title>Sign-in</title>
</head>

<body>
    <div class="wrapper">
        <!-- LEFT IMAGE -->
        <div class="left">
            <div class="left-container">
                <h1>MAZE Student Portal</h1>
                <p>MAZE Student Portal is an online gateway where students can log in to access important program information. Student Portal contain information on courses, transcripts, timetables, exam schedules and department contact numbers.</p>
            </div>
        </div>
        <!-- RIGHT FORM -->
        <div class="right">
            <header class="header">
                <a class="top-text" href="index.php">
                    <img src="assets/img/Maze-logo.png" alt="Maze-logo">
                    <p><b>Student</b> Portal</p>
                </a>
            </header>
            <main class="card">
                <h1>Sign in</h1>
                <form action="login.php" method="POST" class="container">
                    <div class="input">
                        <label for="username">Email or Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter your email or username" required>
                    </div>
                    <div class="input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit">Sign in</button>
                </form>
                <hr>
                <div class="signup_link">
                    <p>Do not have an account? <a href="sign-up.php">Sign Up</a></p>
                </div>
            </main>
        </div>
        <div class="bottom-text">© 2026 All Rights Reserved</div>
    </div>
</body>

</html>