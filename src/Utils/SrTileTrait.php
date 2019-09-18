<?php

namespace srag\Plugins\SrTile\Utils;

use ilObjUser;
use srag\Plugins\SrTile\Access\Access;
use srag\Plugins\SrTile\Access\Ilias;
use srag\Plugins\SrTile\ColorThiefCache\ColorThiefCaches;
use srag\Plugins\SrTile\LearningProgress\LearningProgressFilters;
use srag\Plugins\SrTile\Rating\Ratings;
use srag\Plugins\SrTile\Template\Templates;
use srag\Plugins\SrTile\Tile\Tiles;

/**
 * Trait SrTileTrait
 *
 * @package srag\Plugins\SrTile\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait SrTileTrait
{

    /**
     * @return Access
     */
    protected static function access() : Access
    {
        return Access::getInstance();
    }


    /**
     * @return ColorThiefCaches
     */
    protected static function colorThiefCaches() : ColorThiefCaches
    {
        return ColorThiefCaches::getInstance();
    }


    /**
     * @param ilObjUser $user
     *
     * @return LearningProgressFilters
     */
    protected static function learningProgressFilters(ilObjUser $user) : LearningProgressFilters
    {
        return LearningProgressFilters::getInstance($user);
    }


    /**
     * @return Ilias
     */
    protected static function ilias() : Ilias
    {
        return Ilias::getInstance();
    }


    /**
     * @param ilObjUser $user
     *
     * @return Ratings
     */
    protected static function rating(ilObjUser $user) : Ratings
    {
        return Ratings::getInstance($user);
    }


    /**
     * @return Templates
     */
    protected static function templates() : Templates
    {
        return Templates::getInstance();
    }


    /**
     * @return Tiles
     */
    protected static function tiles() : Tiles
    {
        return Tiles::getInstance();
    }
}
