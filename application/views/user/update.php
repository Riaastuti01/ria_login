<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FORM UPDATE</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <br>
        <h1>FORM UPDATE</h1>

        <form method="post" action="<?= base_url('user/update/' . $item->id) ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Nama" value="<?= $item->nama ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jabatan</label>
                <input type="text" class="form-control" name="nohp" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Jabatan" value="<?= $item->nohp ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgllahir" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="<?= $item->tgllahir ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Jurusan" value="<?= $item->jurusan ?>">
            </div>


            <button type="submit" class="btn btn-warning btn-block">Update</button>
        </form>
    </div>
</body>

</html>