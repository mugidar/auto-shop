<h1>Ur info</h1>

<table border="0">
    <tr>
        <td>Login (email)</td>
        <td>{$arUser['email']}</td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><input name="name" type="text" id="newName" value="{$arUser['name']}"></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input name="phone" type="tel" id="newPhone" value="{$arUser['phone']}"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input name="address" type="text" id="newAddress" value="{$arUser['address']}"></td>
    </tr>
    <tr>
        <td>New pass</td>
        <td><input name="pwd1" type="password" id="newPwd1" value="{$arUser['pwd1']}"></td>
    </tr>
    <tr>
        <td>Repeat pass</td>
        <td><input name="pwd2" type="password" id="newPwd2" value="{$arUser['pwd2']}"></td>
    </tr>
    <tr>
        <td>Insert pass to update info </td>
        <td><input name="curPwd" type="password" id="curPwd" value="{$arUser['curPwd']}"></td>
    </tr>
    <tr>
        <td></td>
        <td><input onclick="updateUserData()" type="button" value="Save changes"></td>
    </tr>
</table>