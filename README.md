The code includes three classes that have to be completed. It includes its tests, that are necessary to check if the exercise was solved correctly.

The main objective is to program a text "censor" that would replace words by asterisks.
The censor will receive a list of words and a text to be censored.
The censor will replace each word of the list in the text with a number of asterisks. 
The number of asterisks ought to be the same as the number of characters in the replaced word.

For example, if you get the list of words: ["que", "buen"]
and the text: "Espero que tengas un buen día de cumpleaños",
the censor will return: "Espero *** tengas un **** día de cumpleaños".

To simplify this task, there won't be words with accents (e.g. "día") as arguments, neither in the list of words nor in the text that requires censoring.
There also won't be any hyphenated compound words (e.g. "non-sense") or apostrophes (e.g. "don't"). 
All the texts will always contain, at the very least, a single space (" ") between words.

The code includes three classes to be completed:
- SimpleCensor: to solve the problem simply and quickly, using only this class.
- ObjectCensor: to solve the problem using PHP types (classes that let you write your code easily, like "Word", "Text", "CensoredWord", "Character", etc).
- LoopLessCensor: to solve the problem without loops (for, do, while, foreach).

As many files and classes should (and must) be created as necessary. You are allowed to use external libraries (although it's not necessary) through Composer.

The purpose of this exercise is not only to ultimately solve the problem, but also demonstrate good project organization, good code style as well as clear and descriptive code.

New contributions will be taken into account as well as ideas that add onto the original project (for example, a new censor type, new use cases for testing, new approaches) but that's not a requirement to solve the exercise.
