# _Anagram Checker_

#### _This web page allows a user to input a single word, and a list of other words that may be anagrams, 14 February 2017_

#### By _**Michaela Davis**_


## Description

_An anagram is a word that you can rearrange the letters and it becomes a new word. For example, "bread" is an anagram of "beard". This web page, created with Silex, allows a user to input a single word, and a list of other words that may be anagrams. After submitting the form, the user is told which of the list of words were anagrams._

## Setup/Installation Requirements

* In terminal run the following commands to setup the database:

1. _Fork and clone this repository from_ [gitHub](https://github.com/michaela-davis/php_anagram.git).
2. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
3. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input*    |     *Output*    |
|-----------------|---------------|-----------------|
| It recognizes a word that has no anagrams  | "ham", "mat" | false, “This words do not have the same characters and therefore are not anagrams"|
| It recognizes two words that are the same  | "ham", "ham" | false, “These are the same word. Please try again."|  
| It recognizes a words that are anagrams of each other  | "delight", "lighted" | true, “This word has 1 anagram: lighted"|
| It recognizes a word that has multiple anagrams  | "friend", "finder, redfin, refind" | true, “This word has 3 anagrams: finder, redfin, refind"|


## Known Bugs

_None so far._

## Support and contact details

_Please contact michaela.delight@gmail.com with concerns or comments._

## Technologies Used

* _HTML_
* _CSS_
* _PHP_
* _PHPUnit_
* _Composer_
* _Silex_
* _Twig_

### License

*MIT license*

Copyright (c) 2017 **_Michaela Davis_**
