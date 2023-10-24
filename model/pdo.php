<?php


    function pdo_connect_db(){
        $dbUrl = "mysql:host=localhost;dbname=DangKySach";
        $user = "root";
        $pw = "";

        $conn = new PDO($dbUrl, $user, $pw);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_connect_db();

            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
        } catch (Exception $err){
            throw $err;
        } finally {
            unset($conn);
        }
    }

    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_connect_db();

            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
            return $row = $stmt -> fetchAll();
        } catch (Exception $err){
            throw $err;
        } finally {
            unset($conn);
        }
    }

    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_connect_db();
            $stmt = $conn -> prepare($sql);
            $stmt -> execute($sql_args);
            return $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        } catch (Exception $err){
            throw $err;
        } finally {
            unset($conn);
        }
    }
?>