The code includes three classes that has to be completed. It includes its tests, that are necessary for checking if the exercise has been solved correctly.

The main objective is program a text "censor" that would replace words by asterisks.
The censor will receive a list of words and a text to be censored.
The censor will replace each word of the list in the text by a number of asterisks. 
The number of asterisks will be the same as the number of characters of the replaced word.

For example, if you get the list of words: ["que", "buen"]
and the text: "Espero que tengas un buen día de cumpleaños",
the censor will return: "Espero *** tengas un **** día de cumpleaños".

For making the task easier, there won't be words with accents (e.g. "día") as arguments, neither in the list of words nor in the text to be censored.
There won't be too compound words with hyphen (e.g. "non-sense") or apostrophe (e.g. "don't"). 
All the texts will always contain, at the very least, a space (" ") between words.

The code includes three classes to be completed:
- SimpleCensor: for solving the problem in a simple and quick way, using only this class.
- ObjectCensor: for solving the problem using PHP types (classes that let you write your code easily, like "Word", "Text", "CensoredWord", "Letter", etc).
- LoopLessCensor: for solving the problem without loops (for, do, while, foreach).

It should (and must) be created as many files and classes as necessary. It is allowed to use external libraries (although it's not necessary) through Composer.

The purpose of the exercise it's not only to solve the problem, but showing a good project organization, a good code style and a clear and descriptive code.

It will be taken into account new contributions and ideas to the original project (for example, a new censor type, new use cases for testing, new approaches) and it's not a requirement for solving the exercise.
