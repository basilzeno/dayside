
<?php require_once('views/navigation.php'); ?>
<section>
    <div class="row col-md-4 col-md-offset-4">      
      <div class="panel panel-default">
        <div class="panel-heading"><h2>Войти как администратор</h2> </div>
        <div class="panel-body">
          <div class="error bg-danger"><?php echo isset($user) ? $user : ''; ?></div>
          <form role="form" method="POST" action="" id="login">
            <div class="form-group">
              <label for="username">Логин:</label>
              <input type="username" id="username" class="form-control" name="username" value="" required>
            </div>
            <div class="form-group">
              <label for="password">Пароль:</label>
              <input type="password" id="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Войти</button>
          </form>
        </div>
      </div>
    </div>
</section>
