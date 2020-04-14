
   <?php
      if(isset($_POST['id']))
      {
        $eventData = $_POST['id'];
        echo $eventData;
        header('Content-Type: application/json');
         echo json_encode($event_Data);
      }else{
        echo "Not Found";
      }

      //Get the information you want, and turn it into an array called $data



   ?>
