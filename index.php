<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>تولید کننده محتوا</title>
</head>
<body>
    <div class="container-fluid bg-primary p-2">
        <div class="row">
            <div class="col-sm-3">
                <p class="h1 text-white">
                    تولید کننده محتوا
                </p>
            </div>
            <div class="col-sm-6">.</div>
            <div class="col-sm-3">
                <div class="btn btn-light">
                    ورود به پنل
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <p class="text-light text-center">
        با این سرویس شما میتوانید متن هایی که دوست دارید را به هوش مصنوعی ما بدهید تا متن هایی اختصاصی برای شما ایجاد کند
        </p>
    </div>
    <div class="container pt-5">
        
        <form class="form" method="post">
        
            <label for="email" class="form-label">عنوان</label>
            <input  type="text" class="form-control" name="title" id="title"><br>
            <label for="email" class="form-label">متن</label>
            <textarea class="form-control" name="text"></textarea><br>
            <input type="submit" value="بساز" class="btn btn-primary" name="submit" id="submit">
            
        </form>
                <?php 
                    include 'openai.php';
                    if(isset($_POST['submit'])){
                        if(empty($_POST['title'])){
                            echo "<br><div class='alert form alert-warning'>لطفا فیلد مربوط به عنوان را وارد نمایید</div>";
                        }
                        elseif(!strlen(trim($_POST['text']))){
                            echo "<br><div class='alert form text-center alert-warning'>لطفا فیلد مربوط به متن را وارد نمایید</div>";
                        }
                        else{
                            echo 
                            "<div class='container w-50 mt-5 bg-primary text-center text-white rounded p-3'>"
                            .main($_POST['text'])
                            ."</div>";
                            #echo "ما محصولات بهداشتی باکیفیت را در وب سایت ما فراهم می‌کنیم. شما می‌توانید به ما اطمینان کنید که بهترین محصولات با کیفیت را در اختیار شما قرار دهید.";
                        }
                    }
                ?>
        
    </div>
    <footer class="text-center text-white fixed-bottom bg-dark">
  <!-- Grid container -->
  <div class="container pt-2">
    <!-- Section: Social media -->
    <section class="">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-linkedin"></i></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-2 bg-primary text-light">
    © 2020 Copyright:
    <a class="text-light" href="mohtavasaz.com">Mohtavasaz.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>