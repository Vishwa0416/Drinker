<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wines</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            display: flex;
            gap: 20px;
        }

        .container img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            color: #4a4a4a;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ asset('images/wine1.jpeg') }}" alt="Banrock Wine">
        <div class="content">
            <h1>Banrock Station Shiraz</h1>
            <p>Banrock Station Shiraz is a bold, full-bodied wine known for its deep flavors and smooth finish. Rich with dark berry notes like blackberry and plum, it has a delightful complexity enhanced by hints of pepper, vanilla, and subtle oak. The aroma combines ripe black cherry with spice, giving it an inviting warmth, while the palate is balanced and smooth, with soft tannins that make it easy to enjoy. Produced by Banrock Station, a winery committed to environmental conservation, this Shiraz is not only a flavorful choice but also an eco-friendly one, aligning with sustainable practices that support wetland and wildlife restoration projects.</p>
            <h3>£7.55</h3>
            <button class="btn">Add to Cart</button>
        </div>
    </div>
</body>

</html>
