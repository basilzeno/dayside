<style type="text/css">
#imagePreview {
    width: 320px;
    height: 240px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
#imagePreview img {
    max-width: 100%;
    max-height: 100%;
}


#lcol { display:inline-block; vertical-align:top;}
#content { width:250px;vertical-align:top; }
</style>

<?php require_once('views/navigation.php'); ?>
<section>
    <div>
      <?php if(isset($_SESSION['user_session'])) { ?>
      <div class="panel panel-default">
        <div class="panel-body">            
        </div>
      </div>
      <p><?php  if(isset($user_name)) echo $user_name; }?><p>    
          <div class="row col-md-4 col-md-offset-4">
     
      <div class="panel panel-default">
        <div class="panel-heading"> <h3>Напишите нам вашу проблему</h3></div>
        <div class="panel-body">
         
          <form role="form" method="POST" action="?controller=main&action=insertTask" id="insertTask" enctype="multipart/form-data">
            <div id="content">
            <div id="lcol">
            <div class="form-group">
              <label for="username">Имя пользователя:</label>
              <input type="username" id="username" class="form-control" name="username" value="" required>
            </div>
            <div class="form-group">
              <label for="password">е-mail:</label>
              <input type="username" id="email" class="form-control" name="email" >
            </div>
            <div class="form-group">
              <label for="taskText">Текст задачи:</label>
              <textarea id="taskText" name="taskText" cols="50" rows="3" ></textarea>
            </div>
            <div class="form-group">
              <input type="file" name="imageTask" id="imageTask" class="img" accept="image/x-png,image/jpeg"/>
            </div>
            </div>
            <div id="lcol">
              <div id="imagePreview">
               <img id="image" />
             </div>
             </div>
               <script type="text/javascript">


                document.getElementById("imageTask").onchange = function () {

                    var reader = new FileReader();

                    reader.onload = function (e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("image").src = e.target.result;
                    };

                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                };
                </script>
          
            <button type="submit" class="btn btn-primary btn-block">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</section>