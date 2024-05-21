
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    
</head>
<body>
    <header>
        <span class="link">
            <a href="men.html" draggable="false">MEN</a>
            <a href="woman.html" draggable="false">WOMAN</a>
        </span>
        <nav class="navigation">
            <a href="homepage.html" draggable="false">SPHERE</a>
        </nav>
        <span class="about">
            <a href="about.html" draggable="false">ABOUT</a>
            <a href="cart.php" draggable="false">CART</a>
    </header>

    <main>
        <section class="cart-section">
            <div class="left-section">
                <!-- Scrollable container for products added to the cart -->
                <div class="scrollable-container">
                <?php
                /*
                        // Connect to the database
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "rutz";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Get the user's cart from the database

                        $sql = "SELECT idB FROM kosik" ;
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
    
                        $idBota = $row["idB"];
                            
                        } 

                        $sql = "SELECT * FROM objednavka WHERE idZ = $idBota";
                        $result = $conn->query($sql);

                        // Generate a new block for each product in the cart
                        while ($row = $result->fetch_assoc()) {
                            $product_id = $row["product_id"];
                            $shoe_size = $row["shoe_size"];
                            $sql = "SELECT * FROM products WHERE id = $product_id";
                            $product_result = $conn->query($sql);
                            $product = $product_result->fetch_assoc();
                            echo "<div class='product-block'>";
                            echo "<h2>". $product["name"]. "</h2>";
                            echo "<p>Price: ". $product["price"]. "</p>";
                            echo "<p>Shoe size: ". $shoe_size. "</p>";
                            echo "<button class='delete-button' data-product-id='". $product["id"]. "'>Delete</button>";
                            echo "</div>";
                        }
                         */
                        ?>
                    <div class="summary">
                        <p class="price-product-summary"><?php /* echo summary()." €"*/?></p>

                        <p class="Shipping-summary"></p>
                        <p class="finalprice-summary"></p>
                    </div>
                    <!-- More product blocks... -->
                </div>
            </div>
            <div class="right-section">
                

                    <!-- Contact information -->
        <form action="" method="get">
            <div>
                <h1 class="nadpis">CONTACT INFO</h1>
                    <div class="contact-info">
                        <input type="text" name="Cname" placeholder="NAME">
                        <input type="text" name="surname" placeholder="SURNAME">
                        <input type="text" name="email" placeholder="E-MAIL">
                        <input type="text" name="phone" placeholder="PHONE">

                </div>
            </div>
                    <!-- Shipping details -->

                    <div>
                        <h1 class="nadpis">SHIPPING DETAILS</h1>
                        <div class="shipping-details">
                            <input type="text" name="address1" placeholder="ADDRESS LINE 1">
                            <input type="text" name="address2" placeholder="ADDRESS LINE 2">
                            <input type="text" name="city" placeholder="CITY">
                            <input type="text" name="country" placeholder="COUNTRY">
                            <input type="text" name="psc" placeholder="ZIP CODE">
                        </div>

                        <div>
                            <h1 class="nadpis">PAYMENT METHOD</h1>
                        <div class="payment-methods">
                            <label for="apple-pay">
                              <input type="radio" id="apple-pay" name="payment-method" value="apple-pay">
                              <img src="./images/apple-pay.png" alt="Apple Pay" class="payment-image">
                            </label>
                            <label for="paypal">
                              <input type="radio" id="paypal" name="payment-method" value="paypal">
                              <img src="./images/paypal.png" alt="PayPal" class="payment-image">
                            </label>
                            <label for="master-card">
                                <input type="radio" id="master-card" name="payment-method" value="master-card">
                                <img src="./images/mastercard.svg" alt="master card" class="payment-image">
                              </label>
                            <label for="visa">
                              <input type="radio" id="visa" name="payment-method" value="visa">
                              <img src="./images/visa.png" alt="Visa" class="payment-image">
                            </label>
                          </div>
                        </div>
                    <!-- Fill out information for credit card, PayPal, etc. -->
                    <div class="payment-form">
                        <!-- Payment form fields -->
                        <h1 class="nadpis">PAYMENT DETAILS</h1>
                        <!-- Card payment-->
                        <input type="text" name="cardNumber" placeholder="CARD NUMBER">
                        <input type="text" name="cvv" placeholder="CVV">
                        <select name="expM" class="dropdown" >
                            <option value="m0" id="m0-option">EXPIRATION MONTH</option>
                            <option value="m1">1</option>
                            <option value="m2">2</option>
                            <option value="m3">3</option>
                            <option value="m4">4</option>
                            <option value="m5">5</option>
                            <option value="m6">6</option>
                            <option value="m7">7</option>
                            <option value="m8">8</option>
                            <option value="m9">9</option>
                            <option value="m10">10</option>
                            <option value="m11">11</option>
                            <option value="m12">12</option>
                        </select>
                            <select name="expY" class="dropdown" >
                                <option value="y0">EXPIRATION YEAR</option>
                                <option value="y1">2024</option>
                                <option value="y2">2025</option>
                                <option value="y3">2026</option>
                                <option value="y4">2027</option>
                                <option value="y5">2028</option>
                                <option value="y6">2029</option>
                                <option value="y7">2030</option>
                                <option value="y8">2031</option>
                                <option value="y9">2032</option>
                                <option value="y10">2033</option>
                            </select>
                        <!-- paypal,apple payment-->
                        <input type="text" name="email2" placeholder="E-MAIL">
                    </div>

                    


                    <!-- Checkout button -->
                    <div class="checkout-button-container">
                        <input type="submit" class="checkout-button" name="submit" value="CHECKOUT">
        
                    </div>
                </form>
                
            </div>
        </section>
    </main>
 
    <script src="sricpt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

