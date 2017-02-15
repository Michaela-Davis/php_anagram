# _Anagram Checker_

#### _This web page allows a user to input a single word, and a list of other words that may be anagrams, 14 February 2017_

#### By _**Michaela Davis**_


## Description

_An anagram is a word that you can rearrange the letters and it becomes a new word. For example, "bread" is an anagram of "beard". This web page, created with Silex, allows a user to input a single word, and a list of other words that may be anagrams. After submitting the form, the user is told which of the list of words were anagrams._

## Setup/Installation Requirements

* In terminal run the following commands:

1. _Fork and clone this repository from_ [gitHub](https://github.com/michaela-davis/php_anagram.git).
2. Ensure [composer](https://getcomposer.org/) is installed on your computer.
3. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
4. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using a mac - things are different on a pc).
5. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input*    |     *Output*    |
|-----------------|---------------|-----------------|
| It recognizes a word that has no anagrams  | "ham", "mat" | false |
| It recognizes two words that are the same  | "ham", "ham" | true |  
| It recognizes a words that are anagrams of each other  | "delight", "lighted" | true |


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
