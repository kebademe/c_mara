<?php 

//include('connexionBD.php');


if (isset($_POST['sauvegarder'])) {
	$code=lastId()+1;
	$nom=$_POST['nom'];
	$categorie=$_POST['categorie'];
	$description=$_POST['description'];
	$prix=$_POST['prix'];
	$image=null;
	if(isset($_FILES['image']))
          {
            $ext_ok=array('png','jpeg','jpg');
            $nom_fichier=$_FILES['image']['name'];
            if(valid_extension($nom_fichier,$ext_ok))
            {
              if(valid_size($_FILES['image']))
              {
                if(isset($_POST['nom']))
                  { 
                //$c=$_POST['code'];
                $ext=strrchr($nom_fichier,'.');
                $dest_name=$nom."_".$code.$ext;
                move_file($_FILES['image']["tmp_name"],"image_produit",$dest_name);
               
                 //echo "<img id='img' src='mesimages1/$dest_name1' alt='photo manquante' />";
                  $image="image_produit/$dest_name";
              }
              else
                echo"taille non valide";
            }
             else
                echo"extension non valide";
          }
          }


          insererProduit($nom,$categorie,$description,$prix,$image);
}



  
 
  // Mes fonctions de traitements d'images   
 function move_file($source_file,$destpath,$dest_name)
   {
      if(!(is_dir($destpath)))
        mkdir($destpath);
        $dest=$destpath."/".$dest_name;
        return move_uploaded_file($source_file,$dest);

   }
   
  function valid_extension($file_name,$ext_ok)
  {
    $file_ext=strtolower(substr(strrchr($file_name,'.'),1));
    if(in_array($file_ext,$ext_ok))
      return true;
    return false;
  }

  function valid_size($file)
  {
    $maxsize=0;
    if(isset($_POST['MAX_FILE_SIZE']))
     $maxsize=$_POST['MAX_FILE_SIZE'];
    if($file['size']<=$maxsize)
    return true;
     return false;
  }  
   
   //fin des fonctions de traitements d'images
    



function insererProduit($nom,$categorie,$description,$prix,$image){
	$db = new PDO('mysql:host=localhost;dbname=c_mara', 'root', '');
$req="Insert into produit set nom='$nom',categorie='$categorie',description='$description',prix='$prix',url='$image' ";
 $res=$db->exec($req);
              if ($res) {
                ?><script type="text/javascript"> alert("Le Produit est ajouté avec succés")</script><?php
                        }

};

function lastId(){
	$code=0;
	$db = new PDO('mysql:host=localhost;dbname=c_mara', 'root', '');
	$req="SELECT MAX(refProduit) as id FROM produit" ;
	$res=$db->query($req);
	$ligne= $res ->fetch();
	$code=$ligne['id'];
	return $code;

};



 ?>