<?php
  require_once "src/LeetspeakTranslator.php";

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_leetSpeakArray()
        {
            $test_LeetspeakTranslator = new
            LeetspeakTranslator;
            $input = "abcd";
            $result = $test_LeetspeakTranslator->translate($input);
            $this->assertEquals(["a","b","c","d"], $result);
        }

        function test_leetSpeakArray_ForE()
        {
            $test_LeetspeakTranslatorForE = new LeetspeakTranslator;
            $input = "abcde";
            $result = $test_LeetspeakTranslatorForE->translate($input);
            $this->assertEquals(["a","b","c","d","3"], $result);
        }

        function test_leetSpeakArray_Foro()
        {
            $test_LeetspeakTranslatorForo = new LeetspeakTranslator;
            $input = "abcdeo";
            $result = $test_LeetspeakTranslatorForo->translate($input);
            $this->assertEquals(["a","b","c","d","3","0"], $result);
        }
        function test_leetSpeakArray_fori()
        {
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "abcdeoi";
            $result = $test_LeetspeakTranslator->translate($input);
            $this->assertEquals(["a","b","c","d","3","0","1"], $result);
        }
        function test_leetSpeakArray_forz()
        {
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "abcdeois";
            $result = $test_LeetspeakTranslator->translate($input);
            $this->assertEquals(["a","b","c","d","3","0","1", "z"], $result);
        }
        function test_leetSpeakArray_forS()
        {
          $test_LeetspeakTranslator = new LeetspeakTranslator;
          $input = "ssabcd";
          $result = $test_LeetspeakTranslator->translate($input);
          $this->assertEquals(["s", "z", "a", "b", "c", "d"], $result);
        }
    }
 ?>
