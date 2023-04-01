<?php 

    require 'Lingkaran.php';
    require 'PersegiPanjang.php';
    require 'Segitiga.php';

    $bangun_datar1 = new Lingkaran(12);
    $bangun_datar2 = new PersegiPanjang(12, 8);
    $bangun_datar3 = new Segitiga(3, 6);
    $bangun_datar4 = new Lingkaran(7);
    $bangun_datar5 = new PersegiPanjang(5, 2);
    $bangun_datar6 = new Segitiga(6, 4);
    $bangun_datar7 = new PersegiPanjang(7, 3);
    $bangun_datar8 = new Segitiga(5, 8);

    $array_bangun_datar = [
        $bangun_datar1, 
        $bangun_datar2, 
        $bangun_datar3, 
        $bangun_datar4, 
        $bangun_datar5, 
        $bangun_datar6, 
        $bangun_datar7, 
        $bangun_datar8
    ];
    
    $thead_table = ['No', 'Nama Bangun Datar', 'Luas','Keliling'];


?>
<div class="data-hasil">
    <div class="scroll">
        <table width=100%>
            <thead>
                
                <tr>
                <?php 
                foreach($thead_table as $thead){
                    ?>
                    <th><?= $thead ?></th>
                    <?php }?>
                </tr>

            </thead>
            <tbody>
                <?php
                $no = 1;
                
                foreach($array_bangun_datar as $objectBD){
                    
                    ?>
                    <tr>
                        <td><?= $no ?> </td>
                        <td><?= $objectBD->namaBidang() ?></td>
                        <td><?= $objectBD->luasBidang() ?> cm</td>
                        <td><?= $objectBD->kelilingBidang() ?> cm</td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</div>