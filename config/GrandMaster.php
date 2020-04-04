<!-- Keteranan : grand-master = class induk
          : master       = class tutunan
GrandMaster disebut jugan Class induk yang akan mewarisaskn property ke Turunannya yaitu ke master -->
<?php
class GrandMaster {

     function __construct()
    {  
         $this->db = new mysqli("localhost","root","","db_ut");
        
    }

    public function tampil($sql){
        $hasil=[];
        $stamt = $this->db->query($sql);
        while($data = $stamt->fetch_object()){
        $hasil[]=$data;
        }
        return $hasil;
    }

    public function query_all($sql){
        $stamt = $this->db->query($sql);
      
       
    
    }

// $stamt = pendeklarasian variabel penampung nilai.
// $sql adalah parameter dari class turunan='master'

 
}

?>

