<?php
$json   = file_get_contents("http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-30");
$data   = json_decode($json, false);

?>
<html>
    <head>
        <title>Pindah Ketable</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <td colspan="8"><center>Data Absensi Mobile</center></td> </tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Presensi ke</th>
                    <th>Photo</th>
                    <th>Macaddress</th>
                    <th>Created at</th>
               
            </thead>
            <tbody>
            <?php
            for ($i=0; $i < 2 ; $i++) { 
                # code...
                $link = $data->presensi->data_absensi_mobile[$i]->photo[$i]; 
               echo "
                <tr>
                    <td>".$data->presensi->data_absensi_mobile[$i]->id."</td>
                    <td>".$data->presensi->data_absensi_mobile[$i]->nip."</td>
                    <td>".$data->presensi->data_absensi_mobile[$i]->latitude."</td>
                    <td>".$data->presensi->data_absensi_mobile[$i]->longitude."</td>
                    <td>".$data->presensi->data_absensi_mobile[$i]->presensi_ke."</td>
                    <td><a href = '$link' target='_blank'>Foto</a></td>
                    <td>".$data->presensi->data_absensi_mobile[$i]->macaddress."</td>
                    <td>".$data->presensi->data_absensi_mobile[$i]->created_at."</td>                    
                </tr>";
                }
            ?> 
            </tbody>
        </table>

        <table border="1">
            <thead>
                <tr>
                    <td colspan="8"><center>Data Absensi Finger</center></td></tr>
                    <th>Finger Id</th>
                    <th>NIP</th>
                    <th>Tag Date</th>
                    <th>Finger IP</th>
                    <th>Latest update</th>
                
            </thead>
            <tbody>
            <?php
            
               echo "
                <tr>
                    <td> ".$data->presensi->data_absensi_finger[0]->finger_id."</td>
                    <td> ".$data->presensi->data_absensi_finger[0]->nip."</td>
                    <td> ".$data->presensi->data_absensi_finger[0]->tag_date."</td>
                    <td> ".$data->presensi->data_absensi_finger[0]->finger_ip."</td>
                    <td>".$data->presensi->latest_update."</td>
                    </tr>";
            ?> 

            </tbody>
        </table>
    </body>
</html>