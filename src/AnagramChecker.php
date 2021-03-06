<?php

    class AnagramChecker
    {
        private $source_text;
        private $anagram_text;

        // Anagram constructor
        function __construct($source_text, $anagram_text)
        {
            $this->source_text = $source_text;
            $this->anagram_text = $anagram_text;
        }
        // source_text Getter and Setter
        function getSourceText()
        {
            return $this->source_text;
        }

        function setSourceText($new_source_text)
        {
            $this->personName = (string) $new_source_text;
        }

        // anagram_text Getter and Setter
        function getSourceAnagram()
        {
            return $this->anagram_text;
        }

        function setAnagramText($new_anagram_text)
        {
            $this->personName = (string) $new_anagram_text;
        }



        function checkAnagram()
        {
            // Arrange
            $source_array = str_split($this->source_text);
            $anagram_array = str_split($this->anagram_text);
            sort($source_array);
            sort($anagram_array);

            // Act
            if ($source_array == $anagram_array) {
                return true;
            } else {
                return false;
            }

        }
    }

?>
