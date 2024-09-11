<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
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
  margin-bottom: 20px;
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

.feature-box label {
  display: block;
  margin-top: 10px;
  margin-bottom: 5px;
  font-weight: bold;
  color: #444;
}

.feature-box input[type="file"] {
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
}

.payment-section {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.payment-section h2 {
  margin-bottom: 15px;
  color: #444;
}

.payment-box {
  margin-top: 10px;
}

.payment-box label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #444;
}

.payment-box select {
  padding: 10px;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #ccc;
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

    <!-- Features Section: 3 Grids with Image Upload -->
    <div class="features-section">
      <div class="feature-box">
        <h3>Feature 1</h3>
        <p>Details about Feature 1</p>
        <label for="image-upload1">Upload Image:</label>
        <input type="file" id="image-upload1" name="image-upload1">
      </div>
      <div class="feature-box">
        <h3>Feature 2</h3>
        <p>Details about Feature 2</p>
        <label for="image-upload2">Upload Image:</label>
        <input type="file" id="image-upload2" name="image-upload2">
      </div>
      <div class="feature-box">
        <h3>Feature 3</h3>
        <p>Details about Feature 3</p>
        <label for="image-upload3">Upload Image:</label>
        <input type="file" id="image-upload3" name="image-upload3">
      </div>
    </div>

    <!-- Payment Options Section -->
    <div class="payment-section">
      <h2>Payment Options</h2>
      <div class="payment-box">
        <label for="payment-method">Choose Payment Method:</label>
        <select id="payment-method" name="payment-method">
          <option value="credit-card">Credit Card</option>
          <option value="paypal">PayPal</option>
          <option value="bank-transfer">Bank Transfer</option>
        </select>
      </div>
    </div>
  </div>
</body>
</html>
