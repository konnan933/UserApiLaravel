<form action='/api/task/{{$task->id}}' method="post">
    {{csrf_field()}}
    {{method_field("PUT")}}
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <select name="user_id" placeholder="User_id">
        @foreach ($users as $user)
        <option value="{{$user->id}}" {{$user->id == $task->user_id ? 'selected' : ''}}>{{$user->name}}
        </option>
        @endforeach
    </select>
    <input type="date" name="end_date" placeholder="end_date">
    <select name="status" placholder="Status">
        <option value=1 <?php echo $task->status == 1 ? 'selected' : '' ?>>Open</option>

        <option value=0 <?php echo $task->status == 0 ? 'selected' : '' ?>>Closed</option>

    </select>
    <input type="submit" value="Ok">
</form>