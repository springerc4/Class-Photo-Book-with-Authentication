<?php
    // Saves the array into the JSON file
    function convertToJson($array_name, $json_file_name) {
        $handle = fopen($json_file_name, 'w+');
        fwrite($handle, json_encode($array_name, JSON_PRETTY_PRINT));
        fclose($handle);
    }
    // Converts the JSON file to a PHP array
    function convertToPhp($json_file_name) {
        $json_content = file_get_contents($json_file_name);
        $student_array = json_decode($json_content, true);
        return $student_array;
    }
    // Converts JSON file to PHP array and returns a specified element
    function returnJsonElement($json_file_name, $element) {
        $json_content = file_get_contents($json_file_name);
        $new_array = json_decode($json_content, true);
        return $new_array[$element];
    }

?>