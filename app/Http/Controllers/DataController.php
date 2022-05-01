<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    // public function create()
    // {
    //     return view('home');
        
    // }
    public function create()
    {
        return view('teste');
        
    }
    function inserir($itens){
        console.log('mika');
        // console.warn($itens);
    //     $sts = $pdo->prepare("INSERT INTO dados(nome, data) VALUES(?,?);");
    //     $sts->bindValue(1, $itens[0], PDO::PARAM_STR);
    //     $sts->bindValue(2, $itens[1], PDO::PARAM_STR);
    //     $sts->execute();
    //     $sts->closeCursor();
    //     $sts = NULL;
    // }
    // if (!empty($_FILES['arquivo']))
    // {
    //     $Pdo     = new PDO("mysql:host=localhost;dbname=testdb", "root", "senha");
    //     $file    = fopen($_FILES['arquivo']['tmp_name'], 'r');
    //     while (!feof($file)){
    //         $linha = fgets($file);      
    //         $itens = array(trim(substr($linha, 0, 60)), trim(substr($linha, 60, 70)));
    //         Inserir($itens, $Pdo);
    //     }
    }   
}
