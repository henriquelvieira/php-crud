<?php

    require_once('config.php');
    require_once(DBAPI);

    $vgClientes = null;
    $vgCliente = null;


    //Listagem dos Clientes
    function index() {
        global $vgClientes;
        $vgClientes = find_all('T_CLIENTE');
    }



    function add() {

        if (!empty($_POST['cliente'])) {
          
          $today = 
            date_create('now', new DateTimeZone('America/Sao_Paulo'));
      
          $vCliente = $_POST['cliente'];
          $vCliente['CLIENTE_DT_MODIFIED'] = $customer['CLIENTE_DT_CREATED'] = $today->format("Y-m-d H:i:s");
          
          save('T_CLIENTE', $vCliente);
          header('location: '.BASEURL);
        }
      }


      function edit() {

        $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
      
        if (isset($_GET['id'])) {
      
          $id = $_GET['id'];
      
          if (isset($_POST['cliente'])) {
      
            $vCliente = $_POST['cliente'];
            $vCliente['CLIENTE_DT_MODIFIED'] = $now->format("Y-m-d H:i:s");
      
            update('T_CLIENTE', $id, $vCliente);
            header('location: '.BASEURL);
          } else {
      
            global $vgCliente;
            $vgCliente = find('T_CLIENTE', $id);
            
          } 
        } else {
          header('location: '.BASEURL);
        }
      }


      function delete($id = null) {

        global $vgCliente;
        $vgCliente = remove('T_CLIENTE', $id);
      
        header('location: '.BASEURL);
      }


      function view($id = null) {
        global $vgCliente;
        $vgCliente = find('T_CLIENTE', $id);
      }





?>