<?php






function summary(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        $sql = "SELECT idB FROM objednavka" ;
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        $idBota = $row["idB"];
        }
        
        $price = 0;

        $sql = "SELECT price FROM boty WHERE idB = '$idBota'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        $price = $row["price"] + $price;
        }
        return $price;

}








function getID() {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    $sql = "SELECT idB FROM objednavka" ;
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    
    $idBota = $row["idB"];
    }
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";

$conn = new mysqli($servername, $username, $password, $dbname);



function price() {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM objednavka" ;
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $idBota = $row["idB"];
    }
    
    $sql = "SELECT price FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    return $row["price"];
    }
}

function shoeName() {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT idB FROM objednavka" ;
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    $idBota = $row["idB"];
    }
 

    $sql = "SELECT shoeName FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    return $row["shoeName"];
    }
}

if(isset($_POST["payment-method"])){
switch ($_POST["payment-method"]) {
    case 'apple-pay':
        # code...
        break;
    
    case 'paypal':
        # code...
        break;
        
    case 'master-card':
                # code...
         break;

     case 'visa':
                    # code...
        break;

    default:
        # code...
        break;
}
}






    if (isset($_GET["submit"])) {
        # code...
   
      
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vanaj";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        $sql = "INSERT INTO zakaznik (Cname, surname, email, phone, address1, address2, city, country, zip, cardNumber,cvv, expM,expY,email2)
        VALUES ('".$_GET["Cname"]."','".$_GET['surname']."','".$_GET['email']."','".$_GET['phone']."','".$_GET['address1']."','".$_GET['address2']."','".$_GET['city']."','".$_GET['country']."','".$_GET['psc']."','".$_GET['cardNumber']."','".$_GET['cvv']."','".$_GET['expM']."','".$_GET['expY']."','".$_GET['email2']."')";
    
        if (mysqli_query($conn, $sql)){
            
        } else {
            echo "Error: " . $sql . "<br>"  . mysqli_error($conn);
        }
        $conn->close();
     }
    

    
    


?>