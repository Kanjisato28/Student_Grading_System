<?php

namespace Pagador\Gs\models;
use Pagador\Gs\core\Crud;
use Pagador\Gs\core\Database;


class StudentModel extends Database implements Crud{
    public int $id;
    public  string $name;
    public  string $course;
    public  int $year_level;
    public string $section;


    public function __construct(){
        parent:: __construct();
        $this-> id = 0 ;
        $this-> name = ""  ;
        $this-> course = "" ;
        $this-> year_level = 0 ;
        $this-> section = "";
    }

    public function create(){
        $sql="INSERT INTO `students`(`id`, `name`, `course`, `year_level`, `section`) VALUES
         ('$this->id','$this->name','$this->course','$this->year_level','$this->section')";
         
        if ($this->conn ->query($sql)){
             echo "STUDENT CREATED";
        }  
        

    }
    public function read(){
        try{
            $sql = "SELECT * FROM students";
            $results = $this-> conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th){
            echo $th->getMessage();

        }


    }
    public function update($id){ 
         $sql="UPDATE students SET name = '$this->name',id = '$this->id', 
         course = '$this->course', year_level = '$this->year_level',section = '$this->section' WHERE id = $id";
         
        if ($this->conn ->query($sql)){
             echo "ID ACCEPTED\nSTUDENT UPDATED";
        }
            
        
        
}


    public function delete($id){
        //$this-> id = $id;
         $sql="DELETE FROM `students` WHERE id = $id";
         
        if ($this->conn ->query($sql)){
             echo "DELETED SUCCESSFULLY";
        }  
        
        
        
        
    }


}