<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />

  <title>Docker | Website</title>
</head>
<body>
  <?php
    $results = file_get_contents("http://node-container:9001/products");
    $products = json_decode($results);    
  ?>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Pre&ccedil;o</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $product): ?>
          <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
          </tr>
        <?php endforeach; ?>  
      </tbody>
    </table>
  </div>
</body>
</html>