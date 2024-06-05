<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .add-product-form {
            margin-top: 30px;
        }
        .add-product-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .add-product-form input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        .add-product-form button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .add-product-form button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form class="add-product-form" method="POST" action="{{ route('products.store') }}">
            @csrf
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price"><br>

            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description"><br>

            <button type="submit">Add Product</button>
        </form>

        <!-- Danh sách sản phẩm -->
        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>$10</td>
                    <td>Lorem ipsum dolor sit amet</td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>$20</td>
                    <td>Consectetur adipiscing elit</td>
                </tr>
                <!-- Thêm sản phẩm khác nếu cần -->
            </tbody>
        </table>
    </div>
</body>
</html>
