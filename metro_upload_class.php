<?php 

/*
* Firstly note that we could have done this basically
* done ths the procedural way, but to get things done
* according to best practices that is why am trying to
* Use the object oriented pattern of things
*/

class MetroFileUploads{

/*
* The code below simply states the particular
* directory which we want to put or rather store
* the images.
*/

$target_directory_to_push_image = "C:/users/temp/data";

function moveUploadedFileToDestination(){
  /*
  * We would create a variable and initialize
  * it to hold our conditions which would aid
  * to push our pictures to the right folder
  */
  
  if(is_array($_FILES)){
    
    /*
    * The @param (is_uploaded_file) is an inbuilt
    * PHP function which is used to check the file 
    * and also holds the temporary name of the pic
    */
    
    if(is_uploaded_file($_FILES["myPicture"]["tmp_name"]){
      
      /*
      * The @param (move_uploaded_file) is an inbuilt PHP
      * function which moves the picture from a temporary 
      * folder to the folder it is meant to stay
      */
      
      if(move_uploaded_file($FILES["myPicture"]["tmp_name"],"$target_directory_to_push_image". $_FILES["myPicture"]["name"]){
        echo "file uploaded successfully";
      }
    }
  }
}
}
