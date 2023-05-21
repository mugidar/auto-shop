<h1>Інформація</h1>

<table border="0">
    <tr>
        <td>Ваш логін (email)</td>
        <td>{$arUser['email']}</td>
    </tr>
    <tr>
        <td>Ім'я / Нікнейм</td>
        <td><input name="name" type="text" id="newName" value="{$arUser['name']}"></td>
    </tr>
    <tr>
        <td>Номер телефону</td>
        <td><input name="phone" type="tel" id="newPhone" value="{$arUser['phone']}"></td>
    </tr>
    <tr>
        <td>Адреса</td>
        <td><input name="address" type="text" id="newAddress" value="{$arUser['address']}"></td>
    </tr>
    <tr>
        <td>Новий пароль</td>
        <td><input name="pwd1" type="password" id="newPwd1" value="{$arUser['pwd1']}"></td>
    </tr>
    <tr>
        <td>Повторіть пароль</td>
        <td><input name="pwd2" type="password" id="newPwd2" value="{$arUser['pwd2']}"></td>
    </tr>
    <tr>
        <td>Введіть нинішній пароль для змін</td>
        <td><input name="curPwd" type="password" id="curPwd" value="{$arUser['curPwd']}"></td>
    </tr>
    <tr>
        <td></td>
        <td><input onclick="updateUserData()" type="button" value="Зберегти"></td>
    </tr>
</table>