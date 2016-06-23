<style type="text/css">
    #dis {
        display: none;
    }
</style>


<div id="dis">
    <!-- here message will be displayed -->
</div>


<form method='post' id='emp-SaveForm' action="#">

    <table class='table table-bordered'>

        <tr>
            <td>Services Name VN</td>
            <td><input type='text' name='chuyenkhoa_name' class='form-control'
                       placeholder='EX : chuyên khoa nội tim mạch..' required/></td>
        </tr>

        <tr>
            <td>Services Name EN</td>
            <td><input type='text' name='chuyenkhoa_name_en' class='form-control' placeholder='EX : Inpatient Speciality'
                       required></td>
        </tr>
        <tr>
            <td>Services Description VN</td>
            <td>
                <textarea id="chuyenkhoa_descript" name='chuyenkhoa_descript' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required/>
                <script type=”text/javascript”>CKEDITOR.replace('chuyenkhoa_descript',
                    {
                        filebrowserBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html?type=Images',
                        filebrowserUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Services Description EN</td>
            <td>
                <textarea id="chuyenkhoa_descript_en" name='chuyenkhoa_descript_en' class='form-control'
                          placeholder='EX: Cung cáp các dịch vụ nội trú tốt nhất,.. ' required/>
                <script type=”text/javascript”>CKEDITOR.replace('chuyenkhoa_descript_en',
                    {
                        filebrowserBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../../../assets/editor/ckfinder/ckfinder.html?type=Images',
                        filebrowserUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../../../assets/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                    });
                </script>
            </td>
        </tr>
        <tr>
            <td>Into Services</td>
            <td>
                <select name="services_id" class="form-control">
                    <?php
                    require_once '../../../../connect/dbconfig.php';
                    $stmt = $db_con->prepare("SELECT * FROM services");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?php echo $row['services_id']; ?>"><?php echo $row['services_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>
                ChuyenKhoa Leading
            </td>
            <td>
                <label>
                    <input type="radio" name="chuyenkhoa_muinhon" value="1"> YES
                </label>
                <label>
                    <input type="radio" name="chuyenkhoa_muinhon" value="0" checked> NO
                </label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
                    <span class="glyphicon glyphicon-plus"></span> Save this Record
                </button>
            </td>
        </tr>

    </table>
</form>
     
