   <h1><?= $courses_name; ?></h1>
    <form action="">
        <select name="block" id="">
        <?php foreach($list_of_courses as $key=>$value):?>
            <option value="<?= $key; ?>"> <?= $value; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Tìm Khoá Học</button>
    </form>