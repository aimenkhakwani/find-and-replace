<?php
    class Replace
    {
        function find_replace($input1, $input2, $input3)
        {
            // METHOD 1
            // return str_ireplace($input2, $input3, $input1);

            // METHOD 2
            // $output = $input1;
            // if (stripos($output, $input2) !== false) {
            //     $word_array = explode($input2, $output);
            //     $output = implode($input3, $word_array);
            // }

            $word_array = explode(" ", $input1);
            for ($i = 0; $i < count($word_array); $i++) {
                if (strtolower($word_array[$i]) == strtolower($input2)) {
                    $word_array[$i] = $input3;
                }
            }
            $output = implode(" ", $word_array);

            return $output;
        }
    }
?>
