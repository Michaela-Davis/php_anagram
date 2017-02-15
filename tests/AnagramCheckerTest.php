<?php

    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramCheck_differentCharacters()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "ham, mat";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_anagramCheck_repeatedWord()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "ham, ham";

            //Act
            $result = $test_AnagramChecker->checkAnagram($input);

            //Assert
            $this->assertEquals(false, $result);
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
