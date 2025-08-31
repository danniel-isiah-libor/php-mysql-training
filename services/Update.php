<?php

    namespace services\posts;


    class Update
    {
        private $form;
        private $errors=[];

        public function __construct() {
            session_start();
            $this->form=$_POST;
        }
        
        public function process()
        {
            
            foreach ($this->form as $key => $value)
            {
                $this->form[$key]=$this->filterData($value);
            }

            $this->validateData();

            //save to database
            // var_dump($form);
            // var_dump($errors);

        }

        private function filterData($data)
        {
            $data = htmlspecialchars(trim($data));
            $data = trim($data);
            $data = stripslashes($data);

            return $data;
        }

        private function validateData()
        {
            

            //Validate / Required rule
            if (!isset($this->form['title']) || empty($this->form['title']))
            {
                $this->errors['title']='Title is required';
            } else if (strlen($this->form['title']) > 150)
            {
                $this->errors['title']='Title must not exceed 150 characters';
            }
            
            if (!isset($this->form['body']) || empty($this->form['body']))
            {
                $this->errors['body']='Message is required';
            } else if (strlen($this->form['body']) > 3000)
            {
                $this->errors['body']='Message must not exceed 3000 characters';
            }

            $_SESSION['errors']=$this->errors;
            
            if (!empty($this->errors))
            {
                $_SESSION['errors']=$this->errors;
                // var_dump($this->form);
                // var_dump($this->errors);
                header("Location: /php-mysql-training/post/create.php");
                exit();
            }
                var_dump($this->form);
                var_dump($this->errors);
            return $this;
        }

             
    
    }

    $process=new Create();
    $process->process();
    
?>