<?php include 'header.php';?>
    <section class="login-form-wrap">
        <h1>Login</h1>
        <form class="login-form" name="signin-form" action='' method='POST' >
          <label class="eml">
            <input type="text" name="username" placeholder="Username or Email" required>
          </label>
          <label class="eml">
            <input type="password" name="password" placeholder="Password" required>
          </label>
          <button class='eml' type="submit" name="login" value="login">Log In</button>
        </form>
        <h5><a href="blog_reg.php">Don't have a account yet?</a></h5>
      </section>
</body>
</html>