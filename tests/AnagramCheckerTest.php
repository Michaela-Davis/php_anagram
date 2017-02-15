<?php

    require_once __DIR__ . "/../src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramChecker_differentCharacters()
        {
            //Arrange
            $source_text = "ham";
            $anagram_text = "mat";
            $test_AnagramChecker = new AnagramChecker($source_text, $anagram_text);

            //Act
            $result = $test_AnagramChecker->checkAnagram($source_text, $anagram_text);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_anagramChecker_repeatedWord()
        {
            //Arrange
            $source_text = "ham";
            $anagram_text = "ham";
            $test_AnagramChecker = new AnagramChecker($source_text, $anagram_text);

            //Act
            $result = $test_AnagramChecker->checkAnagram($source_text, $anagram_text);

            //Assert
            $this->assertEquals(true, $result);
        }

        // function test_anagramCheck_repeated()
        // {
        //     //Arrange
        //     $test_AnagramChecker = new AnagramChecker;
        //     $input = "delight, lighted";
        //
        //     //Act
        //     $result = $test_AnagramChecker->checkAnagram($input);
        //
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

    }

?>
