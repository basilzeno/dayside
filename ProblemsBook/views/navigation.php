

<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="row">            
            <?php 
            if(isset($_SESSION['user_session'])){ ?>
                <div >
                    <a href='?controller=users&action=logout'>Выйти</a>
                </div>
            <?php }else{ ?>
                <div >
                <a href='?controller=users&action=login'>Войти как администратор</a>
                </div>
            <?php } ?>  
        </div>
    </div>
</nav>