<p align="center">
  <a href="https://ibb.co/Sv4F0Yq">
    <picture>
      <img src="https://i.ibb.co/nkNxfdh/html.png" height="110">
    </picture>
    <h1 align="center">Simple one page website</h1>
  </a>
</p>

<p align="center">
  <a aria-label="Repo size" href="https://github.com/worthant/simple-one-page-website">
    <img alt="" src="https://img.shields.io/github/repo-size/worthant/simple-one-page-website?style=for-the-badge&logo=github">
  </a>
  <a aria-label="Translation" href="./README_RU.md">
    <img alt="" src="https://img.shields.io/badge/translation-RU-red?style=for-the-badge">
  </a>
  <a aria-label="Build Status" href="https://github.com/worthant/simple-one-page-website/actions">
    <img alt="" src="https://img.shields.io/github/actions/workflow/status/worthant/simple-one-page-website/php.yaml?branch=main&style=for-the-badge&logo=github-actions">
  </a>
  <a aria-label="License" href="./LICENSE">
    <img alt="" src="https://img.shields.io/github/license/worthant/simple-one-page-website?style=for-the-badge">
  </a>
</p>

<details open>
   <summary><b>Table of Contents</b></summary>

- [Introduction](#intro)
- [Requirements for Laboratory Work](#requirements)
- [Preparation Topics](#preparation)
- [How to get everything working?](#setup)
- [User Manual](#manual)
- [Theoretical materials](#theory)

</details>

<a id="intro"></a>

## Introduction

> Welcome to this laboratory project, a blend of essential web technologies. Here, I've developed a tool that combines `PHP`, `HTML`, `CSS`, and `JavaScript` to determine a point's position on a coordinate plane :smiley:
>
> - Users can seamlessly input data through an **interactive HTML interface**,  
> which then utilizes `PHP for backend computations`.  
> - With `JavaScript in play`, the tool ensures data integrity by `validating` user input.  
>
> Dive in to explore how these technologies come together for a functional, user-friendly experience :computer:

## Requirements for variant 1204

   |![изображение](https://github.com/worthant/simple-one-page-website/assets/43885024/4e3bc97e-313b-4592-9476-2a8cd112fe10)|
   |:-:|

   1. [x] 1. Develop a `PHP script` that determines whether a point on the coordinate plane falls within a specified area.

      ```python
      •  The R parameter and the coordinates of the point should be passed to the script via an `HTTP request`.
      •  The script should:
         ├ perform `validation` of the data
         └ return an `HTML page` with a table
            └ the `table` should contain the received parameters and the result of the calculations
               └ *i.e., the fact of the point falling or not falling into the area*
      •  Previous results should be preserved between requests and displayed in the table.
      •  The response should include data on the current time and the script execution time.

   2. [x] 2. Create an HTML page that generates data for submission for processing by the PHP script.

       ```python
       •  `Block layout` should be used for positioning text and graphic elements.
       •  Form data should be sent for processing via a `GET request`.
       •  Stylesheets should be located in html file (<styles>).
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

   3. [x] 3. In working with CSS, the use of the following should be demonstrated:
      - [x] ID selectors
      - [x] Pseudo-class selectors
      - [x] Attribute selectors
      - [x] Pseudo-element selectors

   4. [x] 4. As well as such CSS style properties as:
      - [x] inheritance
      - [x] cascading

   5. [x] 5. The page should contain a script in JavaScript

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
      SSH(recommended): git@github.com:worthant/simple-one-page-website.git
      HTTPS: https://github.com/worthant/simple-one-page-website.git
      ```

   3. Navigate to the project directory:

      ```bash
      cd <your_repo>
      ```

   4. Initialize the project using the package manager `yarn` (should be installed using `npm`):

      ```bash
      yarn install
      ```

   5. Compiles and hot-reloads for development

      ```bash
      yarn dev
      ```

   6. Open your browser and navigate to `http://localhost:3000/`

   7. Change `deploy.sh` for your needs and deploy changes to server using `yarn deploy`

## User Manual

   1. Fill in the form fields on the main page: enter the point coordinates and radius
   2. Click the "Check" button to send the data for processing by the PHP script
   3. The processing results will be displayed in the table on the main page

## Theoretical materials </b></h2></summary>

   1. **URI** - **URL** - **URN** : <https://wiki.merionet.ru/articles/url-i-uri-v-chem-razlichie/>
   2. **Web docs 1** : <https://www.w3schools.com/css/css3_borders.asp>
   3. **Web docs 2** : <https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th>
   4. **Pretty good guide for se.ifmo questions** : [guide](https://docs.google.com/document/u/0/d/13eAoOwDXg1enr3eFeawcM76AAhufZljDA4XYcNYAyDg/mobilebasic)
