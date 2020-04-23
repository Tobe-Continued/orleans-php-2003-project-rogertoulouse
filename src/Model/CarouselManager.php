<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

/**
 *
 */
class CarouselManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'artworks';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectAll(): array
    {
        $listSlide = $this->pdo->query('SELECT * FROM ' . $this->table . ' WHERE carousel = 1')->fetchAll();
        return $listSlide;
    }
}
