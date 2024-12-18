
### **Tabela: `Employees`**
Armazena informações sobre os funcionários.

| EmployeeID | Name        | DepartmentID | HireDate   | Salary  |
|------------|-------------|--------------|------------|---------|
| 1          | Alice       | 101          | 2020-01-15 | 5000.00 |
| 2          | Bob         | 102          | 2018-06-01 | 4500.00 |
| 3          | Charlie     | 101          | 2019-03-20 | 5200.00 |
| 4          | Diana       | 103          | 2021-07-10 | 4800.00 |
| 5          | Eve         | 102          | 2017-09-12 | 4700.00 |

---

### **Tabela: `Departments`**
Armazena informações sobre os departamentos.

| DepartmentID | DepartmentName |
|--------------|----------------|
| 101          | Sales          |
| 102          | HR             |
| 103          | IT             |

---

### **Tabela: `Projects`**
Armazena informações sobre os projetos e os funcionários atribuídos.

| ProjectID | ProjectName      | EmployeeID |
|-----------|------------------|------------|
| 1         | Website Upgrade  | 1          |
| 2         | Employee Training| 2          |
| 3         | App Development  | 3          |
| 4         | Server Migration | 4          |
| 5         | Recruitment      | 2          |
| 6         | Client Outreach  | 1          |

---

### **Consultas de Exemplo**

1. **Seleção simples:**
   - Liste todos os funcionários com salário superior a 4500.
   ```sql
   ```

2. **Join básico:**
   - Liste os nomes dos funcionários e o nome de seus departamentos.
   ```sql

   ```

3. **Join avançado:**
   - Liste os nomes dos funcionários junto com os projetos nos quais estão trabalhando.
   ```sql

   ```
