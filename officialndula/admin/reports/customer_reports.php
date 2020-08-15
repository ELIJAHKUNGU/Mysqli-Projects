<h1>Customers </h1>
<?php 
$sql = "SELECT *
        FROM `users` 
        ";
if($result = $db->db_query($sql)){
        $no_rows = $db->db_num($sql);	
        if($no_rows){
            echo '
                <div align="center">
                    <table id="pm" border="1" >
                    <thead>
                        <tr>
                            <th></th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Last activity</th>
                            <th>Date Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                    ';
                    $i=1;
                    while($row = $result->fetch_assoc()){
                        $type = ($row['admin']==5) ? "Admin" : "customer";
                        $last_seen = Rdate_min($row['last_activity']);
                        $date_joined = date('d-M-Y',$row['date_joined']);
                        echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$type.'</td>
                            <td>'.ucfirst($row['first_name']).' '.ucfirst($row['last_name']).'</td>
                            <td>'.$row['username'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$last_seen.'</td>
                            <td>'.$date_joined.'</td>
                        </tr>
                            ';
                        $i++;
                    }
                echo '</tbody>
                     </table>
                   </div>';
        }
}else{
    echo 'Oops! No customers to diplay';
}
?>