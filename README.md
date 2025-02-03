# **Laravel Developer Technical Assessment**  

Welcome to the **Gloztec Solutions Laravel Developer Assessment**. This test will evaluate your skills in **Laravel, APIs, debugging, Git, and SQL**.  

**Instructions:**  
- Clone this repository to your local machine.  
- Complete the tasks outlined below.  
- Push your changes to **your GitHub repository** and submit the link.  
- Ensure your code is clean, well-documented, and properly structured.  
- AI tools are allowed, but **make sure you understand your solution**.  

---

## **Task 1: Laravel CRUD Operations**  
### **Objective:**  
Build a simple **Task Management System** using Laravel.  

### **Requirements:**  
1. Create a `Task` model with the following fields:  
   - `title` (string, required)  
   - `description` (text, optional)  
   - `status` (enum: `pending`, `completed`, default: `pending`)  
   - `due_date` (date, required)  
2. Implement **CRUD operations** using Laravel controllers and views.  
3. Add **validation rules** (e.g., `title` is required, `due_date` must be a future date).  
4. Implement **Eloquent Scopes** to filter tasks (`pending` or `completed`).  
5. Set up **Laravel authentication** (Breeze or Laravel UI).  

---

## **Task 2: API Development**  
### **Objective:**  
Create a RESTful API for managing products.  

### **Requirements:**  
1. Create a `Product` model with:  
   - `name` (string, required)  
   - `price` (decimal, required)  
   - `stock` (integer, required)  
2. Develop an **API controller** with CRUD operations.  
3. Use **Laravel Sanctum or Passport** for authentication.  
4. Validate API requests (e.g., `price` must be numeric, `stock` must be positive).  
5. Write at least **one unit test** for an API endpoint.  

---

## **Task 3: Debugging & Optimization**  
### **Objective:**  
Identify and fix issues in the provided buggy code.  

### **Instructions:**  
- Open the **`app/Http/Controllers/BuggyTaskController.php`** file.  
- The code inside has several issues.  
- Fix the bugs and optimize the code.  
- Explaing what you fixed in **BuggyCodeFix.md** file.  

---

## **Task 4: Git Assessment**  
### **Objective:**  
Demonstrate proper **Git usage** in a real-world scenario.  

### **Instructions:**  
1. Create a new branch named **`feature/task-improvement`**.  
2. Make improvements to the Task Management System.  
3. Commit your changes with **meaningful messages** (e.g., `fix: added validation for task status`).  
4. Open a **Pull Request (PR)** and describe your changes.  

---

## **Task 5: SQL Query Challenge**  
### **Objective:**  
Write optimized MySQL queries for an e-commerce database.  

### **Scenario:**  
You have the following tables:  

**`orders`**  
| id | user_id | total_amount | created_at |  
|----|---------|--------------|------------|  

**`order_items`**  
| id | order_id | product_id | quantity | price |  
|----|---------|------------|----------|------|  

### **Queries:**  
1. Retrieve the **top 5 customers** with the highest total spending.  
2. Get the **total revenue** for the current month.  
3. List the **most sold products**.  

---

## **Submission Guidelines**  
- Push your changes to **your GitHub repository**.  
- Share the repository link with us.  
- Include a **README update** explaining your approach.  

**Good luck!** We’re looking for clean, efficient, and well-structured code.  
