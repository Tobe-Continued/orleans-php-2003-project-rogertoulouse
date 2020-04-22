<?php

namespace App\Model;

class ArtworkManager extends AbstractManager
{
    const TABLE = 'artworks';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectAllByCategory()
    {
        $listArtwork = $this->pdo->query('SELECT * FROM '.$this->table.' a 
        JOIN works_category c ON a.category_id=c.ID')->fetchAll();

        return $listArtwork;
    }
}
