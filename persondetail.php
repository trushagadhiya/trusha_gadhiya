<?php

include 'connection.php';
include 'header.php';

?>


<!DOCTYPE html>
<html>
<head>
    <title>Person Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-left:150px;
			margin-top:100px;
			background-color:smoke white;
			
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align:center;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        button {
            padding: 10px 15px;
        }
		
    </style>
</head>
<body>
    <table class="name">
        <tr class"detail">
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>trusha</td>
            <td>20</td>
            <td>
                <button onclick="editRow(this)">Edit</button>
                <button onclick="deleteRow(this)">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Jaimisha</td>
            <td>25</td>
            <td>
                <button onclick="editRow(this)">Edit</button>
                <button onclick="deleteRow(this)">Delete</button>
            </td>
        </tr>
        <tr>
            <td>hetal</td>
            <td>40</td>
            <td>
                <button onclick="editRow(this)">Edit</button>
                <button onclick="deleteRow(this)">Delete</button>
            </td>
        </tr>
        <tr>
            <td>abhiksha</td>
            <td>28</td>
            <td>
                <button onclick="editRow(this)">Edit</button>
                <button onclick="deleteRow(this)">Delete</button>
            </td>
        </tr>
        <tr>
            <td>Deval</td>
            <td>35</td>
            <td>
                <button onclick="editRow(this)">Edit</button>
                <button onclick="deleteRow(this)">Delete</button>
            </td>
        </tr>
    </table>

    <script>
        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");
            var name = cells[0].textContent;
            var age = cells[1].textContent;
            
            console.log(""Edit: Name = " + name + ", Age = " + age);
        }

        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
<?php
include 'footer.php';
?>
</html>
