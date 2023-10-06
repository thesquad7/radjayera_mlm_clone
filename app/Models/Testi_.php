<?php

namespace App\Models;

class Testi 
{
    private static $testy = [
        [
            "title" => "Testymoni 1",
            "id" => "Xkswjmmd",
            "author" => "Filemon Sitanggang",
            "Body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, quas!"
        ],
        [
            "title" => "Testymoni 2",
            "id" => "ijweif@12",
            "author" => "Filemon Sitanggang",
            "Body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quos nulla accusamus harum, aliquid alias voluptate explicabo tempora, minus doloremque animi quae assumenda et ratione placeat quaerat porro quam? Nemo?
            "
        ],
        [
            "title" => "Testymoni 3",
            "id" => "Xksw838jmmd",
            "author" => "Filemon Sitanggang",
            "Body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, quas!"
        ],
        [
            "title" => "Testymoni 4",
            "id" => "Xksw838jssmd",
            "author" => "Filemon Sitanggang",
            "Body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, quas!"
        ],
    ];

    public static function all(){
        return collect(self::$testy);
    }
    public static function find($id){
        $testi = self::all();
        // $data_new=[];
        // foreach($testi as $data){
        //     if($data["id"] === $id){
        //         $data_new = $data;
        //     }
        // }
        // return $data_new;
        return $testi ->firstWhere('id', $id);
  
    }
}
