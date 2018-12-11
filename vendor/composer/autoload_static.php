<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacc6e23ec13a1863c94bd06b33b79c27
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrTile\\' => 36,
            'srag\\Plugins\\SrTile\\' => 20,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\SrTile\\' => 16,
            'srag\\CustomInputGUIs\\SrTile\\' => 28,
            'srag\\ActiveRecordConfig\\SrTile\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\SrTile\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrTile\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\SrTile\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\SrTile\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\SrTile\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'SrTileGUI' => __DIR__ . '/../..' . '/classes/GUI/class.SrTileGUI.php',
        'SrTileRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.SrTileRemoveDataConfirm.php',
        'ilSrTileConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilSrTileConfigGUI.php',
        'ilSrTilePlugin' => __DIR__ . '/../..' . '/classes/class.ilSrTilePlugin.php',
        'ilSrTileUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilSrTileUIHookGUI.php',
        'srag\\ActiveRecordConfig\\SrTile\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrTile\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\SrTile\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\SrTile\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\SrTile\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\SrTile\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrTile\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrTile\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrTile\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrTile\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrTile\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrTile\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\DIC\\SrTile\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrTile\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrTile\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrTile\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrTile\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrTile\\DIC\\Implementation\\ILIAS52DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS52DIC.php',
        'srag\\DIC\\SrTile\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\SrTile\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrTile\\DIC\\Implementation\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/LegacyDIC.php',
        'srag\\DIC\\SrTile\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrTile\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrTile\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrTile\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrTile\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrTile\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrTile\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrTile\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrTile\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\Plugins\\SrTile\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\SrTile\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\SrTile\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\SrTile\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\SrTile\\TileGUI\\TileContainerGUI\\TileContainerGUI' => __DIR__ . '/../..' . '/src/TileGUI/TileContainerGUI/TileContainerGUI.php',
        'srag\\Plugins\\SrTile\\TileGUI\\TileFormGUI\\TileFormGUI' => __DIR__ . '/../..' . '/src/TileGUI/TileFormGUI/TileFormGUI.php',
        'srag\\Plugins\\SrTile\\TileGUI\\TileGUIAbstract' => __DIR__ . '/../..' . '/src/TileGUI/TileGUIAbstract.php',
        'srag\\Plugins\\SrTile\\TileGUI\\TileGUIInterface' => __DIR__ . '/../..' . '/src/TileGUI/TileGUIInterface.php',
        'srag\\Plugins\\SrTile\\TileListGUI\\TileListContainerGUI\\TileListContainerGUI' => __DIR__ . '/../..' . '/src/TileListGUI/TileListContainerGUI/TileListContainerGUI.php',
        'srag\\Plugins\\SrTile\\TileListGUI\\TileListDesktopGUI\\TileListDesktopGUI' => __DIR__ . '/../..' . '/src/TileListGUI/TileListDesktopGUI/TileListDesktopGUI.php',
        'srag\\Plugins\\SrTile\\TileListGUI\\TileListGUIAbstract' => __DIR__ . '/../..' . '/src/TileListGUI/TileListGUIAbstract.php',
        'srag\\Plugins\\SrTile\\TileListGUI\\TileListGUIInterface' => __DIR__ . '/../..' . '/src/TileListGUI/TileListGUIInterface.php',
        'srag\\Plugins\\SrTile\\TileList\\TileListAbstract' => __DIR__ . '/../..' . '/src/TileList/TileListAbstract.php',
        'srag\\Plugins\\SrTile\\TileList\\TileListContainer\\TileListContainer' => __DIR__ . '/../..' . '/src/TileList/TileListContainer/TileListContainer.php',
        'srag\\Plugins\\SrTile\\TileList\\TileListDesktop\\TileListDesktop' => __DIR__ . '/../..' . '/src/TileList/TileListDesktop/TileListDesktop.php',
        'srag\\Plugins\\SrTile\\TileList\\TileListInterface' => __DIR__ . '/../..' . '/src/TileList/TileListInterface.php',
        'srag\\Plugins\\SrTile\\Tile\\Tile' => __DIR__ . '/../..' . '/src/Tile/Tile.php',
        'srag\\Plugins\\SrTile\\Tile\\TileDesktopGUI\\TileDesktopGUI' => __DIR__ . '/../..' . '/src/TileGUI/TileDesktopGUI/TileDesktopGUI.php',
        'srag\\Plugins\\SrTile\\Tile\\Tiles' => __DIR__ . '/../..' . '/src/Tile/Tiles.php',
        'srag\\Plugins\\SrTile\\Utils\\SrTileTrait' => __DIR__ . '/../..' . '/src/Utils/SrTileTrait.php',
        'srag\\RemovePluginDataConfirm\\SrTile\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrTile\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\SrTile\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrTile\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\SrTile\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacc6e23ec13a1863c94bd06b33b79c27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacc6e23ec13a1863c94bd06b33b79c27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacc6e23ec13a1863c94bd06b33b79c27::$classMap;

        }, null, ClassLoader::class);
    }
}
