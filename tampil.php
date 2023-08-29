<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>DATA Masyarakat</h1>
    <table border="1">
        <tr>
            <th>nik</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>no_tlp</th>
        </tr>
        <?php
        include 

        $no =1;
        $data=mysqli_query($koneksi,"SELECT * FROM pengaduanmasyarakatdb");
        while ($hasil= mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $hasil['nik'];?></td>
                <td><?php echo $hasil['nama'];?></td>
                <td><?php echo $hasil['username'];?></td>
                <td><?php echo $hasil['username'];?></td>
                <td><?php echo $hasil['no_tlp'];?></td>
                <td>
                    <a href=""> ubah </a>
                    <a href=""> hapus </a>
                </td>
            </tr>
            <?php
        }
        ?>
</body>
</html>


