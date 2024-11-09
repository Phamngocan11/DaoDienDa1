<?php

function pdo_get_connection()
{
    // Sử dụng biến môi trường để lưu trữ thông tin nhạy cảm
    $dburl = getenv('DB_URL') ?: "mysql:host=localhost;dbname=duanmau;charset=utf8";
    $username = getenv('DB_USERNAME') ?: 'root';
    $password = getenv('DB_PASSWORD') ?: '';

    try {
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        error_log($e->getMessage(), 3, 'pdo_errors.log'); // Ghi lỗi vào file log
        throw $e;
    }
}

function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    $conn = null;
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        error_log($e->getMessage(), 3, 'pdo_errors.log');
        throw $e;
    } finally {
        if ($conn) {
            $conn = null; // Đóng kết nối
        }
    }
}

function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    $conn = null;
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log($e->getMessage(), 3, 'pdo_errors.log');
        throw $e;
    } finally {
        if ($conn) {
            $conn = null; // Đóng kết nối
        }
    }
}

function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    $conn = null;
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log($e->getMessage(), 3, 'pdo_errors.log');
        throw $e;
    } finally {
        if ($conn) {
            $conn = null; // Đóng kết nối
        }
    }
}

function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    $conn = null;
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? array_values($row)[0] : null;
    } catch (PDOException $e) {
        error_log($e->getMessage(), 3, 'pdo_errors.log');
        throw $e;
    } finally {
        if ($conn) {
            $conn = null; // Đóng kết nối
        }
    }
}

?>
