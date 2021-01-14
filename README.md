# php_sign_up

Full Stack Apprentice Assignment

For this task, you're going to create a simple web signup form that will accept input from the user and send it to an API endpoint.

Your form should have the following fields: 
1. First Name, 
2. Last Name, 
3. Email Address, 
4. Phone Number. 
 -index.php line 98

The first name and email address fields will be required on your form.
 -index.php line 103
 -index.php line 109

When a user completes the form, the following actions should be taken.

The email address should be validated when the user clicks Submit. Meaning that the text entered should be in the right format for an email address.
 -index.php line 76

After the email address has been validated, the data should be stripped and cleaned to eliminate any possibilities of SQL injections or invalid characters before the data gets posted.
 -Data.php line 4

Your script should create a unique hexadecimal ID for the user that's based on their email address.
 -Api.php line 14

The unique ID, and all form values should then be posted to the API endpoint.
 -Api.php line 14

Note:

Use webhook.site to obtain an open API endpoint that you can use for this task.
Your script should be written in object-oriented PHP. With classes and methods.
You may use vanilla JavaScript, jQuery or any other library you're familiar with for the front-end form validation.