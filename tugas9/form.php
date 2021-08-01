<!DOCTYPE html>
<html>
    <head>
        <title>INSERT DATA</title>
    </head>
    <body>
        <form action="aksi.php" method="post">
            <table>
                <tr>
                    <td>Hari : </td>
                    <td><select id="hari" name="hari" >
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jum'at">Jum'at</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Jam : </td>
                    <td><input type="text" name="jam" required</td>
                </tr>
                <tr>
                    <td>Ruang : </td>
                    <td><input type="text" name="ruang" required</td>
                </tr>
                <tr>
                    <td>Mata Kuliah : </td>
                    <td><select id="id_matkul" name="id_matkul">
                        <option value="1">Pemrograman Web</option>
                        <option value="2">Metodologi Penelitian</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="SAVE"></td>
                    <td><input type="reset" name="CANCEL"></td>
                </tr>
            </table>
        </form>
    </body>
</html>