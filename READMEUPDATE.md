# Gloztec Solutions Laravel Developer Assessment

## **Task 1: Laravel CRUD Operations**

### **Objective:**
Build a simple **Task Management System** using Laravel.

### **Approach:**

1. **Task Model Creation**:
   - I created a `Task` model with the required fields: `title`, `description`, `status`, and `due_date`. 
   - For `status`, I used the **enum** type to enforce the allowed values (`pending`, `completed`), with `pending` as the default.
   - The `due_date` field was defined as a required `date` field to ensure tasks have a due date.

2. **CRUD Operations**:
   - **Create**: I implemented a form for users to add new tasks, with validation rules to ensure the `title` is required and the `due_date` is a future date.
   - **Read**: I created views to display all tasks and filters to show `pending` or `completed` tasks using **Eloquent scopes**.
   - **Update**: I added an edit form that pre-fills existing task details and allows the user to update task data.
   - **Delete**: I added a delete functionality where a user can remove tasks from the database.

3. **Eloquent Scopes**:
   - I implemented two scopes in the `Task` model: one for retrieving `pending` tasks and one for `completed` tasks. This helps in filtering tasks easily.

4. **Laravel Authentication**:
   - I used **Laravel UI** to set up authentication and allow users to log.

### **Challenges Faced**:
   - Ensuring proper validation of the `due_date` field, particularly checking that it’s a future date.
   - Managing task status updates and using Eloquent scopes effectively to display filtered tasks.

---

## **Task 2: API Development**

### **Objective:**
Create a RESTful API for managing products.

### **Approach:**

1. **Product Model**:
   - I created a `Product` model with the fields `name`, `price`, and `stock`. 
   - I ensured that `name` was unique and that `price` and `stock` had the necessary validation (numeric for `price`, positive for `stock`).

2. **API Controller**:
   - I created an API controller that provides **CRUD operations** (Create, Read, Update, Delete) for products.
   - I used **Laravel resource routes** and validation to ensure proper data is passed when creating or updating products.

3. **Authentication**:
   - I chose **Laravel Sanctum** for API authentication to secure the product routes.
   - I created middleware to ensure that only authenticated users could perform CRUD operations on the products.

4. **Unit Test**:
   - I wrote a unit test for the `store()` method in the API controller to ensure that products are being created correctly with valid data.

### **Challenges Faced**:
   - Setting up **Sanctum** authentication for API routes and ensuring token-based authentication worked correctly.
   - Writing the unit test for the API endpoint, ensuring all edge cases like invalid data were handled.

---

## **Task 3: Debugging & Optimization**

### **Objective:**
Identify and fix issues in the provided buggy code.

### **Approach:**

1. **Reviewing the Code**:
   - I first identified several issues in the `BuggyTaskController.php` file such as missing return statements, incorrect method calls, and unoptimized queries.
   - I refactored the code to ensure **proper use of Eloquent** and fixed any logic issues.

2. **Optimizing Queries**:
   - I optimized queries by reducing **N+1 query issues** and using **Eloquent relationships** instead of raw queries where applicable.

3. **Explaining the Fixes**:
   - In the **BuggyCodeFix.md** file, I listed all the bugs, explained the changes made, and highlighted the optimizations.

---

## **Task 4: Git Assessment**

### **Objective:**
Demonstrate proper **Git usage** in a real-world scenario.

### **Approach:**

1. **Branching**:
   - I created a new branch `feature/task-improvement` from the main branch to work on the improvements for the Task Management System.

2. **Commits**:
   - I made changes incrementally, committing after each meaningful update such as adding validation, improving views, or fixing bugs.
   - Example commit messages:
     - `feat: added validation for task status`
     - `fix: optimized query to fetch tasks`
     - `chore: updated UI for task creation form`

3. **Pull Request**:
   - I created a pull request and included a detailed description of all the changes made, the reasons for those changes, and any future improvements to be considered.

---

## **Task 5: SQL Query Challenge**

### **Objective:**
Write optimized MySQL queries for an e-commerce database.

### **Approach:**

1. **Top 5 Customers with the Highest Total Spending**:
   - I wrote a query that joins the `orders` and `order_items` tables, calculating the total spending per user, and ordered the result by total spending in descending order, limiting the result to 5 users.

   ```sql
   SELECT o.user_id, SUM(oi.quantity * oi.price) AS total_spending
   FROM orders o
   JOIN order_items oi ON o.id = oi.order_id
   GROUP BY o.user_id
   ORDER BY total_spending DESC
   LIMIT 5;


// Query to get the total revenue for the current month
$query = "
    SELECT SUM(oi.quantity * oi.price) AS total_revenue
    FROM orders o
    JOIN order_items oi ON o.id = oi.order_id
    WHERE YEAR(o.created_at) = YEAR(CURDATE())
    AND MONTH(o.created_at) = MONTH(CURDATE());
";



// Query to list the most sold products
$query = "
    SELECT oi.product_id, SUM(oi.quantity) AS total_sold
    FROM order_items oi
    GROUP BY oi.product_id
    ORDER BY total_sold DESC;
";
