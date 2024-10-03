<h4>Add Data</h4>
<hr>
<form action="index.php?mod=workout&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Workout Type</label>
            <input type="text" name="workout_type" class="form-control" value="<?=(isset($_POST['workout_type']))?$_POST['workout_type']:'';?>">
        </div>
        <div class="form-group">
            <label for="">Workout Duration (HH:MM:SS)</label>
            <input type="text" name="workout_duration" class="form-control" value="<?=(isset($_POST['workout_duration']))?$_POST['workout_duration']:'';?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Amount Sets</label>
            <input type="text" name="amount_sets" class="form-control" value="<?=(isset($_POST['amount_sets']))?$_POST['amount_sets']:'';?>">
        </div>
        <div class="form-group">
            <label for="s">Amount Reps</label>
            <input type="text" name="amount_reps" class="form-control" value="<?=(isset($_POST['amount_reps']))?$_POST['amount_reps']:'';?>">
        </div>
        <button type="submit" class="btn btn-default btn-primary">Save</button> 
    </div>
</form>