---
title: Calculating the distance between two strings
description: Calculating the distance between two strings with the Levenshtein formula in PHP
sidebar:
  label: The distance between two strings
---

## Calculating the distance between two strings: `levenshtein()`

The Levenshtein distance is a metric that calculates the difference or similarity between two text strings.
It is named after Soviet mathematician Vladimir Levenshtein, who introduced this concept. This distance represents the minimum number of operations required to transform one string into the second string. The allowed operations are inserting a single character, deleting a single character, or replacing one character with another.

For example, consider the words "halo" and "hallo." To turn "halo" into "hallo," an "l" must be added. Therefore, the Levenshtein distance between these two words is 1.

This measure is used in various applications, such as spelling correction, searching for similarities between DNA sequences, comparing files to detect differences, and more. The Levenshtein distance is a helpful tool for assessing how similar or different two strings are based on the minimum operations required to transform one string into the other.

| First text string | Second text string | Levenshtein Distance | Operations                                                   |
| ----------------- | ------------------ | -------------------- | ------------------------------------------------------------ |
| hello             | hallo              | 1                    | replace the 'e' with the 'a' letter                          |
| hello             | halo               | 2                    | replace the 'e' with the 'a' letter, and remove the 'l' letter |
| table             | tablet             | 1                    | add the 't' letter at the end                                |
| kitten            | sitting            | 3                    | replace the 'k' letter with the 's' letter, and replace the 'e' letter with the 'i' letter, and add 'g' at the end. |

The PHP language offers us the `levenshtein()` function.

~~~php
echo levenshtein("hello", "hallo");
// 1

echo levenshtein("hello", "halo");
// 2

echo levenshtein("table", "tablet");
// 1

echo levenshtein("kitten", "sitting");
// 3

~~~

## The cost of the operation

With the `levenshtein()` function, you can set the cost of each operation. Insertion, replacement, and deletion operations have 1 as cost. It means that all the operations have the same cost. The cost is used to calculate the number.
You can set the `$insertion_cost`, `$replacement_cost`, and `$deletion_cost`.

The ability to assign costs to operations may lead to situations where a lower total cost can be achieved through a sequence of operations that does not necessarily represent the minimum number of operations.
For example:

~~~php
levenshtein("hello", "halo", replacement_cost: 4)
// 3
~~~
The minimum total cost is calculated with the operations:
- deleting the e (cost 1);
- adding the a (cost 1);
- deleting the l (cost 1);
So the total cost is 3.

These 3 operations cost less than the 2 operations (with higher cost because the replacement cost is set to 4):
- replacing e with a (cost 4);
- deleting the l (cost 1)
So the total cost is 5.

## Practical applications of Levenshtein distance

I used the `levenshtein()` function when I implemented a command-line tool to locate a misspelled option/parameter and try to suggest the most similar valid option available. I would say that in general, it can be useful when you have a list of values and want to identify the one that most closely resembles a given input. Correcting a misspelled path compared to a list of valid paths might also be a good example.

Additionally, it proves valuable in scenarios where a structure can be traced back and coded into a sequence of characters, akin to a simplified DNA comparison. Another application is in coding sequences of steps for a game using letters, allowing you to identify the most similar sequences.

To sum up, Levenshtein's distance is a practical tool that helps to understand and measure how similar or different words are, making it useful in various PHP applications.