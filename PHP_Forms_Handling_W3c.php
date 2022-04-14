<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling by Get and Post </title>
</head>
<body>
   <!-- 1.Sử dụng method = "post", dữ liệu sau khi ấn submit sẽ được gửi đi theo phương thức HTTP POST -->
    <form action="PHP_Forms_W3c.php" method = "post">
        <label for="">Name</label>
        <input type="text" sizeof = "30" name = "name">
        <br>
        <label for="">Email</label>
        <input type="text" sizeof = "30" name = "email">
        <br>
        <input type="submit">
        
    </form>
    <!-- Ở đây là ta thực hiện luôn trên 1 file php, trong thực tế thì html là phần front-end và php là phần back end nên nó sẽ là 2 file khác nhau, tuy nhiên chỉ cần chỗ action của form chỉ đúng url là oce. -->
     <?php
        echo "Hello ". $_POST["name"];// Lấy dữ liệu của thẻ input thông qua name 
        echo "<br>";
        echo " Your email address is :". $_POST["email"];
    ?> 
     <!-- 2. Sử dụng method = "get", dữ liệu cũng được thu thập và gửi đi theo phương thức HTTP GET -->
     <br>
    <form action="PHP_Forms_W3c.php" method = "get">
    <label for="">Address</label>
        <input type="text" sizeof = "30" name = "address">
        <br>
        <label for="">Phone</label>
        <input type="text" sizeof = "30" name = "phone">
        <br>
        <input type="submit">
    </form>
    <?php
        echo "Your address is: ". $_GET["address"]."<br>";
        echo "Your phone number is: ".$_GET["phone"];
    ?>
</body>
</html>