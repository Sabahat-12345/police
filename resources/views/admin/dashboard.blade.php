<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - Slider Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      height: 100vh;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      padding-top: 20px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .main {
      flex-grow: 1;
      padding: 20px;
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="text-center">Admin Panel</h4>
    <a href="#">Dashboard</a>
    <a href="#">Manage Sliders</a>
    <a href="#">Users</a>
    <a href="#">Settings</a>
  </div>

  <!-- Main Content -->
  <div class="main">
    <h2>Slider Management</h2>
    <form>
      <div class="mb-3">
        <label for="sliderTitle" class="form-label">Slider Title</label>
        <input type="text" class="form-control" id="sliderTitle" placeholder="Enter slider title">
      </div>
      <div class="mb-3">
        <label for="sliderImage" class="form-label">Slider Image</label>
        <input type="file" class="form-control" id="sliderImage">
      </div>
      <div class="mb-3">
        <label for="sliderDesc" class="form-label">Description</label>
        <textarea class="form-control" id="sliderDesc" rows="3" placeholder="Slider description..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Slider</button>
    </form>
  </div>

</body>
</html>
