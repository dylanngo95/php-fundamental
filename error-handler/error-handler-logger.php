<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', false);
ini_set('log_errors', true);
define('ERROR_LOG_FILE', 'error.log');

//register_shutdown_function(function(){
//    $error = error_get_last();
//    if($error){
//        echo "<br/> Shutdown" . $error['message'] . -1 . $error['type'] . $error['file'] . $error['line'];
//    }
//});

//set_error_handler("handlerError");

//set_exception_handler(function(Throwable $exception) {
//    echo "Exception handler: " . $exception->getMessage() . PHP_EOL;
//});

/**
 * @param $errno
 * @param $errstr
 * @param $errfile
 * @param $errline
 * @param $errcontext
 * @return bool
 */
function handlerError(
    $errno,
    $errstr,
    $errfile,
    $errline
) {
    $context = [
        'errno' => $errno,
        'errstr' => $errstr,
        'errfile' => $errfile,
        'errline' => $errline
    ];

    return fileLog($context);
}

/**
 * This method is used to write data in file
 * @param mixed $logData
 * @param string $fileName
 * @return boolean
 */
function fileLog($logData, $fileName = ERROR_LOG_FILE) {
    $fh = fopen($fileName, 'a+');
    if (is_array($logData)) {
        $logData = print_r($logData, 1);
    }
    $status = fwrite($fh, $logData);
    fclose($fh);
    return (bool)$status;
}

echo "Start Index<br/>";

try {
    echo $var;
    $array = ['1' => 1, '2' => 2];
    $array['3']['5'];

//    $dylan = new Dylan();
//    @dylan();

    $object = new stdClass();
    $object->a;

    $temp = 0;

//    throw new \Exception("Good exception men", 33);

} catch (Error $ex) {
    echo "We catch a error: " . $ex->getMessage() . PHP_EOL;
} catch (Exception $ex) {
    echo "We catch a exception: " . $ex->getMessage() . PHP_EOL;
} catch (Throwable $ex) {
    echo "We catch a throwable: " . $ex->getMessage() . PHP_EOL;
}

echo "<br/> End Index";
