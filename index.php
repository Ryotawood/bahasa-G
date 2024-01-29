<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bahasa G</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <div class="container mt-5">
    <h2 class="mb-4">Bahasa G</h2>

    <div class="form-group">
      <label for="inputString">Masukkan kata :</label>
      <input type="text" class="form-control" id="inputString" placeholder="Masukkan Kata">
    </div>

    <button class="btn btn-primary" onclick="transformString()">Translate</button>

    <div class="mt-3">
      <label for="outputString">Hasil:</label>
      <textarea class="form-control" id="outputString" rows="3" readonly></textarea>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function transformString() {
      // Mendapatkan nilai input
      const inputString = document.getElementById('inputString').value;

      // Membuat request AJAX ke script PHP
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'transform.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Menampilkan hasil transformasi pada textarea output
          document.getElementById('outputString').value = xhr.responseText;
        }
      };
      xhr.send('inputString=' + inputString);
    }
  </script>

</body>

</html>