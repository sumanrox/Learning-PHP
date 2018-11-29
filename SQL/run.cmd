set serv=localhost\MICROSOFT_SQL
set your_password=CYBERknight007
sqlcmd -S %serv% -U sa -P %your_password% -d SampleDB -Q "CREATE SCHEMA TestSchema;"
sqlcmd -S %serv% -U sa -P %your_password% -d SampleDB -Q "CREATE TABLE TestSchema.Employees (Id INT IDENTITY(1,1) NOT NULL PRIMARY KEY, Name NVARCHAR(50), Location NVARCHAR(50));"
sqlcmd -S %serv% -U sa -P %your_password% -d SampleDB -Q "INSERT INTO TestSchema.Employees (Name, Location) VALUES (N'Jared', N'Australia'), (N'Nikita', N'India'), (N'Tom', N'Germany');"
sqlcmd -S %serv% -U sa -P %your_password% -d SampleDB -Q "SELECT * FROM TestSchema.Employees;"
echo.
echo ALL SET, Happy Coding