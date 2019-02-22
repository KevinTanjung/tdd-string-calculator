
# OnlinePajak Pair Programming Challenge

## Setup

1. Clone the project

  ```sh
  $ git clone git@github.com:KevinTanjung/tdd-string-calculator.git
  ```

2. Install the Composer dependencies

  ```sh
  $ composer install
  ```

3. Execute the test command

  ```sh
  $ composer run-script test
  ```

## Challenge

**This kata is one of the simplest and best ways to practice step-by-step fluent TDD, and provides an easy way to get proficient in a language.**

Write a method `add` under an object `StringCalculator` that, given a delimited string, returns the sum of the numbers in the string.

```
An empty string returns zero
'' => 0
```

```
A single number returns the value
'1' => 1
'2' => 2
```

```
Two numbers, comma delimited, returns the sum
'1,2' => 3
'10,20' => 30
```

```
Two numbers, newline delimited, returns the sum
'1\n2' => 3
```

```
Three numbers, delimited either way, returns the sum
'1\n2,3\n4' => 10
```

```
Negative numbers throw an exception with the message
'-1,2,-3' => 'negatives not allowed: -1,-3'
```

```
Numbers greater than 1000 are ignored
```

```
A single char delimiter can be defined on the first line starting with //
(e.g //#\n1#2 for a ‘#’ as the delimiter)
```

```
A multi char delimiter can be defined on the first line starting with //
(e.g. //###\n1###2 for ‘###’ as the delimiter)
```