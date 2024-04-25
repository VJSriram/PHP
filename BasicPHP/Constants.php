<?php

    // Constants

    echo 'Constants in PHP <br>';

    // Constants are like variables, but once they are defined, they cannot be changed or undefined
    // Constants are case-sensitive by default and follow the same naming rules as variables

    // Syntax : define("Constant Name", "constant value");

    define("PI", 3.14);

    echo PI;

    /* Constants can hold various types of values including 
        strings, integers, floats, arrays or objects.
        Constants are globally accessible throughout the script,
        regardless of the scope they are defined in.
    */

    /*

    PHP constants are used in real-time programming in various scenarios to provide fixed values that remain unchanged throughout the execution of a script. 
    Here are some specific scenarios in which PHP constants are commonly utilized:

1. **Configuration Settings**:
   - **Scenario**: PHP constants are used to define configuration settings that remain constant throughout the execution of a script or application.
   - **Example**: 
     ```php
     define('DATABASE_HOST', 'localhost');
     define('DATABASE_USER', 'username');
     define('DATABASE_PASSWORD', 'password');
     ```

2. **Error Codes**:
   - **Scenario**: PHP constants are used to represent error codes or status flags for error handling and reporting.
   - **Example**: 
     ```php
     define('ERROR_FILE_NOT_FOUND', 404);
     define('ERROR_PERMISSION_DENIED', 403);
     ```

3. **Mathematical or Scientific Constants**:
   - **Scenario**: PHP constants are used to define mathematical or scientific constants for calculations or comparisons.
   - **Example**: 
     ```php
     define('PI', 3.14159265359);
     define('SPEED_OF_LIGHT', 299792458); // in meters per second
     ```

4. **API Keys and Secret Tokens**:
   - **Scenario**: PHP constants are used to store API keys, access tokens, or other sensitive information securely.
   - **Example**: 
     ```php
     define('API_KEY', 'your_api_key_here');
     define('SECRET_TOKEN', 'your_secret_token_here');
     ```

5. **Enumeration Values**:
   - **Scenario**: PHP constants are used to define enumerated values for representing a fixed set of options or states.
   - **Example**: 
     ```php
     define('STATUS_ACTIVE', 1);
     define('STATUS_INACTIVE', 0);
     ```

6. **Path and File Constants**:
   - **Scenario**: PHP constants are used to define paths, directories, or filenames that remain constant throughout the execution of a script.
   - **Example**: 
     ```php
     define('UPLOAD_DIRECTORY', '/var/www/uploads/');
     define('CONFIG_FILE', '/var/www/config/config.php');
     ```

PHP constants are particularly useful in real-time programming for maintaining consistency, improving code readability, and facilitating easier maintenance. 
By defining values once as constants, you ensure that they are not accidentally modified elsewhere in the code, making your application more robust and reliable.

    */
?>