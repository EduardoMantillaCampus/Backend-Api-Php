<?php 
    
    namespace proyectoApi\controllers;
    use proyectoApi\models\CitiesModel;

    class   CitiesController{

        //Me recoje toda la data de una tabla
        static public function getData(){
            $table="cities";
            $response=CitiesModel::getData($table);
            return $response;
        }

        //Me recoje un registro filtrado por su id
        static public function getDataId($id){
            $table="cities";
            $response=CitiesModel::getDataId($table,$id);
            return $response;
        }

        //Pusheo de datos
        static public function postData($data){
            $table="cities";
            $response = CitiesModel::postData($table, $data);
            return $response;
        }

        //Actualizacion de datos
        static public function putData($data, $id){
            $table="cities";
            $response = CitiesModel::putData($table, $data, $id);
            return $response;
        }

        //Delete, eliminar un dato apartir de su id
        static public function deleteData($id){
            $table="cities";
            $find = CitiesModel::getDataId($table,$id);
            if(!empty($find)){
                $response = CitiesModel::deleteData($table, $id);
                return $response;
            }else{
                return null;
            } 
        }

        
    }

?>