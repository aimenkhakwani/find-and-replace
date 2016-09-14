# Find and Replace

#### _An app that finds and replaces words, September 14, 2016_

#### By _**Mark Lawson & Aimen Khakwani**_

## Description

This website takes user input to find and replace specific words in a sentence.

## Setup/Installation Requirements

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications

* The program will take three inputs and return a sentence.
    * Example input: "hi my name is max" "max" "max"
    * Example output: "hi my name is max"

* The program will identify the second input, and find and replace it in the sentence
    * Example input: "hi my name is max" "max" "matt"
    * Example output: "hi my name is matt"

* The program will find and replace regardless of lower/upper case
    * Example input: "Hi my name is Max" "Max" "Matt"
    * Example output: "Hi my name is Matt"

## Known Bugs

There are no known bugs at this time.

## Support and Contact Details

For questions or comments, please contact _mlawson3691@gmail.com_.

## Technologies Used

* _PHP_
* _Silex_
* _Twig_
* _Bootstrap_

### License

*This website is licensed under the MIT license.*  
Copyright (c) 2016 **_Mark Lawson & Aimen Khakwani_**
