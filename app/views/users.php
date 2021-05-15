<h1>Users List</h1>

<table>
    <tr>
        <th> Name </th> 
        <th> Email </th> 
        <th> Phone </th>
    </tr>
    <?php 
        foreach ($data as $key => $user) {
        echo '<tr>';
            echo '<td>' . $user->uname . '</td>';
            echo '<td>' . $user->uemail . '</td>';
            echo '<td>' . $user->uphone . '</td>';
        echo '</tr>'; 
        }
    ?>
</table>