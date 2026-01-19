<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightblue;
  font-family: verdana;
}

div {
  background-color: white;
  width: 320px;
  padding: 20px;
  margin: auto;
  border-radius: 10px;
}

h2 {
  color: darkblue;
  text-align: center;
}

textarea {
  width: 100%;
  height: 80px;
  margin-top: 10px;
  padding: 8px;
}

button {
  margin-top: 10px;
  width: 100%;
  background-color: darkgreen;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
}

button:hover {
  background-color: green;
}
</style>
</head>

<body>Rating:
  
  <select>
    <option>*</option>
    <option>**</option>
    <option>***</option>
    <option>****</option>
    <option>*****</option>
  </select>
  <br><br>


<div>
  <h2>Rate & Review</h2>
  <p>Write your feedback</p>
  <textarea placeholder="Write your review here..."></textarea>
  <button>Submit Review</button>
</div>

</body>
</html>
