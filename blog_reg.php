<?php include 'header.php';?>
    <section class="login-form-wrap">
        <h1>Login</h1>
        <form class="login-form" name="signup-form" action='reg.php' method='POST' >
          <div>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div>
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div>
            <input type="submit" name="register" value="Register">
          </div>
        </form>
      </section>

</body>
</html>