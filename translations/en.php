<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", '<p class="warning">Your account is not activated yet. Please click on the confirm link in the mail.</p><br>');
define("MESSAGE_CAPTCHA_WRONG", '<p class="warning">Captcha was wrong!</p><br>');
define("MESSAGE_COOKIE_INVALID", '<p class="warning">Invalid cookie</p><br>');
define("MESSAGE_DATABASE_ERROR", '<p class="warning">Database connection problem.</p><br>');
define("MESSAGE_EMAIL_ALREADY_EXISTS", '<p class="warning">This email address is already registered.</p><br>');
define("MESSAGE_EMAIL_CHANGE_FAILED", '<p class="warning">Sorry, your email changing failed.</p><br>');
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", '<p class="success">Your email address has been changed successfully.</p><br> New email address is ');
define("MESSAGE_EMAIL_EMPTY", '<p class="warning">Email cannot be empty</p><br>');
define("MESSAGE_EMAIL_INVALID", '<p class="warning">Your email address is not in a valid email format</p><br>');
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", '<p class="warning">Sorry, that email address is the same as your current one. Please choose another one.</p><br>');
define("MESSAGE_EMAIL_TOO_LONG", '<p class="warning">Email cannot be longer than 64 characters</p><br>');
define("MESSAGE_LINK_PARAMETER_EMPTY", '<p class="warning">Empty link parameter data.</p><br>');
define("MESSAGE_LOGGED_OUT", '<p class="success">You have been logged out.</p><br>');
define("MESSAGE_UID_EMPTY", '<p class="warning">Your UID is empty</p><br>');
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", '<p class="warning">Login failed.</p><br>');
define("MESSAGE_OLD_PASSWORD_WRONG", '<p class="warning">Your OLD password was wrong.</p><br>');
define("MESSAGE_PASSWORD_BAD_CONFIRM", '<p class="warning">Password and password repeat are not the same</p><br>');
define("MESSAGE_PASSWORD_CHANGE_FAILED", '<p class="warning">Sorry, your password changing failed.</p><br>');
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", '<p class="success">Password successfully changed!</p><br>');
define("MESSAGE_PASSWORD_EMPTY", '<p class="warning">Password field was empty');
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", '<p class="warning">Password reset mail NOT successfully sent!</p><br> Error: ');
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", '<p class="success">Password reset mail successfully sent!</p><br>');
define("MESSAGE_PASSWORD_TOO_SHORT", '<p class="warning">Password has a minimum length of 6 characters</p><br>');
define("MESSAGE_PASSWORD_WRONG", '<p class="warning">Wrong password. Try again.</p><br>');
define("MESSAGE_PASSWORD_WRONG_3_TIMES", '<p class="warning">You have entered an incorrect password 3 or more times already. Please wait 30 seconds to try again.</p><br>');
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", '<p class="warning">Sorry, no such id/verification code combination here...</p><br>');
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", '<p class="success">Activation was successful! You can now log in!</p><br>');
define("MESSAGE_REGISTRATION_FAILED", '<p class="warning">Sorry, your registration failed. Please go back and try again.</p><br>');
define("MESSAGE_RESET_LINK_HAS_EXPIRED", '<p class="warning">Your reset link has expired. Please use the reset link within one hour.</p><br>');
define("MESSAGE_VERIFICATION_MAIL_ERROR", '<p class="warning">Sorry, we could not send you an verification mail. Your account has NOT been created.</p><br>');
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", '<p class="warning">Verification Mail NOT successfully sent!</p><br> Error: ');
define("MESSAGE_VERIFICATION_MAIL_SENT", '<p class="success">Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.</p><br>');
define("MESSAGE_USER_DOES_NOT_EXIST", '<p class="warning">This user does not exist</p><br>');
define("MESSAGE_USERNAME_BAD_LENGTH", '<p class="warning">Username cannot be shorter than 2 or longer than 64 characters</p><br>');
define("MESSAGE_USERNAME_CHANGE_FAILED", '<p class="warning">Sorry, your chosen username renaming failed</p><br>');
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", '<p class="warning">Your username has been changed successfully.</p><br> New username is ');
define("MESSAGE_USERNAME_EMPTY", '<p class="warning">Username field was empty</p><br>');
define("MESSAGE_USERNAME_EXISTS", '<p class="warning">Sorry, that username is already taken. Please choose another one.</p><br>');
define("MESSAGE_USERNAME_INVALID", '<p class="warning">Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters</p><br>');
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", '<p class="warning">Sorry, that username is the same as your current one. Please choose another one.</p><br>');

// views
define("WORDING_BACK_TO_LOGIN", "Go Back");
define("WORDING_REGISTRATION_SUCCESSFUL", '<p class="success">Registration Successful</p><br>');
define("WORDING_CHANGE_EMAIL", "Change email");
define("WORDING_CHANGE_PASSWORD", "Change password");
define("WORDING_CHANGE_USERNAME", "Change username");
define("WORDING_CURRENTLY", "currently");
define("WORDING_EDIT_USER_DATA", "Edit user data");
define("WORDING_EDIT_YOUR_CREDENTIALS", "You are logged in and can edit your credentials here");
define("WORDING_FORGOT_MY_PASSWORD", "I forgot my password");
define("WORDING_LOGIN", "Log in");
define("WORDING_LOGOUT", "Log out");
define("WORDING_NEW_EMAIL", "New email");
define("WORDING_NEW_PASSWORD", "New password");
define("WORDING_NEW_PASSWORD_REPEAT", "Repeat new password");
define("WORDING_NEW_USERNAME", "New username (username cannot be empty and must be azAZ09 and 2-64 characters)");
define("WORDING_OLD_PASSWORD", "Your OLD Password");
define("WORDING_PASSWORD", "Password");
define("WORDING_PROFILE_PICTURE", "Your profile picture (from gravatar):");
define("WORDING_REGISTER", "Register");
define("WORDING_REGISTER_NEW_ACCOUNT", "Register new account");
define("WORDING_REGISTRATION_CAPTCHA", "Please enter these characters");
define("WORDING_REGISTRATION_EMAIL", "User's email (please provide a real email address, you'll get a verification mail with an activation link)");
define("WORDING_REGISTRATION_PASSWORD", "Password (min. 6 characters!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Password repeat");
define("WORDING_REGISTRATION_USERNAME", "Username (only letters and numbers, 2 to 64 characters)");
define("WORDING_REMEMBER_ME", "Keep me logged in (for 2 weeks)");
define("WORDING_REQUEST_PASSWORD_RESET", "Request a password reset. Enter your username and you'll get a mail with instructions:");
define("WORDING_RESET_PASSWORD", "Reset my password");
define("WORDING_SUBMIT_NEW_PASSWORD", "Submit new password");
define("WORDING_USERNAME", "Username");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "You are logged in as ");
