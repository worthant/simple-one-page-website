# Laboratory Work 1 ![Build Status](https://github.com/worthant/web-programming/actions/workflows/build/badge.svg) [![Turkish](https://img.shields.io/badge/translation-RU-red)](./README_RU.md)

- [Laboratory Work 1  ](#laboratory-work-1--)
  - [Requirements for Laboratory Work No. 1 of Variant `1`](#requirements-for-laboratory-work-no-1-of-variant-1)
  - [How to get everything working?](#how-to-get-everything-working)
  - [User Manual](#user-manual)

## Requirements for Laboratory Work No. 1 of Variant `1`

1. [ ] 1. Develop a `PHP script` that determines whether a point on the coordinate plane falls within a specified area.

   ```python
   •  The R parameter and the coordinates of the point should be passed to the script via an `HTTP request`.
   •  The script should:
      ├ perform `validation` of the data
      └ return an `HTML page` with a table
         └ the `table` should contain the received parameters and the result of the calculations
            └ *i.e., the fact of the point falling or not falling into the area*
   •  Previous results should be preserved between requests and displayed in the table.
   •  The response should include data on the current time and the script execution time.

2. [ ] 2. Create an HTML page that generates data for submission for processing by the PHP script.

    ```python
    •  `Block layout` should be used for positioning text and graphic elements.
    •  Form data should be sent for processing via a `POST request`.
    •  Stylesheets should be located in separate files.
    •  The HTML page should have a "header" containing:
       ├ student's full name
       ├ group number
       └ variant number. 
    •  When formatting the header, it is necessary to explicitly specify (in the cascading stylesheet):
       ├ font `(fantasy)`
       ├ font color
       └ font size
    •  Input element margins should be specified in `percentages`.
    ```

3. [ ] 3. In working with CSS, the use of the following should be demonstrated:
   - [ ] ID selectors
   - [ ] Pseudo-class selectors
   - [ ] Attribute selectors
   - [ ] Pseudo-element selectors

4. [ ] 4. As well as such CSS style properties as:
   - [ ] inheritance
   - [ ] cascading

5. [ ] 5. The page should contain a script in JavaScript

    ```python
    •  The script should validate values entered by the user in form fields
    •  Any incorrect values (letters in point coordinates / negative radius / ... ) should be blocked.
    ```

## Preparation Topics

```python
1. HTTP protocol. Structure of requests and responses, request methods, server response codes, request and response headers.
2. HTML markup language. Features, main tags and tag attributes.
3. Structure of an HTML page. Document Object Model (DOM).
4. HTML forms. Setting the HTTP request method. Rules for placing forms on pages, types of input fields.
5. Cascading Style Sheets (CSS). Structure - rules, selectors. Types of selectors, features of their application. Rule priorities. Advantages of CSS over direct style setting via tag attributes.
6. LESS, Sass, SCSS. Key features, comparative characteristics. Browser compatibility, translation into "ordinary" CSS.
7. Client scripts. Features, areas of application. JavaScript language.
8. ECMAScript versions, new features of ES6 and ES7.
9. Synchronous and asynchronous processing of HTTP requests. AJAX.
10. jQuery library. Purpose, main API. Usage for implementing AJAX and working with DOM.
11. Implementing AJAX using SuperAgent.
12. Server scripts. CGI - definition, purpose, key features.
13. FastCGI - features of the technology, advantages and disadvantages relative to CGI.
14. PHP language - syntax, data types, embedding in web pages, rules for handling HTTP requests. Features of the implementation of OOP principles in PHP.
```

## How to get everything working?

1. Open the terminal and navigate to the directory where you want to clone the repository:

   ```bash
   cd path/to/your/workspace
   ```

2. Clone the repository:

   ```bash
   SSH(recommended): git@github.com:worthant/web-programming.git
   HTTPS: https://github.com/worthant/web-programming.git
   ```

3. Navigate to the project directory:

   ```bash
   cd <your_repo>
   ```

4. Initialize the project using the package manager `yarn`:

   ```bash
   yarn init
   ```

   - for now, you can skip all questions by pressing "enter"

5. Install `http-server` - a simple static server:

   ```bash
   yarn add http-server
   ```

6. Start the server:

   ```bash
   yarn http-server
   ```

   - by default, the **http-server** package will start the server on port 8080
   - to change the port: `yarn http-server -p 3000`
7. Open your browser and navigate to `http://localhost:8080`

## User Manual

1. Fill in the form fields on the main page: enter the point coordinates and radius
2. Click the "Submit" button to send the data for processing by the PHP script
3. The processing results will be displayed in the table on the main page

- Demonstration in the [youtube tutorial video](https://youtu.be/dQw4w9WgXcQ?t=90)
