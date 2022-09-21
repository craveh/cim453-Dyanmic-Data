<?php
// var_dump($_POST);
$response = $_POST;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Mad Libs</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="col">
           How To Cross Piranha Infested Water:
         </div>
       </div>
       <div class="row">
         <div class="col">
           <p>
             If you are traveling in
             <strong><?php echo $response['country'] ?></strong>
             and find yourself having to cross a piranha-filled river, here's how to do it
             <strong><?php echo $response['adverbs'][0] ?></strong>:
           </p>
           <ul>
             <li>Piranha's are more
               <strong><?php echo $response['adjectives'][0] ?></strong>
               during the day, so cross the river at night.
             </li>
             <li>Avoid areas with netted
               <strong><?php echo $response['animal'] ?></strong>
               traps - piranhas may be
               <strong><?php echo $response['ing-verb'][0] ?></strong>
               there looking to
               <strong><?php echo $response['verbs'][0] ?></strong>
               them!
             </li>
             <li>When
               <strong><?php echo $response['ing-verb'][1] ?></strong>
               the river, swim
               <strong><?php echo $response['adverbs'][1] ?></strong>.
               You don't want to wake them up and make them
               <strong><?php echo $response['adjectives'][1] ?></strong>.
             </li>
             <li>Whatever you do, if you have an open wound, try to find
               another way to find your way back to the
               <strong><?php echo $response['place'] ?></strong>. 
               Piranhas are attracted to fresh
               <strong><?php echo $response['liquid'] ?></strong>
               and will most likely take a bite out of your
               <strong><?php echo $response['body-part'] ?></strong>
               if you
               <strong><?php echo $response['verbs'][1] ?></strong>
               in the water!
             </li>
           </ul>

         </div>

       </div>

     </div>

   </body>
 </html>
