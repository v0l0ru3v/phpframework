<form action="../article/store" method="post" class="form">
    <input tupe="text" name="text" id="" placeholder="Название статьи">    
    <input tupe="text" name="title" id="" placeholder="Текст статьи">
    <select name="author" id="">
        <?php foreach($users as $user): ?>
            <option value="<?=$user->getId();?>"><?=$user->getNickname();?></option>
            <?php endforeach;?>
    </select>
    <button type="submit">Опубликовать</button>
    <style>
        
        .form {
            margin: 0 auto;
            display: flex;
            flex-direction:column;
            max-width: 500px;
            gap: 20px;
        }
        input {
            height: 35px;
        }
        button {
            margin:0 auto;
            max-width: 150px;
            padding: 10px 20px;
            background-color: blue;
            border: 2px solid black;
            border-radius: 10px;
            color: white;
            transition: 0.4s;
        }
           
        button:hover {
                transition: 0.4s;
                background-color: white;
                color: black;
        }    
    </style>
</form>
