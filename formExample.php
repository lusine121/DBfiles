<?php
if (isset($resp) && !empty($resp)){
  echo "<ul>";
  foreach ($resp as $key => $value){
      echo "<li>";
      echo $value;
      echo "</li>";
  }
  echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />

<style>
.form-control{margin-bottom:13px}
</style>
</br>
<div class="container">
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 well well-sm">
 <form action="validationFormExample.php" method="post" class="form" role="form">
 <header><h2>Create News</h2></header>
 <input class="form-control" name="name" placeholder="First Name" type="text" value="<?php echo isset($_POST['firstname'])?$_POST['firstname']:''?>" required />
 <input class="form-control" name="name" placeholder="Last Name" type="text" value="<?php echo isset($_POST['lastname'])?$_POST['lastname']:''?>" required />
 <label for="date">Birth Year</label>
 <div class="row">
 <div class="col-xs-4 col-md-4">
 <select class="form-control">
 <option value="День">День</option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 <option value="6">6</option>
 <option value="7">7</option>
 <option value="8">8</option>
 <option value="9">9</option>
 <option value="10">10</option>
 <option value="11">11</option>
 <option value="12">12</option>
 <option value="13">13</option>
 <option value="14">14</option>
 <option value="15">15</option>
 <option value="16">16</option>
 <option value="17">17</option>
 <option value="18">18</option>
 <option value="19">19</option>
 <option value="20">20</option>
 <option value="21">21</option>
 <option value="22">22</option>
 <option value="23">23</option>
 <option value="24">24</option>
 <option value="25">25</option>
 <option value="26">26</option>
 <option value="27">27</option>
 <option value="28">28</option>
 <option value="29">29</option>
 <option value="30">30</option>
 <option value="31">31</option>
 </select>
 </div>
 <div class="col-xs-4 col-md-4">
 <select class="form-control">
 <option value="Месяц">Месяц</option>
 <option value="Январь">Январь</option>
 <option value="Февраль">Февраль</option>
 <option value="Март">Март</option>
 <option value="Апрель">Апрель</option>
 <option value="Май">Май</option>
 <option value="Июнь">Июнь</option>
 <option value="Июль">Июль</option>
 <option value="Август">Август</option>
 <option value="Сентябрь">Сентябрь</option>
 <option value="Октябрь">Октябрь</option>
 <option value="Ноябрь">Ноябрь</option>
 <option value="Декабрь">Декабрь</option>

 </select>
 </div>
 <div class="col-xs-4 col-md-4">
 <select class="form-control">
 <option value="Год">Год</option>
 <option value="2018">2000</option>
 <option value="2017">1999</option>
 <option value="2014">1998</option>
 <option value="2015">1997</option>
 <option value="2016">1996</option>
 <option value="2017">1995</option>
 <option value="2017">1994</option>
 <option value="2017">1993</option>
 <option value="2017">1992</option>
 <option value="2017">1991</option>
 <option value="2017">1990</option>
 <option value="2017">1989</option>
 <option value="2017">1988</option>
 <option value="2017">1987</option>
 <option value="2017">1986</option>
 <option value="2017">1985</option>
 <option value="2017">1984</option>
 <option value="2017">1983</option>
 <option value="2017">1982</option>
 <option value="2017">1981</option>
 <option value="2017">1980</option>
 <option value="2017">1979</option>
 <option value="2017">1978</option>
 <option value="2017">1977</option>
 <option value="2017">1976</option>
 <option value="2017">1975</option>
 </select>
 </div>
 </div>
 <label>Bio</label><br />
 <textarea name="comments"  placeholder="Write Something About You" minlength="5" maxlength="500" class="form-control" rows="9" cols="25" required="required" value="<?php echo isset($_POST['comments'])?$_POST['comments']:''?>"></textarea>
 <script>
$('textarea').kwcount();
</script>
</br>
<label>News Categories</label><br />
 <div class="row">
 <div class="col-xs-4 col-md-4">
 <select class="form-control">
 <option value="news">news</option>
 <option value="style">style</option>
 <option value="medicine">medicine</option>
 <option value="sport">sport</option>
 </select>
 </div>
 </div>
 <label>News Heading</label><br />
 <textarea name="comments"  placeholder="Heading" minlength="5" maxlength="500" class="form-control" rows="3" cols="25" required="required" value="<?php echo isset($_POST['comments'])?$_POST['comments']:''?>"></textarea>
 <script>
$('textarea').kwcount();
</script>
</br>
 <label>News Description</label><br />
 <textarea name="comments"  placeholder="Description" minlength="5" maxlength="500" class="form-control" rows="5" cols="25" required="required" value="<?php echo isset($_POST['comments'])?$_POST['comments']:''?>"></textarea>
 <script>
$('textarea').kwcount();
</script>
</br>
<b>Select image to upload:</b><br />
<br />
    <input type="file" name="fileToUpload" id="fileToUpload" required="required">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
 
 <label>Пол</label><br />
        <input type="radio" name="Gender" placeholder="Male" /> Male<br />
        <input type="radio" name="Gender" placeholder="Female" /> Female<br />
        <br />
 <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
 </form>
 </div>
 </div>
 </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>