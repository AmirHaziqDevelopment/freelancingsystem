<!DOCTYPE html>
<html>
<head>
  <title>Freelancer Performance Review</title>
  <link rel="stylesheet" type="text/css" href="../css/review_page_cus.css">
</head>
<body>
  <div class="container">
    <h1>Perestasi Freelancer</h1>

    <form action="../databasefunction/submit_review.php" method="post">
      <div class="form-group">
        <label for="freelancer">Nama Freelancer:</label>
        <input type="text" id="freelancer" name="freelancer" required>
      </div>

      <div class="form-group">
        <label for="job">Tugasan Freelancer:</label>
        <input type="text" id="job" name="job" placeholder="state what job was done by the freelancer" required></input>
      </div>

      
      <div class="form-group">
        <label for="jobdone">status Kerja :</label>
        <input type="text" id="jobdone" name="jobdone" placeholder="state whether the task was completed or not"required></input>
      </div>

      <div class="form-group">
        <label for="rating">Penilayan:</label>
        <select id="rating" name="rating" required>
          <option value="">Select Rating</option>
          <option value="5">5 Stars</option>
          <option value="4">4 Stars</option>
          <option value="3">3 Stars</option>
          <option value="2">2 Stars</option>
          <option value="1">1 Star</option>
        </select>
      </div>

      <div class="form-group">
        <label for="rseview">Ulasan</label>
        <textarea id="review" name="review" required></textarea>
      </div>

      <div class="form-group">
        <input type="submit" value="Hantar">
      </div>
    </form>
  </div>
</body>
</html>
