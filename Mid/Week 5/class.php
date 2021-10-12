<html>
    <body>
        <?php
        class Account
        {
            public $name;
            public $id;
            public $balance;
            function __construct($name, $id,$balance) 
            {
                $this->name = $name;
                $this->id = $id;
                $this->balance = $balance;
            }
            function get_name() 
            {
                return $this->name;
            }
            function get_id() 
            {
                return $this->id;
            }
            function get_balance() 
            {
                return $this->balance;
            }
            function withdraw($amount)
            {
                if($this->balance<$amount)
                {
                    echo ("Insufficient Balance");
                }
                else
                {
                    $this->balance -= $amount;
                    echo ("Current Balance After Withdrawal:");
                    
                    echo $this->balance;
                }
            }
            function deposit($amount)
            {
                $this->balance += $amount;
                echo ("Current Balance After Deposit :");
                echo $this->balance;
            }
            function transfer($amount,Account $obj)
            {
                $this->balance -= $amount;
                $obj->balance += $amount;
                echo ("Sender's Balance : ");
                echo $this->balance;
                echo "<br>";
                echo("Reciever's Balance : ");
                echo $obj->balance;
            }



            }

            $apple = new Account("Talha", "1999222", 5000);
            echo("Name :");
            echo $apple->get_name();
            echo "<br>";
            echo("ID :");
            echo $apple->get_id();
            echo "<br>";
            echo ("Balance:");
            echo $apple->get_balance();
            echo "<br>";
            echo $apple->withdraw(200);
            echo "<br>";
            echo $apple->deposit(200);
            echo "<br>";
            $banana = new Account("Tanvir", "1235222", 3000);
            echo $apple->transfer(200,$banana);




        ?>
    </body>
</html>        