<?php include 'header.php';?>
    <section class="login-form-wrap">
        <h1>Login</h1>
        <form class="login-form" name="signup-form" action='reg.php' method='POST' >
          <label class="eml">
            <input type="text" name="username" placeholder="Username" required>
          </label>
          <label class="eml">
            <input type="password" name="password" placeholder="Password" required>
          </label>
          <label class="eml">
          <input type="email" name="email" placeholder="Email" required />
          </label>
          <input type="submit" name="register" value="register">
        </form>
        <h5><a href="blog_reg.php">Forgot password</a></h5>
      </section>

</body>
</html>