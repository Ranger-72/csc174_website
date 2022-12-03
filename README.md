# csc174_website

Full Path to files that Handle SQL Inserts and Selects.
1. connection.php (Handles Establishing Connection with the Database)


2. index.php  (Contains a "Select" query to display current data from warehouse table)


3. insert_display.php (Contains prepared statement for a "Insert" for the warehouse table 
                       and a "Select" query to display updated data (same process as seen in index.php))

File Notes:

index.php: - Handles the main frontend (Textbox, button, and table)

insert_display.php: - Handles backend for "Insert" with prepared statement.
                    - Contains frontend code to create a table in to display updated table data.

connection.php: - Backend code to establish connection to database.
