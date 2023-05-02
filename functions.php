<?php

if(!function_exists('pre_print')) {

    function pre_print($value) {
        echo '<pre>' . print_r($value, 1) . '</pre>';
    }

}
if( !function_exists('_log') ) {

    function _log($arMsg, $file_name = 'Dev_') {

        $stEntry = "";

        $arLogData['event_datetime'] = '[' . date('D Y-m-d h:i:s A') . '] [client ' . ']';

        if (is_array($arMsg) || is_object($arMsg)) {

            foreach ($arMsg as $key => $msg)
                $stEntry .= $arLogData['event_datetime'] . " " . " $key => " . "" . print_r($msg, 1) . "\r\n";
        } else {
            $stEntry .= $arLogData['event_datetime'] . " " . $arMsg . "\r\n";
        }

        $stCurLogFileName = $file_name . date('Ymd') . '.txt';

        $path = wp_get_upload_dir()['basedir'];
        $fHandler = fopen($path . '/' . $stCurLogFileName, 'a+');


        fwrite($fHandler, $stEntry);

        fclose($fHandler);
    }

}
