<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      padding: 20px;
    }

    .dashboard-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      color: #333;
    }

    .top-section {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .box {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 48%;
    }

    .box h2 {
      margin-bottom: 15px;
      color: #444;
    }

    .box ul {
      list-style: none;
    }

    .box ul li {
      padding: 8px 0;
      border-bottom: 1px solid #ddd;
    }

    .features-section {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .feature-box {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .feature-box h3 {
      margin-bottom: 10px;
      color: #444;
    }

    .feature-box p {
      color: #666;
    }
  </style>
  <body>
    <div class="dashboard-container">
      <!-- Header -->
      <div class="header">
        <h1>My Dashboard</h1>
      </div>

      <!-- Top Section: Products and Transactions -->
      <div class="top-section">
        <div class="box" id="products">
          <h2>My Products</h2>
          <ul>
            <li>Product 1</li>
            <li>Product 2</li>
            <li>Product 3</li>
          </ul>
        </div>
        <div class="box" id="transactions">
          <h2>My Transactions</h2>
          <ul>
            <li>Transaction 1</li>
            <li>Transaction 2</li>
            <li>Transaction 3</li>
          </ul>
        </div>
      </div>

      <!-- Features Section: 3 Grids -->
      <div class="features-section">
        <div class="feature-box">
          <img class="img-fluid w-100" src="images/test.jpg" alt="" />
          <h3>Feature 1</h3>
          <p>Details about Feature 1</p>
          <img class="img-fluid w-100" src="images/test.jpg" alt="" />
        </div>
        <div class="feature-box">
          <h3>Feature 2</h3>
          <p>Details about Feature 2</p>
        </div>
        <div class="feature-box">
          <h3>Farmer Group Formation</h3>
          <p>Get in touch with other farmers making your own community</p>
        </div>
      </div>
    </div>
  </body>
</html>
