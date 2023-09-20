<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Projects</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
  <script>
    function home(){
        window.location.href="index.php";
    }
  </script>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap');
body {
  background-color: #333;
  font-family: 'Nunito', sans-serif;
  color: #333;
}

.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  min-height: 100vh;
}
#btn{
    display: flex;
    font-size: 20px;
    float: right;
    border-radius: 1rem;
    position: absolute;
    top: 1%;
    right:2%;
    
  }
  #btn:hover{
    background-color: aquamarine;
    color: black;
  }
  
.project {
  width: 70%;
  background-color: #fff;
  border: 7px solid aquamarine;
  border-radius: 4px;
  padding: 20px;
  margin: 30px;
  text-align: center;
}

.project_title {
  font-size: 24px;
  margin-bottom: 10px;
  color: sienna; /* Added blue color */
}

.project_description {
  font-size: 14px;
  margin-bottom: 20px;
}

.project_techstack {
    display:block;
    background-color: #333;
  font-size: 1px;
  margin-bottom: 10px;
}

.project_techstack_list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.project_techstack_list li {
  font-size: 14px;
  margin-bottom: 5px;
}

/* Hover effect */
.project:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
ul li { 
    display:inline-block;
    
    width:20px;
    height:20px;
    padding: 30px;
    
}

</style>
<body>
<div >
        <input type="button" id="btn" value="HOME" onclick="home()">
    </div>
  <div class="container">
    <div class="project">
      <h1 class="project_title">FOOD WASTAGE REDUCTION</h1>
      <p class="project_description">
        One paltform to manage leftover food.
        <br>
        A website for the restaurent as well as NGO's.It provides a interface for NGO's 
        to request the leftover food in the restaurent and  distribute them to people in need.
        Restaurents can update about leftover food.
      </p>
      <h3 class="project_techstack">Tech Stack:</h3>
      
      <ul class="project_techstack_list">
      
        <li id="b">HTML</li>
        <li id="b">CSS</li>
        <li id="b">JavaScript</li>
      
        <li id="b">php</li>
        <li id="b">Mysql</li>
      </ul>
    </div>
    <div class="project">
      <h1 class="project_title">EXPENSE TRAKER</h1>
      <p class="project_description">
        An Andriod Application for keep tracking daily Expense<br>
        It is andriod based application in which users can keep track of their daily spends.It provides an interface for 
        adding the spendings.It adds the previous spending to current spending so that user can minimize thier spends.

      </p>
      <h3 class="project_techstack">Tech Stack:</h3>
      <ul class="project_techstack_list">
        <li id="b">XML</li>
        <li id="b">Java</li>
      </ul>
    </div>
  </div>
</body>

</html>