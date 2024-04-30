<html>
    <head>
        <title>Test</title>
        <body>
            <form>
                <label>Customers</label>
                <select name="customer">
                <?php
                $servername = "localhost";
                $username = "u745359346_WDI_OCT23_T4";
                $password = "WDI@Calanjiaym#OCT23_T4";
                $database = "u745359346_quotation_OCT";
                
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM customer";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
                    echo "<option value='".$row['cid']."'>".$row['cname']."</option>";
                }
                ?>
                </select>
                <label>Choose P1</label>
                <select name="p1">
                <?php
                $servername = "localhost";
                $username = "u745359346_WDI_OCT23_T4";
                $password = "WDI@Calanjiaym#OCT23_T4";
                $database = "u745359346_quotation_OCT";
                
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
                    echo "<option value='".$row['pid']."'>".$row['pname']."</option>";
                }
                ?>
                </select>
                <label>Choose P2</label>
                <select name="p2">
                <?php
                $servername = "localhost";
                $username = "u745359346_WDI_OCT23_T4";
                $password = "WDI@Calanjiaym#OCT23_T4";
                $database = "u745359346_quotation_OCT";
                
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
                    echo "<option value='".$row['pid']."'>".$row['pname']."</option>";
                }
                ?>
                </select>
                <label>Choose P3</label>
                <select name="p3">
                <?php
                $servername = "localhost";
                $username = "u745359346_WDI_OCT23_T4";
                $password = "WDI@Calanjiaym#OCT23_T4";
                $database = "u745359346_quotation_OCT";
                
                $conn = new mysqli($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM product";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
                    echo "<option value='".$row['pid']."'>".$row['pname']."</option>";
                }
                ?>
                </select>
                <input type="submit" value="Test">
            </form>
        </body>
    </head>
</html>