<?php
    require_once 'src/Replace.php';

    class ReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_replace_return()
        {
            $test_Replace = new Replace;
            $input1 = "hello world";
            $input2 = "hello";
            $input3 = "hello";
            $result = $test_Replace->find_replace($input1, $input2, $input3);
            $this->assertEquals("hello world", $result);
        }

        function test_replace_find()
        {
            $test_Replace = new Replace;
            $input1 = "Hello world";
            $input2 = "Hello";
            $input3 = "bye";
            $result = $test_Replace->find_replace($input1, $input2, $input3);
            $this->assertEquals("bye world", $result);
        }

        function test_replace_case()
        {
            $test_Replace = new Replace;
            $input1 = "hello world";
            $input2 = "Hello";
            $input3 = "Bye";
            $result = $test_Replace->find_replace($input1, $input2, $input3);
            $this->assertEquals("Bye world", $result);
        }

        // function test_replace_partial()
        // {
        //     $test_Replace = new Replace;
        //     $input1 = "the cathedral";
        //     $input2 = "cat";
        //     $input3 = "kitty";
        //     $result = $test_Replace->find_replace($input1, $input2, $input3);
        //     $this->assertEquals("the kittyhedral", $result);
        // }
    }
?>
