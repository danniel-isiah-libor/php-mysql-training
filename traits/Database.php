<?php
    trait Database
    {
        protected function performQuery()
        {
            //SELECT QUERY
            // $query = "SELECT * FROM users";
            // $results = $this->mysql->query($query);

            // if ($results->num_rows > 0) {
            //     while ($row = $results->fetch_assoc())
            //     {
            //         var_dump($row);
            //     }

                
            // }

            //INSERT QUERY
            // $password = "jaypee";
            // $hashedPassword = password_hash($password,PASSWORD_BCRYPT);

            // $query = "INSERT INTO users values (null,'jaypee','jaypee@test.com','$hashedPassword')";
            // $result = $this->mysql->query($query);
            // var_dump($result);
            

            //UPDATE QUERY
            $query = "UPDATE users SET email='jasdasd@test.com' WHERE id=2";
            $result = $this->mysql->query($query);
            var_dump($result);


            //DELETE QUERY
            // $query = "DELETE FROM users WHERE id=5";
            // $result = $this->mysql->query($query);
            // var_dump($result);


            return $this;
        }

        public function __destruct()
        {
            $this->mysql->close();
        }
    }

?>