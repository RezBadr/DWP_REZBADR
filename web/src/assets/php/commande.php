<?php
if(function_exists("ajouter")===FALSE) {
function ajouter($nom,$image,$image2,$image3,$image4,$prix,$desc,$categorie,$Ville,$Carburant,$modele,$anneemodele,$puissance){
    if(require("configM.php")){
        $req = $access->prepare("INSERT INTO produits (image,image2,image3,image4,nom,prix,description,categorie,Ville,Carburant,modele,anneemodele,puissance) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $req->execute(array($image,$image2,$image3,$image4,$nom,$prix,$desc,$categorie,$Ville,$Carburant,$modele,$anneemodele,$puissance));
        $req->closeCursor();
    }
} 
}

if(function_exists("afficher")===FALSE){
function afficher(){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true ORDER BY id_produit DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
} 
if(function_exists("afficherById")===FALSE){
function afficherById($id_produit){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true AND id_produit = ? ");
        $req->execute(array($id_produit)); 
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
} 
if(function_exists("rechercher")===FALSE){
function rechercher($search,$categorie){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true AND categorie = ? AND nom LIKE '%$search%'  ORDER BY id_produit DESC");
        $req->execute(array($categorie));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
} 
}
if(function_exists("rechercherSearch")===FALSE){
function rechercherSearch($search){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true AND  nom LIKE '%$search%'  ORDER BY id_produit DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
} 
}
if(function_exists("rechercherCategorie")===FALSE){
function rechercherCategorie($categorie){
    if(require("configM.php")){
        $req = $access->prepare("SELECT * FROM produits WHERE disponible=true AND categorie = ?   ORDER BY id_produit DESC");
        $req->execute(array($categorie));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
} 
}
if(function_exists("supprimer")===FALSE){
function supprimer($id_produit){
    if (require("configM.php")){
        $req = $access->prepare("DLETE * FROM produits WHERE id_produit=? ");
        $req->execute(array($id_produit));
    }
}
}
?>