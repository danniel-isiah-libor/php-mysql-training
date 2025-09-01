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
            $password = "asdasd";
            $hashedPassword = password_hash($password,PASSWORD_BCRYPT);

            $query = "INSERT INTO users values (null,'resty1','resty@test.com','$hashedPassword')";
            $result = $this->mysql->query($query);
            var_dump($result);
            

            //UPDATE QUERY
            // $query = "UPDATE users SET email='jasdasd@test.com' WHERE id=2";
            // $result = $this->mysql->query($query);
            // var_dump($result);


            //DELETE QUERY
            // $query = "DELETE FROM users WHERE id=5";
            // $result = $this->mysql->query($query);
            // var_dump($result);


            return $this;
        }

        protected function addUser($data)
        {
            //INSERT QUERY
            $password = $data["password"];
            $hashedPassword = password_hash($password,PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $this->mysql->prepare($sql);
            

            return $stmt->execute([
                ':name'     => $data['name'],
                ':email'    => $data['email'],
                ':password' => $hashedPassword,
            ]);
        }


        protected function addPost($data)
        {
            //INSERT QUERY
            $sql = "INSERT INTO posts (title, message, created_at, updated_at, user_id) VALUES (:title, :message, :created_at, :updated_at)";
            $stmt = $this->mysql->prepare($sql);
            $userId = $_SESSION['user']['id'];

            return $stmt->execute([
                ':title'     => $data['title'],
                ':message'    => $data['message'],
                ':created_at' => 'NOW()',
                ':updated_at' => 'NOW()',
                ':user_id' => 1,
            ]);
        }

        public function __destruct()
        {
            $this->mysql->close();
        }
    }

?>