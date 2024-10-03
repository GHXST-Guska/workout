<div class="row">
    <div class="pull-left">
        <h4>Workout List</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=workout&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>Workout Type</td>
                <td>Workout Duration</td>
                <td>Amount Sets</td>
                <td>Amount Reps</td>
                <td>Date</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($workout != null) {
                    $no=1;
                    foreach ($workout as $row) { ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$row['workout_type']?></td>
                            <td><?=$row['workout_duration']?></td>
                            <td><?=$row['amount_sets']?></td>
                            <td><?=$row['amount_reps']?></td>
                            <td><?=$row['date']?></td>
                            <td>
                                <a href="index.php?mod=workout&page=edit&id=<?=md5($row['id_workout'])?>"><i class="fa fa-pencil"></i></a>
                                <a href="index.php?mod=workout&page=delete&id=<?=md5($row['id_workout'])?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
            <?php   $no++;}
                }
            ?>
        </tbody>
    </table>
</div>