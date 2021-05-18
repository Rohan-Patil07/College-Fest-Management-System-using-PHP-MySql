# College-Fest-Management-System-using-PHP-MySql

This is a academic Project(VTU mini project) made to handle our college annual tech fest odyssey. This provides interface to schedule Events online ,
assign student co-ordinators for an event , host events department wise and more...

This is made using the LAMP stack in Ubuntu operating System
To use this:

For Linux users(Using LAMP stack :

1)Download the zip file

2)extract into /var/www/html

3)create a database named "fest" in phpmyadmin

4)And import the fest.sql file from Database folder

5)Enjoy ):




For windows users(Using XAMPP Server):

1)Download the zip file

2)extract into XAMPP/htdocs folder

3)create a database named "fest" in phpmyadmin

4)change the every line 

   $conn = mysqli_connect("localhost","Rohan","codeblind","fest");
   
   to 
   
    $conn = mysqli_connect("localhost","","","fest"); 
    
 5)And import the fest.sql file from Database folder
 
 6) Enjoy ):
