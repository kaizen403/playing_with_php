<?php include 'header.php';?>
    <section class="login-form-wrap">
        <h1>Login</h1>
        <form class="login-form" name="signin-form" action='login.php' method='POST' >
          <label class="eml">
            <input type="text" name="username" placeholder="Username or Email" required>
          </label>
          <label class="eml">
            <input type="password" name="password" placeholder="Password" required>
          </label>
          <input class='eml' type="submit" name="login" value="login">
        </form>
        <h4><a href="blog_reg.php">Don't have a account yet?</a></h4>
      </section>
</body>
</html>