<?php

    mysqli_report(MYSQLI_REPORT_STRICT);

    //CONEXÃO COM O BANCO
    function open_database() {
        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            return $conn;
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    //FECHAMENTO DA CONEXÃO COM O BANCO
    function close_database($conn) {
        try {
            mysqli_close($conn);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    //LISTAR DADOS DE UMA TABELA
    function find( $table = null, $id = null ) {
  
        $database = open_database();
        $found = null;
    
        try {
          if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE CLIENTE_ID = " . $id;
            $result = $database->query($sql);
            
            if ($result->num_rows > 0) {
              $found = $result->fetch_assoc();
            }
            
          } else {
            
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            
            if ($result->num_rows > 0) {
              $found = $result->fetch_all(MYSQLI_ASSOC);
            
            }
          }
        } catch (Exception $e) {
          $_SESSION['message'] = $e->GetMessage();
          $_SESSION['type'] = 'danger';
      }
        
        close_database($database);
        return $found;
    }

    //LISTAR TODOS OS DADOS DE UMA TABELA 
    function find_all( $table ) {
        return find($table);
      }

    //FUNÇÃO GENÉRICA PARA INSERT NO BANCO
    function save($table = null, $data = null) {

        $database = open_database();
        
        $columns = null;
        $values = null;
        
        
        foreach ($data as $key => $value) {
            $columns .= trim($key, "'") . ",";
            $values .= "'$value',";
        }
        
        //RETIRAR A ULTIMA VIRGULA
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');
        
        $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
        
        try {
            $database->query($sql);
        
            $_SESSION['message'] = 'Registro cadastrado com sucesso.';
            $_SESSION['type'] = 'success';
        
        } catch (Exception $e) { 
        
            $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
            $_SESSION['type'] = 'danger';
        } 
        
        close_database($database);
    }

    //FUNÇÃO GENÉRICA PARA UPDATE NO BANCO
    function update($table = null, $id = 0, $data = null) {

        $database = open_database();
      
        $items = null;
      
        foreach ($data as $key => $value) {
          $items .= trim($key, "'") . "='$value',";
        }
      
        // remove a ultima virgula
        $items = rtrim($items, ',');
      
        $sql  = "UPDATE " . $table;
        $sql .= " SET $items";
        $sql .= " WHERE CLIENTE_ID =" . $id . ";";
      
        try {
          $database->query($sql);
      
          $_SESSION['message'] = 'Registro atualizado com sucesso.';
          $_SESSION['type'] = 'success';
      
        } catch (Exception $e) { 
      
          $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
          $_SESSION['type'] = 'danger';
        } 
      
        close_database($database);
    }

    //FUNÇÃO GENÉRICA PARA DELETE NO BANCO
    function remove( $table = null, $id = null ) {

        $database = open_database();
          
        try {
          if ($id) {
      
            $sql = "DELETE FROM " . $table . " WHERE CLIENTE_ID = " . $id;
            $result = $database->query($sql);
      
            if ($result = $database->query($sql)) {   	
              $_SESSION['message'] = "Registro Removido com Sucesso.";
              $_SESSION['type'] = 'success';
            }
          }
        } catch (Exception $e) { 
      
          $_SESSION['message'] = $e->GetMessage();
          $_SESSION['type'] = 'danger';
        }
      
        close_database($database);
    }





?>