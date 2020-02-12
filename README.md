# Validating User Input

One topic we haven't looked at in depth is validation user input.

This repository contains a simple create MVC example. It is very similar to the example we looked at previously. It inserts a film into the films table.

There are a number of key differences to the example we have looked at previously

1. This uses a postback form. Instead of submitting the data to a *save.php* controller, the form data is submitted back to *create.php*.
2. The controller validates the first field in the form.
   * To do this it uses a function *isComplete()* from the *validation-fncs.php* file. I have saved this file in a folder called *lib* (stands for library).
   * If the user hasn't entered a title for the film, an error message is displayed and the field is re-populated with the value the user typed in previously. Have a look in the view to see how this is done.

Run the example and have a good look at the code to try and understand what is happening.

## On Your Own
1. In *create.php* validate the other fields (year and duration). There is already a function in the *validation-fncs.php* file, *isInteger()*, that will help you. Call this to test if a value is an integer or not.

>The *isInteger()* function uses the built-in *filter_var* function. There are other filters that can be useful to us, see http://php.net/manual/en/function.filter-var.php for more info.

2. Checking the year and duration are integers is a good start but this needs to be more robust e.g. what if the user enters a year that is earlier than 1895 (the year the first feature film was shown).

Add an additional function in the *validation-fncs.php*, *isValidYear()*. Like the existing functions this should return *true* or *false*, this time depending on whether the user has entered a valid year.
