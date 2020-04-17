<?php 
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        require 'include.php';
        if ($_GET['controller']==='default' && $_GET['action']==='home')
        {
           $ravioleController = new DefaultController();
           $ravioleController->home();
        }

        else if ($_GET['controller']==='raviole' && $_GET['action']==='add')
        {
           $ravioleController = new RavioleController();
           $ravioleController->add();
        }

        else if ($_GET['controller']==='raviole' && $_GET['action']==='addDone')
        {
           $ravioleController = new RavioleController();
           $ravioleController->addDone();
        }

        else if ($_GET['controller']==='raviole' && $_GET['action']==='delete' && isset($_GET['id']))
        {
           $ravioleController = new RavioleController();
           $ravioleController->delete($_GET['id']);
        }

        else if ($_GET['controller']==='raviole' && $_GET['action']==='update' && isset($_GET['id']))
        {
           $ravioleController = new RavioleController();
           $ravioleController->update($_GET['id']);
        }

        else if ($_GET['controller']==='raviole' && $_GET['action']==='updateDone' && isset($_GET['id']))
        {
           $ravioleController = new RavioleController();
           $ravioleController->updatedone($_GET['id']);
        }

        else if ($_GET['controller']==='raviole' && $_GET['action']==='detail' && isset($_GET['id']))
        {
           $ravioleController = new RavioleController();
           $ravioleController->detail($_GET['id']);
        }

        else {
            throw new Exception('Page introuvable',404);
        }
?>