 <?php  
        echo "Hi anh em"."<br>";
        // Tên biến thì không cần xác định kiểu dữ liệu, nó tự xác định
        $a = 6;
        echo "My name is: ".$a."<br>";
        //Tên biến có phân biệt chữ in hoa in thường, còn keyword thì không
        $name = "Trung";
        $NAME = "LQTrung";
         echo "Biến name  =  ".$name." khác với biến NAME = "  .$NAME."<br>";
         // Biến toàn cục(global trong php chỉ có tác dụng trong phạm vi toàn bộ bên ngoài, không chui vào trong function được)
         function Name(){
             echo "name = ".$name;// Đây sẽ lỗi, $name không thể hoạt động trong phạm vi function này được. 
         }
         //Cách khắc phục lỗi ở hàm Name()là:
         function globalV() {
              $x = 100;
              global $name ;
               $name = $name. " CNTT01_K14";
              
             echo "Variable \$Name = ".$name."<br>";
         }
         globalV();
         echo "Variable x = ".$name;// Biến name toàn cục sẽ cập nhật giá trị sau khi chạy hàm globalV
        echo "<h3> Các kiểu dữ liệu trong php</h3>";
         //1.Kiểu string có thể chưa trong " " hoặc ' ' đều được
         $str1 = "LQT";
         $str2 = 'LQT';
         echo "String có thể chứa trong ngoặc kép hoặc ngoặc đơn: ". $str1 ." hoặc ".$str2 . "<br>";
         echo "<br>Kiểm tra kiểu dữ liệu của biến: ";
         var_dump($str1);
         $random = rand(10,1000);
         print "<br>Sử dụng hàm rand() trong để random một số trong 1 khoảng: random = ". $random;
         echo "<h3>Biến hằng trong php</h3>";
         define("Pii",3.14,false);
         echo "<br>Biến hằng Pi vừa khai báo Pi =" ;
         echo Pii;
        echo " <h3>Câu lệnh điều kiện if else trong PHP</h3>";
         $z = 10;
         if( $z == 0 )
            echo "<br>Câu lệnh if được thực thi";
            else if($z <0)
                echo "<br> Câu lệnh else thứ nhất được thực hiện";
                else
                    echo "<br> câu lệnh cuối cùng else được thực hiện.";
        echo "<h3>Vòng lặp foreach trong php</h3>";
        $arr = array(1,4,87,9,45);
        foreach($arr as $i   )
            echo $i."   ";
        echo "<h3>keyword static trong php dùng để chặn việc php tự động chuyển kiểu </h3>";
        function sum($f, $j){
            echo $f+$j;
        }
         //echo sum(5,"10 ngon tay");// Nếu không can thiệp bằng static thì nó sẽ convert cái biến thứ 2 là "10 ngon tay" thành kiểu số để cộng, và như thế là sai mong muốn của mình rồi. Trong trường hợp này thì 10 ở đầu chuỗi nên nó còn cộng được, nếu là 1 string không có chữ số là lỗi ngay.
        function sum2 ($z, $y) : float {
            return $z*$y;
        }
        $temp = sum2(5,10);
        echo "<br>".$temp;
        echo "<h3>Array in PHP</h3>";
        //1.Indexed Arrays
        
        $a1 = array("Lưu ","Quang","Trung");
        echo "<br>1. Indexed Array ";
        foreach($a1 as $i)
            echo $i."   ";

        echo "<br> 2. Asociative Array<br> ";
         $a2 = array("Trung" => 21 , "Hoa"=>24);
        foreach($a2 as $x => $x_value)   
            echo $x."=>".$x_value. "<br>";
        
         echo"<br> 3.Multidimensional Arrays";
        $person = array(
                array("Trung","Nam",21),
                array("Hoa","Nữ",24)
            );
        //Truy cập 1 phần tử
        echo "<br> Name = ".$person[0][0]." -  Sex = ".$person[0][1]." - Age = ".$person[0][2];
        //Truy cập mảng bằng for
        echo"<table>";
        echo"<th>Name</th>";
        echo"           <th>Sex  </th>";
        echo"           <th>Age  </th>";
        for($row=0; $row <2;$row++){
            echo "<tr></tr>";
                for($col = 0; $col<3;$col ++ ){
                    echo"<td>". $person[$row][$col] ."</td>";
 
                }
        }
        echo "</table>";

        echo"<h3>Biến siêu toàn cục( Superglobal) trong PHP</h3>";
        echo"1.Biến \$_SERVER <br>";
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER["SERVER_PORT"];
            echo "<br>";
            echo $_SERVER["HTTP_HOST"];
            echo "<br>";
            echo $_SERVER["SERVER_ADMIN"];
            echo "<br>";
            echo $_SERVER["SERVER_ADDR"];
        ?>

