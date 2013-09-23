<?php
class cMainRPJ {
    static $MODULE_ID="russianpostjoke";

    /**
     * Хэндлер, отслеживающий изменения в инфоблоках
     * @param $arFields
     * @return bool
     */
    static function onBeforeElementUpdateHandler($arFields){
        // чтение параметров модуля
        // $iblock_id = ;
        // Активная деятельность

        if (in_array(date('w'),array(0,6)) || (date('H')>18) || (date('H')<9))
        {
            global $APPLICATION;
            $APPLICATION->throwException(COption::GetOptionString(self::$MODULE_ID, "WE_ARE_CLOSED_TEXT", "Куда Вы прёте, у нас закрыто!"));
            return false;
        }

        // Результат
        return true;
    }
}