<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <?php
            /*$room_is_filthy = false;

            if($room_is_filthy == false){
                echo "Yuk, Room is dirty : let's clean it up !";
               //cleanup_room();
                //echo "<br>Room is now clean!";
            } else {
                echo "<br>Nothing to do, room is neat.";
            }

            */ 
            $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

            // When testing, change the index value to navigate to the possible array values
            $room_filthiness = $possible_states[4]; 
            
            if($room_filthiness == $possible_states[0]){
                echo "Yuk, that's a health hazard in there! Let's clean up !";
            } else if( $room_filthiness == $possible_states[1]){
                echo "Yuk, Room is so filthy : let's clean it up !";
            } else if( $room_filthiness == $possible_states[2]){
                echo "Yuk, Room is so dirty : let's clean it up !";
            } else if( $room_filthiness == $possible_states[3]){
                echo "Your room is pretty clean, congrats!";
            } else {
                echo "Wow, this is so clean and immaculate";
            }  
        ?>
    </body>
</html>