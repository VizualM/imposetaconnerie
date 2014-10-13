<?php
function set_new($param)
{
    global $bdd;
            
    $req = $bdd->prepare('INSERT INTO news (titre, date, description) VALUES(?, ?, ?)');
    $req->execute(array($param['titre'],$param['date'],$param['description']));
    
    return $bdd->lastInsertId();
}


function delete_new($param)
{
    global $bdd;
        
    $req = $bdd->prepare('DELETE FROM news WHERE id_new=:id_new');
    $req->execute();
    $new = $req->fetch(); 
    
    return $new;
}

function update_new($param)
{
    global $bdd;
    
    $req = $bdd->prepare('UPDATE news SET titre=:titre, date=:date, description=:description WHERE id_new=:id_new');
    $req->execute(array(
    	'titre' => $param['titre'], 
    	'date' => $param['date'], 
    	'description' => $param['description'],
    	'id_new' => $param['id_new']
    	));
    
    return $bdd->lastInsertId();
}

function get_newsByUser($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT * FROM news ORDER BY ID DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $news = $req->fetchAll();
    
    return $news;
}
