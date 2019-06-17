# zencode
opinion_poll_model.php
======================
“public function __construct()” is the class constructor method that is used to establish the database connection

“public function execute_query(…)” is the method for executing queries such as insert, update and delete

“public function select” is the method for retrieving data from the database and returning a numeric array.

“public function insert(…)” is the insert method that calls the execute_query method.

“public function __destruct()” is the class destructor that closes the database connection.

index.php
=========
“require 'opinion_poll_model.php';” loads the business logic class

“$model = new Opinion_poll_model();” creates an instance of the business logic class

“if (count($_POST) == 1)…” performs the data validation and uses JavaScript to display a message box if not candidate has been voted for.

“if (count($_POST) > 1)…” checks if a vote has been selected by counting the number of items in the $_POST array. If no item has been select, the $_POST will only contain the submit item. If a candidate has been chosen, the $_POST array will two elements, the submit and vote item. This code is also used to insert a new vote record and then display the results page

“exit;” is used to terminate the script execution after the results have been displayed so that the opinion poll form is not displayed.

“require 'opinion.html.php';” displays the opinion poll form if nothing has been selected.

opinion.html.php
================
This is the area we can do the polling

results.html.php
==================
To view the result

Summary
=======
Dividing your application into business logic, front controller view layers  is a good application design practice

JavaScript is useful for performing client side validation

It is a good programming practice to use file.html.php for files that contain both html and php codes

The opinion poll application demonstrates how the knowledge learnt in the previous lessons can be put together to developing a working application with a database back end.
