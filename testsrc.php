<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.search-container {
  float: right;
}


.searchbox{
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
.search-container {
    float: none;
  }
.search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .searchbox {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

 <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" class="searchbox">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

</body>
</html>
