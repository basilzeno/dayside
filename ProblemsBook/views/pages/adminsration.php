<?php require_once('views/navigation.php'); ?>
<script type="text/javascript">

$(document).on('change', '[type=checkbox]', function() {
alert("hi");
});

</script>
<script src="sorttable.js"></script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <style type="text/css">
            tr.header
            {
                font-weight:bold;
            }
            tr.alt
            {
                background-color: #777777;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.striped tr:even').addClass('alt');
            });
        </script>
        <title></title>
    </head>
    <body>
      <div class="panel panel-default" style="width: 100%; margin: 0 auto; " >
        <div class="panel-body">
        <form  action="?controller=main&action=requestModel"  method="post" >
          <input type="submit" value="Показать" />
        </form>
        </div>
        <table  id="allTasks" class="sortable" style="width: 100%; margin: 0 auto;     ">
            <tr class="header" style="color:indigo">
                <td>Имя пользователя</td>
                <td>е-mail</td>
                <td>Текст задачи</td>
                <td>Картина</td>
                <td>Статус</td>
            </tr>
            <?php
             if(isset($tasks))
              foreach ($tasks as $row) {
                   echo "<tr>";
                   echo "<td>".$row['username']."</td>";
                   echo "<td>".$row['email']."</td>";
                   echo "<td>".$row['taskText']."</td>";
                   echo "<td><img src='".$row['image_path']."' width='320' height='240''/></td>";
                   echo '<td><input type="checkbox" id="status_id" name="s_'.$row['id'].'"  value="' . $row['status'] . '"></td>';
                   echo "</tr>";
               }

            ?>
        </table>
        </div>
    </body>
</html>