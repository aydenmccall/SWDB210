<?php

/*
 *  Author: Ayden McCall
 * last edited: Ayden McCall
 * Mod Log:
 * 2/9/22: Instatiation
 */

class Database {

    private static $dsn = "mysql:host=localhost;dbname=javahouse";
    private static $username = "javahouseadmin";
    private static $password = "Pa55word";
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                        self::$username,
                        self::$password);
            } catch (Exception $e) {
                $error_message = $e->getMessage();
                exit();
            }
        }
        return self::$db;
    }

}

class Employee {

    private $first_name;
    private $last_name;

    public function __construct($f_name, $l_name) {
        $this->first_name = $f_name;
        $this->last_name = $l_name;
    }

    public function getFirstName() {
        return $this->first_name;
    }
    
    public function getLastName() {
        return $this->last_name;
    }
}

class EmployeeDB {
    public static function getEmployees() {
        $db = Database::getDB();
        $query = 'SELECT first_name, last_name FROM employee '
                . 'ORDER BY last_name';
        $statement = $db->prepare($query);
        $statement->execute();
        $full_names = $statement->fetchAll();
        $statement->closeCursor();
        
        $employees = array();
        
        foreach ($full_names as $full_name) {
            $employee = new Employee($full_name['first_name'], 
                    $full_name['last_name']);
            $employees[] = $employee;
        }
        return $employees;
    }
}

$employees = EmployeeDB::getEmployees();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="The Javahouse's Employee Page">
        <meta name="keywords" content="Coffee, Java, ContactForm">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Java House Employees</title>

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/coffee.css">
    </head>

    <body class="bg-darkblue">
        <nav class="navbar navbar-expand-lg p-3">
            <!--Div 1 is to force div 2 below when neccessary, it is expanded to 100 width when hamburger is clicked-->
            <div id="div1">
                <a class="navbar-brand nav-color hoverEffect" id="logo" href="index.html">The Java House</a>
                <button id="hamburgerButton" class="float-end"><i class="fa fa-bars"></i></button>
            </div>

            <div id="topnav">
                <ul class="navbar-nav nav-responsive">
                    <a class="nav-link hoverEffect nav-color" href="index.html"><li class="nav-item">Home</li></a>
                    <a class="nav-link hoverEffect nav-color" href="store.html"><li class="nav-item ">Store</li></a>
                    <a class="nav-link hoverEffect nav-color" href="contact.html"><li class="nav-item active">Contact</li></a>
                    <a class="nav-link hoverEffect nav-color" href="faq.html"><li class="nav-item">FAQ</li></a>
                    <!--<a class="nav-link hoverEffect nav-color" href="#"><li class="nav-item  mobile-only">Cart</li></a>-->
                </ul>
                
            </div>
            
            <!--<a href="#" class="ml-auto p-1 hoverEffect desktop-only nav-color" id="shopIcon"><i class="fa fa-shopping-cart"> Cart</i></a>-->
            
        </nav>



        <header class="text-center">
            <h1>Employees</h1>
        </header>

        <main>
            <?php foreach ($employees as $employee): ?>
            <p><?php echo "{$employee->getFirstName()} "
            . "{$employee->getLastName()}"; ?></p>
            <?php endforeach; ?>
        </main>

        <footer class="text-white text-center mt-3">
            <p>Reach out to us through our <a class="nav-color" href="contact.html">contact form!</a></p>
            <a href="#"><i class="fa fa-facebook mx-3" style="font-size: 50px;"></i></a>
            <a href="#"><i class="fa fa-instagram mx-3" style="font-size: 50px;"></i></a>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="js/coffee.js"></script>
    </body>
</html>

