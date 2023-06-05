<form action="../article/store" method="post">
    <input tupe="text" name="text" id="" placeholder="Название статьи">    
    <input tupe="text" name="title" id="" placeholder="Текст статьи">
    <select name="author" id="">
        <?php foreach($users as $user): ?>
            <option value="<?=$user->getId();?>"><?=$user->getNickname();?></option>
            <?php endforeach;?>
    </select>
    <button type="submit">Save</button>
</form>
