<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Bootstrap CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>

    <title>Title</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="fileToUpload">Resim</label>
                    <input type="file" name="fileToUpload" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Upload" name="btnFileUpload" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>