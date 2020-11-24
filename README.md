# Validating User Input

This repository contains a simple create MVC example. It is very similar to the example we looked at previously. It inserts a film into the films table.

There are a number of key differences to the example we have looked at previously

1. This uses a postback form. Instead of submitting the data to a *save.php* controller, the form data is submitted back to *create.php*.
2. The controller validates the first field in the form.
   * To do this it uses a function *isComplete()* from the *validation-fncs.php* file. I have saved this file in a folder called *lib* (stands for library).
   * If the user hasn't entered a title for the film, an error message is displayed and the field is re-populated with the value the user typed in previously. Have a look in the view to see how this is done.

To run the example the example you will need to:-
* Make sure you have the films database we have looked at previously
* Change the connection settings in *film-model.php* to match your database.
* Open *create.php* in the browser (this is the controller).

You should be able to enter the details of a new film and these should be added to the database.

You should also find there is some simply validation for the *title* field of the form.

Have a good look at the code to try and understand what is happening.

## On Your Own
1. In *create.php* validate the other fields (year, duration and certificate). There are already a functions in the *validation-fncs.php* file that will help you.
  * Make sure you re-populate the form with the previously entered values (see the title text field for an example).
  * Make sure you display suitable error messages.

2. Using a text field for entering the certificate isn't very robust. Replace the certificate text field with a series of radio buttons so that the user can't enter an invalid certificate.
    * To re-populate the form you will need to use the *checked* property of radio button. 
