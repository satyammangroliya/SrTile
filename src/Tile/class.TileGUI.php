<?php

namespace srag\Plugins\SrTile\Tile;

use ilLink;
use ilSrTilePlugin;
use ilUIPluginRouterGUI;
use ilUtil;
use srag\DIC\SrTile\DICTrait;
use srag\Plugins\SrTile\TileListGUI\TileListStaticGUI\TileListStaticGUI;
use srag\Plugins\SrTile\Utils\SrTileTrait;

/**
 * Class TileGUI
 *
 * @package           srag\Plugins\SrTile\Tile
 *
 * @author            studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy srag\Plugins\SrTile\Tile\TileGUI: ilUIPluginRouterGUI
 */
class TileGUI
{

    use DICTrait;
    use SrTileTrait;
    const PLUGIN_CLASS_NAME = ilSrTilePlugin::class;
    const CMD_BACK = "back";
    const CMD_EDIT_TILE = "editTile";
    const CMD_GET_PRECONDITIONS = "getPreconditions";
    const CMD_UPDATE_TILE = "updateTile";
    const LANG_MODULE = "tile";
    const GET_PARAM_REF_ID = "ref_id";
    const TAB_TILE = "tile";
    /**
     * @var Tile
     */
    protected $tile;


    /**
     * TileGUI constructor
     */
    public function __construct()
    {

    }


    /**
     *
     */
    public function executeCommand()/*: void*/
    {
        $this->tile = self::srTile()->tiles()->getInstanceForObjRefId(intval(filter_input(INPUT_GET, self::GET_PARAM_REF_ID)));

        if (!self::srTile()->access()->hasWriteAccess($this->tile->getObjRefId())) {
            die();
        }

        self::dic()->ctrl()->saveParameter($this, self::GET_PARAM_REF_ID);

        $this->setTabs();

        $next_class = self::dic()->ctrl()->getNextClass($this);

        switch (strtolower($next_class)) {
            default:
                $cmd = self::dic()->ctrl()->getCmd();

                switch ($cmd) {
                    case self::CMD_BACK:
                    case self::CMD_EDIT_TILE:
                    case self::CMD_GET_PRECONDITIONS;
                    case self::CMD_UPDATE_TILE:
                        $this->{$cmd}();
                        break;

                    default:
                        break;
                }
                break;
        }
    }


    /**
     * @param int $obj_ref_id
     */
    public static function addTabs(int $obj_ref_id)/*:void*/
    {
        self::dic()->ctrl()->setParameterByClass(TileGUI::class, self::GET_PARAM_REF_ID, $obj_ref_id);

        self::dic()->tabs()->addTab(self::TAB_TILE, ilSrTilePlugin::PLUGIN_NAME, self::dic()->ctrl()->getLinkTargetByClass([
            ilUIPluginRouterGUI::class,
            self::class
        ], self::CMD_EDIT_TILE));
    }


    /**
     *
     */
    protected function setTabs()/*: void*/
    {
        self::dic()->tabs()->clearTargets();

        self::dic()->tabs()->addTab(self::TAB_TILE, ilSrTilePlugin::PLUGIN_NAME, self::dic()->ctrl()->getLinkTargetByClass([
            ilUIPluginRouterGUI::class,
            self::class
        ], self::CMD_EDIT_TILE));

        self::dic()->tabs()->setBackTarget(self::plugin()->translate("back", self::LANG_MODULE), self::dic()->ctrl()
            ->getLinkTarget($this, self::CMD_BACK));
    }


    /**
     *
     */
    protected function back()/*: void*/
    {
        $this->dic()->ctrl()->redirectToURL(ilLink::_getStaticLink($this->tile->getObjRefId()));
    }


    /**
     *
     */
    protected function editTile()/*: void*/
    {
        $form = self::srTile()->tiles()->factory()->newFormInstance($this, $this->tile);

        self::output()->output($form, true);
    }


    /**
     *
     */
    protected function updateTile()/*: void*/
    {
        $form = self::srTile()->tiles()->factory()->newFormInstance($this, $this->tile);

        if (!$form->storeForm()) {
            self::output()->output($form, true);

            return;
        }

        ilUtil::sendSuccess(self::plugin()->translate("saved", self::LANG_MODULE), true);

        self::dic()->ctrl()->redirect($this, self::CMD_EDIT_TILE);
    }


    /**
     *
     */
    protected function getPreconditions()/*: void*/
    {
        $preconditions = self::srTile()->ilias()->courses()->getPreconditions($this->tile->getObjRefId());

        self::output()->output(new TileListStaticGUI($preconditions));
    }
}
