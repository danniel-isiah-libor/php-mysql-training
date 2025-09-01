<?php
    namespace models;
    include_once '../traits/Database.php';
    

    class User {
        use Database;
        private $table = 'users';

        // Create new user
        public function create($data) {
            $sql = "INSERT INTO {$this->table} (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $this->mysql->prepare($sql);
            

            return $stmt->execute([
                ':name'     => $data['name'],
                ':email'    => $data['email'],
                ':password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ]);
        }
    }
?>