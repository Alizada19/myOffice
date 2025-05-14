<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel</title>
</head>
<body>
    <h2>Upload Excel File</h2>
    <form action="<?=base_url('codeigniter/public//uploadexcel/excel')?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".xls,.xlsx" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
