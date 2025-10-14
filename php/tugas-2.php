<?php 
$students = [[
    "nim" => "2025B2K",
    "nama" => "Sulatun Ningsih",
    "alamat" => "Jl. Murodah kanceng",
    "hp" => "0856743474",
    "file" => "foto-1.jpg"
],[
    "nim" => "2025B6K",
    "nama" => "Juminten",
    "alamat" => "Jl. mabes kanceng",
    "hp" => "08464674746",
    "file" => "foto-2.jpg"
],[
    "nim" => "2025B3K",
    "nama" => "Liramaut Tan",
    "alamat" => "Jl. saja jadian kaga",
    "hp" => "0852342341",
    "file" => "foto-3.jpg"
],[
    "nim" => "2025B7K",
    "nama" => "Melamin suroo",
    "alamat" => "Jl. inn  saja",
    "hp" => "085133404",
    "file" => "foto-4.jpg"
],[
    "nim" => "2025B54K",
    "nama" => "Sunyoto",
    "alamat" => "Jl. ieredfaja",
    "hp" => "085234204",
    "file" => "ILO FG Logo.pdf"
]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">



</head>

<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Data Mahasiswa
                         </div>
                        <div class="card-body">
                            <table class="table table-bordered text-left ">
                            </div>
                            <tr>
                                <th>NO</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NO. HP</th>
                                <th>file</th>
                            </tr>
                             <?php 
                                foreach ($students as $key => $student) {
                              ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $student["nim"] ?></td>
                                <td><?php echo $student["nama"] ?></td>
                                <td><?php echo $student["alamat"] ?></td>
                                <td><?php echo $student["hp"] ?></td>
                                <td>
                                <?php 
                                if(pathinfo($student["file"], PATHINFO_EXTENSION) == "jpg") {
                                    ?>
                                    <img src="img/<?php echo $student["file"] ?>"width="115">
                                    <?php
                                } elseif (pathinfo($student["file"], PATHINFO_EXTENSION) == "pdf") {
                                    ?>
                                    <a href="img/<?php echo $student["file"] ?>" target="_blank"><?php echo $student["file"] ?></a>
                                    <?php 
                                } 
                                ?>  
                                
                                
                            </td>
                            </tr>
                            <?php 
                        }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>