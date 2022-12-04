<?php 

// $hari = 4;

// switch ($hari) {
//     case 1:
//         echo 'minggu';
//         break;
//     case 2:
//         echo 'senin';
//         break;
//     case 3:
//         echo 'selasa';
//         break;
    
//     default:
//         echo 'hari blom dibuat';
//         break;
// }

    $pilihan = 'simpan';

    switch ($pilihan) {
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih ubah';
            break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
        
        default:
            echo 'pilihan blom ada';
            break;
    }


?>