## PHP-file-uploads--very-minimal-code
> This very simple lines of code would explain the basics of Uploading pictures in PHP , one should be able to get a very clear grasp on what it entails and how to go about it, you can try to include other features. 

## Explanations
> The files are just two and minimal, download the zip and then extract,make sure your localhost is turned on, and then run the file using the command: http://localhost/php-file-uploads--very-minimal-code  now you can really choose to add more functions in your class such as checking the image type and size using the $_files variables.

## Some helpful php $_files func
> The filesize() function in PHP would help you to check the filesize of the image, you can use it like this as stated below (reason i did not add it to the main code is for you to get your hands dirty on it).
if(filesize($_FILES["myPicture"]["tmp_name"]) > 3000){
echo "sorry your file is too big!";
}

> Furthermore you can implement your code also for the image type using the filetype function.
