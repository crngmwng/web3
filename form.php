<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>form</title>
    
</head>
<body>

    <form action="" method="POST">

        <label>
            Имя:<br />
            <input name="name"
                   value="" />
        </label><br />

        <label>
            email:<br />
            <input name="email"
                   value="test@example.com"
                   type="email" />
        </label><br />

        <select id="year" name="year"></select> <br />
        <script>for (let year = 1920; year <= 2022; year++) {
            let options = document.createElement("OPTION");
            document.getElementById("year").appendChild(options).innerHTML = year;
          }
        </script>

        Пол:
        <label>
            <input type="radio" checked="checked"
                   name="radio-group-1" value="m" />
            Муж
        </label>
        <label>
            <input type="radio"
                   name="radio-group-1" value="f" />
            Жен
        </label><br />

        Количество конечностей: <br />
        <label>
            <input type="radio" checked="checked"
                   name="radio-group-2" value="1" />
            1
        </label>
        <label>
            <input type="radio"
                   name="radio-group-2" value="2" />
            2
        </label>
        <label>
            <input type="radio" checked="checked"
                   name="radio-group-2" value="3" />
            3
        </label>
        <label>
            <input type="radio"
                   name="radio-group-2" value="4" />
            4
        </label><br />

        <label>
            Сверхспособности:
            <br />
            <select name="power"
                    multiple="multiple">
                <option value="immortality">Бессмертие</option>
                <option value="pass_thr_walls" selected="selected">Прохождение сквозь стены</option>
                <option value="levitation" selected="selected">Левитация</option>
            </select>
        </label><br />

        <label>
           Биография:<br />
            <textarea name="bio"></textarea>
        </label><br />

        <label><input type="checkbox" checked="checked" name="check-1" />
            С контрактом ознакомлен
        </label><br />

         <input type="submit" value="ok" />

    </form>

</body>
</html>
