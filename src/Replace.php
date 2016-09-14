<?php
    class Replace
    {
        function find_replace($input1, $input2, $input3)
        {
            $word_array = explode(" ", $input1);

            for ($i = 0; $i < count($word_array); $i++) {
                if ($word_array[$i] == $input2) {
                    $word_array[$i] = $input3;
                }
            }

            $output = implode(" ", $word_array);
            return $output;
        }
    }
?>
