<?php

require_once 'dbconnect.php';

    class Book{

        public static function findById($id){

            global $pdo;

            $stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'book');
            $stmt->execute(['id' => $id]);
            

            return $stmt->fetch();
        }

        public static function findAll(){

            global $pdo;

            $stmt = $pdo->prepare('SELECT * FROM books');
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'book');
            $stmt->execute();

            return $stmt->fetchall();

        }
        
        public function delete () {

            global
            
        }
    }